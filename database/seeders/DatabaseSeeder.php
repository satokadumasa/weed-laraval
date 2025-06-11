<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\NewsSite;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'スサノオ',
        //     'email' => 'admin@example.com',
        //     'password' => 'password',
        // ]);

        // NewsSite::create([
        //     'name'      => 'Yahoo!ニュース・トピックス - 経済',
        //     'url'       => 'https://news.yahoo.co.jp/rss/topics/business.xml',
        //     'language'  => 'ja',
        //     'copyright' => 'Yahoo!ニュース・トピックス - 経済',
        //     'is_enable' => 1,
        // ]);

        Ticket::create([
            'hash'           => 'cicZ8Kg3uLclyKYI0SK51CQg3WNuOglX',
            'ticket_code'    => 'HC0001',
            'badge_name'     => 'User001',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user01@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'WqrGj9Zz7pn0xe7XaorgqVfZOJShCgUq',
            'ticket_code'    => 'HC0002',
            'badge_name'     => 'User002',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user01@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'TIoHduc9SfmvlqQJ1G5UjqqMOECwAn4Q',
            'ticket_code'    => 'HC0002',
            'badge_name'     => 'User002',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user02@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'RA6G7RGZg2ZG68XYS9h0O1Dr3YCWTo4L',
            'ticket_code'    => 'HC0004',
            'badge_name'     => 'User004',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user04@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'Zv4oi9LvvNGgSsHNrwqBv68bft7KEYGe',
            'ticket_code'    => 'HC0005',
            'badge_name'     => 'User005',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user05@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'TpFmZw3Ykxr4NP1a7KtIQsPQayD14jnr',
            'ticket_code'    => 'HC0006',
            'badge_name'     => 'User006',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user06@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'nU6l3u9DmBoGJcMOVAkLHioRAJ5T4V9V',
            'ticket_code'    => 'HC0007',
            'badge_name'     => 'User007',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user07@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'eMWvJtspj7VGLokTSYxdLlBi7ADD8l3W',
            'ticket_code'    => 'HC0008',
            'badge_name'     => 'User008',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user08@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => 'yIwc8jYJ9IqVQyz3rQTjQQDWzVIDtSxu',
            'ticket_code'    => 'HC0009',
            'badge_name'     => 'User009',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user09@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Ticket::create([
            'hash'           => '6HLzsXMsKh9V7wadUQNLHsYbn5J1HwM7',
            'ticket_code'    => 'HC0010',
            'badge_name'     => 'User010',
            'age'            => 24,
            'gender'         => 1,
            'email'          => 'user10@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);
    }
}
