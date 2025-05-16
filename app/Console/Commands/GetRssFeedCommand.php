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
    }
    }
}
