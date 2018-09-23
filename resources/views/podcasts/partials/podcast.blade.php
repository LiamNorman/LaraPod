<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="{{$podcast->feed_thumbnail_location}}">
        <div class="card-body">
            <p class="card-header">{{ $podcast->name }}</p>
            <p class="card-text">{{ $podcast->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                <small class="text-muted"></small>
            </div>
        </div>
    </div>
</div>

@section ('scripts')
    <script type="text/javascript">
        // Add Podcast Feed Modal
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $('.btn-add-podcast').click(function (e) {
                e.preventDefault();
            })
        });
    </script>
@endsection
