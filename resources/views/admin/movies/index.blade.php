@extends('layouts.app')



@section('main-content')

        <h1>

            Movies
        </h1>

        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($movies as $movie)

                <div class="col">
                  <div class="card h-100">

                    <div class="card-body">
                        <h1>{{ $movie->title }}</h1>
                        <h3>{{ $movie->original_title }}</h3>
                        <h3>{{ $movie->nationality }}</h3>
                        <h3>{{ $movie->date }}</h3>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>

        </div>




            <!--<div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($movies as $movie)
                        <div class="col">
                        <div class="card">

                            <div class="card-body">
                                <h1>{{ $movie->title }}</h1>
                                <h3>{{ $movie->original_title }}</h3>
                                <h3>{{ $movie->nationality }}</h3>
                                <h3>{{ $movie->date }}</h3>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>



        </div>

        </div>-->

@endsection
