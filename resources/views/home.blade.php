@extends('layouts.app')



@section('page-title', 'Home page')



@section('content')

    <section class="bg-dark py-5">

        <div class="container text-center">
            <h1 class="text-white pb-5">Welcome To Our Movie Selection</h1>
            <div class="row row-cols-5 g-4">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card h-100 bg-warning border-0 rounded-1">
                            <div class="card-body text-start">
                                <h2>{{$movie->title}}</h2>
                                <h3>{{$movie->original_title}}</h3>
                                <h5>{{$movie->nationality}}</h5>
                                <h4>{{$movie->date}}</h4>
                                <h4 class="d-flex justify-content-start align-items-center">
                                    {{$movie->vote}}
                                    <svg class="ps-3" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                </h4>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No movies to show</p>    
                @endforelse
            </div>
        </div>

    </section>
    
@endsection