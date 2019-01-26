<div class="container">
    <form action="{{$action ?? route('event.store')}}" method="POST" name="create.article">
        @csrf
        @if (isset($method))
            @method($method)
        @endif
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Event Title</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $title ?? null }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="event-date">Date of Event:</label>
            <input type="date" class="form-control" name="event-date" id="event-date" value="{{ $event_date ?? null }}">
        </div>
        @include('includes.editor')
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

