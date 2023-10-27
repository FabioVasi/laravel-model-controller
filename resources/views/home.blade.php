@extends('layouts.app')



@section('page-title', 'Home page')



@section('content')

    <section class="">

        <div class="container text-center">
            <h1>Welcome</h1>
            <div class="row row-cols-5 g-4">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3>{{$movie->title}}</h3>
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