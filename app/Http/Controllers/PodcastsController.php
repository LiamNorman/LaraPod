<?php

namespace App\Http\Controllers;

use App\Events\PodcastAdded;
use App\Podcast;
use App\PodcastUploadService;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::all();

        if ($podcasts->isEmpty()) {
            $podcasts = [];
        }

        return view('podcasts.index', [
            'podcasts' => $podcasts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function addPodcast(Request $request)
    {
        $this->store($request);
        return redirect('podcasts');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request = null)
    {
        $this->validate(request(), [
            'name' => ['required'],
            'description' => ['required'],
            'web_url' => ['required'],
            'feed_url' => ['required'],
            'feed_thumbnail_location' => ['required'],
        ]);

        $podcast = Podcast::create([
            'name' => request('name'),
            'description' => request('description'),
            'web_url' => request('web_url'),
            'feed_url' => request('feed_url'),
            'feed_thumbnail_location' => request('feed_thumbnail_location'),
            'is_favourite' => true,
            'active' => true,
        ]);

        $uploadService = new PodcastUploadService();
        $uploadService->storePodcastThumbnail($this);
        PodcastAdded::dispatch($podcast);

        return response()->json(['id' => $podcast->id], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view ('podcasts.show', ['podcast' => $podcast]);
    }

    /**
     * Favourite Podcast
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function favourite($id)
    {
        $podcast = Podcast::findOrFail($id);
        if ($podcast->is_favourite == true) {
            $podcast->is_favourite = false;
        } else {
            $podcast->is_favourite = true;
        }

        $podcast->save();
        return response()->json([], 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
