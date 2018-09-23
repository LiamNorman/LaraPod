<?php

namespace Tests\Browser;

use App\Podcast;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PodcastBrowserTest extends DuskTestCase
{
    use DatabaseMigrations;
    /** @test */
    public function can_view_podcasts()
    {
        $podcasts = factory(Podcast::class, 2)->create();
        foreach ($podcasts as $podcast) {
            $this->browse(function (Browser $browser) use ($podcast) {
                $browser->visit("/podcasts/")
                    ->assertSee($podcast->name);
            });
        }
    }
}

