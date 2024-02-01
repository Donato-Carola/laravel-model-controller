@extends('layouts.app')



@section('main-content')

<h1>

    Movies
</h1>

<ul>

    @forelse ($movies as $movie)
    <li>
        {{ $movie->title }}
    </li>

    @empty

    <li>
        non ci sono film nella lista
    </li>


    @endforelse
</ul>


@endsection

