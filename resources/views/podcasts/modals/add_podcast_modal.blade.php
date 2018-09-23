<div class="modal fade modal-primary" id="add_podcast_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add a new podcast feed</h4>
            </div>
            {!! Form::model($podcast = new \App\Podcast, ['method' =>'POST','action' => ['PodcastsController@addPodcast']]) !!}
            <div class="modal-body">
                <div class="form-group">
                    {{ Form::label('name', 'Podcast Name') }}
                    {!! Form::text('name', 'The Laravel Podcast',
                    ['class' => 'form-control','required',
                    'placeholder' => 'The Laravel Podcast']) !!}

                    {{ Form::label('description', 'Podcast Description') }}
                    {!! Form::text('description', 'A podcast about Laravel',
                    ['class' => 'form-control','required',
                    'placeholder' => 'A podcast about Laravel']) !!}

                    {{ Form::label('web_url', 'URL to Podcast') }}
                    {!! Form::text('web_url', 'http://laravelpodcast.com',
                    ['class' => 'form-control','required',
                    'placeholder' => 'http://laravelpodcast.com']) !!}

                    {{ Form::label('feed_url', 'RSS Feed') }}
                    {!! Form::text('feed_url', 'http://www.laravelpodcast.com/131a3da5',
                    ['class' => 'form-control','required',
                    'placeholder' => 'http://www.laravelpodcast.com/131a3da5']) !!}

                    {{ Form::label('feed_thumbnail_location', 'Web Thumbnail') }}
                    {!! Form::text('feed_thumbnail_location', 'https://media.simplecast.com/podcast/image/3894/1511814564-artwork.jpg',
                    ['class' => 'form-control','required',
                    'placeholder' => 'https://media.simplecast.com/podcast/image/3894/1511814564-artwork.jpg']) !!}
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::button('<i class="fa fa-fw fa-close" aria-hidden="true"></i> Cancel', array('class' => 'btn btn-default pull-left', 'type' => 'button', 'data-dismiss' => 'modal' )) !!}
                {!! Form::button('<i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add Feed', array('class' => 'btn btn-primary pull-right', 'type' => 'submit', 'id' => 'confirm' )) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
