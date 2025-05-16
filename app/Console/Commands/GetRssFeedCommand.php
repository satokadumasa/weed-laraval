<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\News;

class GetRssFeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-rss-feed-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RSS Feed取得';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $feed = new \Feed;
        $url = 'https://news.yahoo.co.jp/rss/topics/business.xml'; // RSSのURL
        $rss = $feed->loadRss($url);
        $desW = 60; //概要（本文）の文字数
        foreach ( $rss->item as $item ){
            $pub_date = strtotime( $item->pubDate ); // 更新日時
            $pub_date = date('Y-m-d H:i:s', $pub_date);
            $description = $item->description; // 概要（本文）
            $imgurl = preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]+\>/i', $description, $imgurls);//コンテンツからimgタグ無いのURLを抜き出す 
            $description = strip_tags($description);
            if ( $desW != 0 ){
                $description = mb_strimwidth($description, 0, $desW, "…",'utf-8'); // 概要（本文）の文字数が超えたら『…』が付く
            }
            $news = News::create([
                'title' => $item->title,
                'link' => $item->link,
                'description' => $description,
                'pub_date' => $pub_date,
                'image' => (isset($item->image) && isset($item->image->url)) ? $item->image->url : '',
                'img_url' => $imgurl,
                'is_delete' => 0,
            ]);
        }
    }
}
