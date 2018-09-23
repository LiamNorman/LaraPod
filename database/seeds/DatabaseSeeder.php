<?php

use Illuminate\Database\Seeder;
use App\Database\Seeds\PodcastSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PodcastSeeder::class);
    }
}
