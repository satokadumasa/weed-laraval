<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\NewsSite;
use App\Models\Ticket;
use App\Models\Status;
use App\Models\Pref;
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

        NewsSite::create([
            'name'      => 'Yahoo!ニュース・トピックス - 経済',
            'url'       => 'https://news.yahoo.co.jp/rss/topics/business.xml',
            'language'  => 'ja',
            'copyright' => 'Yahoo!ニュース・トピックス - 経済',
            'is_enable' => 1,
        ]);

        Ticket::create([
            'hash'           => 'cicZ8Kg3uLclyKYI0SK51CQg3WNuOglX',
            'ticket_code'    => 'HC0001',
            'badge_name'     => 'User001',
            'age'            => 24,
            'gender'         => 1,
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
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
            'first_name'     => '憲匡',
            'family_name'    => '佐藤',
            'email'          => 'user10@example.com',
            'post_code'      => '2710064',
            'pref_id'        => '12',
            'address'        => '松戸市上本郷',
            'building_name'  => '',
            'room_number'    => '',
            'description'    => '',
        ]);

        Status::create(['status' => '申込済（未収）']);
        Status::create(['status' => '申込済（領収済み）・チェックイン未了']);
        Status::create(['status' => 'チェックイン済']);
        Status::create(['status' => 'チェックアウト']);
        Status::create(['status' => 'キャンセル']);

        Pref::create(['pref' => '北海道']);
        Pref::create(['pref' => '青森県']);
        Pref::create(['pref' => '岩手県']);
        Pref::create(['pref' => '宮城県']);
        Pref::create(['pref' => '秋田県']);
        Pref::create(['pref' => '山形県']);
        Pref::create(['pref' => '福島県']);
        Pref::create(['pref' => '茨城県']);
        Pref::create(['pref' => '栃木県']);
        Pref::create(['pref' => '群馬県']);
        Pref::create(['pref' => '埼玉県']);
        Pref::create(['pref' => '千葉県']);
        Pref::create(['pref' => '東京都']);
        Pref::create(['pref' => '神奈川県']);
        Pref::create(['pref' => '新潟県']);
        Pref::create(['pref' => '富山県']);
        Pref::create(['pref' => '石川県']);
        Pref::create(['pref' => '福井県']);
        Pref::create(['pref' => '山梨県']);
        Pref::create(['pref' => '長野県']);
        Pref::create(['pref' => '岐阜県']);
        Pref::create(['pref' => '静岡県']);
        Pref::create(['pref' => '愛知県']);
        Pref::create(['pref' => '三重県']);
        Pref::create(['pref' => '滋賀県']);
        Pref::create(['pref' => '京都府']);
        Pref::create(['pref' => '大阪府']);
        Pref::create(['pref' => '兵庫県']);
        Pref::create(['pref' => '奈良県']);
        Pref::create(['pref' => '和歌山県']);
        Pref::create(['pref' => '鳥取県']);
        Pref::create(['pref' => '島根県']);
        Pref::create(['pref' => '岡山県']);
        Pref::create(['pref' => '広島県']);
        Pref::create(['pref' => '山口県']);
        Pref::create(['pref' => '徳島県']);
        Pref::create(['pref' => '香川県']);
        Pref::create(['pref' => '愛媛県']);
        Pref::create(['pref' => '高知県']);
        Pref::create(['pref' => '福岡県']);
        Pref::create(['pref' => '佐賀県']);
        Pref::create(['pref' => '長崎県']);
        Pref::create(['pref' => '熊本県']);
        Pref::create(['pref' => '大分県']);
        Pref::create(['pref' => '宮崎県']);
        Pref::create(['pref' => '鹿児島県']);
        Pref::create(['pref' => '沖縄県']);
    }
}
