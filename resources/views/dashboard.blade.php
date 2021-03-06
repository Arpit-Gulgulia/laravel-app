@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="my-3">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    </div>
                    <h3>Your Blog Posts</h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td><a href="/posts/{{$post->id}}/edit" class="btn bg-white border border-dark">Edit</a></td>
                                            <td>
                                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>'float-right']) !!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                 @else
                                    <p>No Post Created!</p>
                            </table>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
