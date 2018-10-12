@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Channel : {{ $channel->title }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('channels.update',['channel' => $channel->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Chanels Name</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$channel->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
