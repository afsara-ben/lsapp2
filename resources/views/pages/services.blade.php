@extends('layouts.app')

@section('content')
    <h1>in pages.services page</h1>
    {{ $title }}
    @if (count($services) > 0)
        <ul>
            @foreach ($services as $service)
                <li>{{$service}}</li>    
            @endforeach
        </ul>
    @endif
@endsection
