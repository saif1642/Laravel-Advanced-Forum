@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Discussion</div>

                <div class="card-body">
                  <form action="{{route('discussions.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="channel">Pick a Channel</label>
                        <select name="channel_id" id="channel_id" class="form-control">
                            @foreach ($channels as $channel)
                                <option value="{{$channel->id}}">{{$channel->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Ask a Question</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit">Create discussions</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
