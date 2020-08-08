@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn border border-dark bg-white">Go Back</a>
    <div class="card my-3">
        <div class="card-header">
            {{$post->title}}
        </div>
        <div class="card-body">
            <div>
                <img class="img-fluid" src="/storage/cover_image/{{$post->cover_image}}">
            </div>
            {!! $post->body !!}
            <hr>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                    <hr>
                    <a href="/posts/{{$post->id}}/edit" class="btn border border-dark bg-white">Edit</a>
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>'float-right']) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                @endif
             @endif
        </div>
    </div>
@endsection
