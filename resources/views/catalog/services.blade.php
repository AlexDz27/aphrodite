@extends('layouts.main')

@section('title')
    @parent Catalog > Services
@endsection

@section('content')
    <h1>Services</h1>

    @foreach ($services as $service)
        <h2><a href="{{ url("/catalog/services/{$service->id}") }}">{{ $service->name }}</a></h2>
        <p>{{ $service->description }}</p>
        @if ($service->photos)
            <img src="{{ $service->photos[0]['file_path'] }}" alt="{{ $service->name }}" width="150">
        @endif
    @endforeach
@endsection