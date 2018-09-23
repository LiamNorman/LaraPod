@extends('layouts.app')

@section('content')
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h3 class="jumbotron-heading">{{$podcast->name}}</h3>
            </div>
        </section>

        <div class="row">
            <div class="col-md-6 offset-2">
                <div class="card mb-6 shadow-sm">
                    <img class="card-img-top" src="{{$podcast->feed_thumbnail_location}}">
                    <div class="card-body">
                        <p class="card-header">{{ $podcast->name }}</p>
                        <p class="card-text">{{ $podcast->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
