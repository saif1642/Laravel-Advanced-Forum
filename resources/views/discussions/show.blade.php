@extends('layouts.app')

@section('content')
   <div class="card card-default">
        <div class="card-header">
            <img src="{{$d->user->avatar}}" alt="" width="70px" height="70px">&nbsp;&nbsp;&nbsp;
            <span>{{$d->user->name}}</span>, <b>{{$d->created_at->diffForHumans()}}</b>
            <a href="{{route('discussion',['slug'=>$d->slug])}}" class="btn btn-success float-right">View More</a>
        </div>
        <div class="card-body">
            <h4>{{$d->title}}</h4>
            <hr>
            {{$d->content}}
        </div>
        <div class="card-footer">
            {{$d->replies->count()}} Reply
        </div>
    </div>
    <br><br><br>
    <h2>Replies:</h2>
    @foreach ($d->replies as $r)
    <div class="card card-default">
            <div class="card-header">
                <img src="{{$r->user->avatar}}" alt="" width="70px" height="70px">&nbsp;&nbsp;&nbsp;
                <span>{{$r->user->name}}</span>, <b>{{$r->created_at->diffForHumans()}}</b>
            </div>
            <div class="card-body">
               <p class="text-center">
                    {{$r->content}}
               </p>
            </div>
            <div class="card-footer">
                LIKE
            </div>
        </div>
        <br>
    @endforeach
@endsection
