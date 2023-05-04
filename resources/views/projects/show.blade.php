@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h1>{{ $project->type ? $project->type->name : '-' }}</h1>
        <ul class="ps-0 d-flex gap-1">
            @forelse($project->technologies as $technology )
                <span class="badge rounded-pill text-bg-primary">{{ $technology->name }}</span>
            @empty
                -
            @endforelse
        </ul>
        <h4>{{ $project->client }}</h3>
        <a href="{{ $project->url }}">{{ $project->url }}</a>
        <p>{{ $project->description }}</p>

    </div>


@endsection