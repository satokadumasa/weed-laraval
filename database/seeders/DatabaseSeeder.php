<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\NewsSite;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'スサノオ',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        NersSite::factory()->create([
            'name'      => 'Yahoo!ニュース・トピックス - 経済',
            'url'       => 'https://news.yahoo.co.jp/rss/topics/business.xml',
            'language'  => 'ja',
            'copyright' => 'Yahoo!ニュース・トピックス - 経済',
            'is_enable' => 1,
        ]);
    }
}
