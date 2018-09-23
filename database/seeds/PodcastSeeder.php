<?php

namespace App\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Podcast;

class PodcastSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Podcast::create([
            'name' => 'The Laravel Podcast',
            'description' => 'An interview with Abed Halawi, Laracon EU speaker and Tech Lead at Vinelab',
            'web_url' => 'http://laravel.com/',
            'feed_url' => 'http://www.laravelpodcast.com/131a3da5',
            'feed_thumbnail_location' => 'https://media.simplecast.com/podcast/image/3894/1511814564-artwork.jpg',
            'active' => true,
        ]);

        Podcast::create([
            'name' => 'Full Stack Radio',
            'description' => '97: Ryan Florence - Building Accessible UI Components',
            'web_url' => 'http://fullstackradio.com/',
            'feed_url' => 'http://www.fullstackradio.com/97',
            'feed_thumbnail_location' => 'https://media.simplecast.com/podcast/image/279/1413649662-artwork.jpg',
            'active' => true,
        ]);

        Podcast::create([
            'name' => 'Software Engineering Daily',
            'description' => 'Checkr: Background Check Platform with Tomas Barreto',
            'web_url' => 'https://softwareengineeringdaily.com/feed/podcast/',
            'feed_url' => 'https://softwareengineeringdaily.com/2018/09/21/checkr-background-check-platform-with-tomas-barreto/',
            'feed_thumbnail_location' => 'http://softwaredaily.wpengine.com/wp-content/uploads/powerpress/SED_square_solid_bg.png',
            'active' => true,
        ]);

        Podcast::create([
            'name' => 'The Laravel Podcast',
            'description' => 'Interview: Adam Wathan, co-creator of Tailwind CSS and Laravel educator',
            'web_url' => 'http://laravel.com/',
            'feed_url' => 'http://www.laravelpodcast.com/131a3da5',
            'feed_thumbnail_location' => 'https://media.simplecast.com/podcast/image/3894/1511814564-artwork.jpg',
            'active' => true,
        ]);

        Podcast::create([
            'name' => 'The Laravel Podcast',
            'description' => 'Interview: Freek Van der Herten, Lead Developer at Spatie',
            'web_url' => 'http://laravel.com/',
            'feed_url' => 'http://www.laravelpodcast.com/131a3da5',
            'feed_thumbnail_location' => 'https://media.simplecast.com/podcast/image/3894/1511814564-artwork.jpg',
            'active' => true,
        ]);

        Podcast::create([
            'name' => 'Full Stack Radio',
            'description' => '95: Frank de Jonge - Implementing Event Sourcing',
            'web_url' => 'http://fullstackradio.com/',
            'feed_url' => 'http://www.fullstackradio.com/95',
            'feed_thumbnail_location' => 'https://media.simplecast.com/podcast/image/279/1413649662-artwork.jpg',
            'active' => true,
        ]);


    }
}
