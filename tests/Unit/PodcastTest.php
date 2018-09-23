<?php

use Tests\TestCase;
use App\Podcast;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Mockery\Mock;
use App\Events\PodcastAdded;

class PodcastTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_create_podcast()
    {
        $this->withoutExceptionHandling();
        $podcast = factory(Podcast::class)->create();
        $this->assertDatabaseHas('podcasts', $podcast->toArray());
    }

    /** @test */
    function cannot_view_valid_podcast()
    {
        $invalidId = 991239123912999193192391;
        $response = $this->get("/podcasts/{$invalidId}");
        $response->assertStatus(404);
    }

    function podcast_has_valid_id()
    {
        $params = [
            'id' => 'bogus id',
            'name' => 'My Test Podcast',
            'description' => 'Awesome Test Podcast',
            'web_url' => 'https://MyTestPodCast',
            'feed_url' => 'http://feeds.com/MyTestPodCast',
            'feed_thumbnail_location' => 'images/mytestpodcast.png',
            'active' => true,
        ];
        Podcast::create($params);
    }

    /** @test */
    function can_create_valid_podcast()
    {
        $this->withoutExceptionHandling();
        $podcast = factory(Podcast::class)->make(['name' => 'My new fake podcast']);

        $response = $this->json('POST', '/podcasts/store', $podcast->toArray());

        $podcast = Podcast::where('name', 'My new fake podcast')->first();
        $response->assertStatus(201);
        $response->assertJson([
            'id' => $podcast->id
        ]);
    }

    /** @test */
    function can_store_podcast_thumbnail()
    {
        $podcast = factory(Podcast::class)->make([
            'feed_thumbnail_location' => 'https://media.simplecast.com/podcast/image/279/1413649662-artwork.jpg',
        ]);

        $mockedService = Mockery::mock(\App\PodcastUploadService::class);
        $mockedService->shouldReceive('storePodcastThumbnail')
            ->with($podcast)
            ->once()
            ->andReturn(true);
        $mockedService->storePodcastThumbnail($podcast);
    }

    /** @test */
    function added_event_is_fired_when_podcast_is_added()
    {
        Event::fake([PodcastAdded::class]);
        $podcast = factory(Podcast::class)->make();
        $this->json('POST', '/podcasts/store', $podcast->toArray());
        Event::assertDispatched(PodcastAdded::class, function ($event) {
            $podcast = Podcast::firstOrFail();
            return $event->podcast->is($podcast);
        });
    }
}
