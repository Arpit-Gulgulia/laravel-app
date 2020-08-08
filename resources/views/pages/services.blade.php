@extends('layouts.app')

@section('content')
<h3>{{$title}}</h3>
<p>Jai jinnedra! This is my services page</p>
    @if(count($services) > 0 )
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    @endif
@endsection
