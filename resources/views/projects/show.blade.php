@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h1>{{ $project->type->name }}</h1>
        <h4>{{ $project->client }}</h3>
        <a href="{{ $project->url }}">{{ $project->url }}</a>
        <p>{{ $project->description }}</p>

    </div>


@endsection