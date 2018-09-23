<?php

namespace Tests\Feature;

use App\Podcast;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FavouritePodcastTest extends TestCase
{
    /** @test */
    public function can_favourite_podcasts()
    {
        $podcast = factory(Podcast::class)->create();
        $response = $this->get("/podcasts/{$podcast->id}/favourite");
        $this->assertDatabaseHas('podcasts', [
            'id' => $podcast->id,
            'is_favourite' => true,
        ]);
        $response->assertStatus(200);
    }
}
