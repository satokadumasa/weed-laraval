<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

    }

    private function getFeed($url)
    {
        $feed = new Feed;
        $url = 'https://news.yahoo.co.jp/rss/topics/business.xml'; // RSSのURL
        $rss = $feed->loadRss($url);
        $num = 10; //表示させたい件数
        $i = 0;
        $desW = 60; //概要（本文）の文字数
        if ( $desW != 0 ){
            $desW = ($desW*2)+2;
        }
        echo "CH-01\n";
        echo "rss:" . print_r($rss, true) . "\n";
        foreach ( $rss->item as $item ){
            echo "CH-02\n";
            echo "rss:" . print_r($item, true) . "\n";
            $site_name = $rss->title; // サイト名
            $site_link = $rss->link; // サイトリンク
            $site_description = $rss->description; // サイトディスクリプション
            $title = $item->title; // 記事タイトル
            $link = $item->link; // 記事リンク
            $timestamp = strtotime( $item->pubDate ); // 更新日時
            $image = $item->image->url; // アイキャッチ
            $description = $item->description; // 概要（本文）
            $imgurl = preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]+\>/i', $description, $imgurls);//コンテンツからimgタグ無いのURLを抜き出す 
            $description = strip_tags($description);
            if ( $desW != 0 ){
                $description = mb_strimwidth($description, 0, $desW, "…",'utf-8'); // 概要（本文）の文字数が超えたら『…』が付く
            }
            $days = 7; // 『New』を表示する日数
            $today = date('U'); // 今日って
            $sa = date('U',($today - $timestamp)) / 86400; // timestamp()の引数に86400を指定

        }
    }
}
