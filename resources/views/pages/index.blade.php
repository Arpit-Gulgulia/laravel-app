@extends('layouts.app')

@section('content')
    {{--<h3>{{$title}}</h3>--}}
    <div class="jumbotron text-center">
        <h1 class="display-4"><?php echo $title?></h1>
        <p class="lead">Jai Jinnedra,  Welcome to laravel</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button"> Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection
