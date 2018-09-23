@extends('layouts.app')

@section('content')
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Podcasts</h1>
                <p class="lead text-muted">Podcast Collection</p>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                        data-target="#add_podcast_modal" class="btn-add-podcast">Add Podcast
                </button>
            </div>
        </section>

        @isset($podcasts)
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        @foreach ($podcasts as $podcast)
                            @include('podcasts.partials.podcast', $podcast)
                        @endforeach
                    </div>
                </div>
                @endisset
                @empty($podcasts)
                    <div class="col-lg-4 offset-4">
                        <div class="alert alert-info" role="alert">No Available Podcasts...</div>
                    </div>
        @endempty

        @include('podcasts.modals.add_podcast_modal')
    </main>

@endsection

