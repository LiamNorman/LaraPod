<?php

use Faker\Generator as Faker;
use App\Podcast;

$factory->define(Podcast::class, function (Faker $faker) {
    return [
        'name' => 'My Test Podcast',
        'description' => 'Awesome Test Podcast',
        'web_url' => 'https://MyTestPodCast',
        'feed_url' => 'http://feeds.com/MyTestPodCast',
        'feed_thumbnail_location' => 'images/mytestpodcast.png',
        'active' => true,
    ];
});
