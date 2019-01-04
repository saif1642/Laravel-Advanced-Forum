@extends('layouts.app')

@section('content')
    <br><br><br>
    @foreach ($discussions as $d)
        <div class="card card-default">
            <div class="card-header">
                <img src="{{$d->user->avatar}}" alt="" width="70px" height="70px">&nbsp;&nbsp;&nbsp;
                <span>{{$d->user->name}}</span>, <b>{{$d->created_at->diffForHumans()}}</b>
                <a href="{{route('discussion',['slug'=>$d->slug])}}" class="btn btn-success float-right">View More</a>
            </div>
            <div class="card-body">
                <h4>{{$d->title}}</h4>
                {{str_limit($d->content,50)}}
            </div>
            <div class="card-footer">
                {{$d->replies->count()}} Reply
            </div>
        </div>
        <br><br>
    @endforeach
    <div class="text-center">
        {{$discussions->links()}}
    </div>
@endsection
