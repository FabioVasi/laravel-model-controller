@extends('layouts.app')



@section('page-title', 'Home page')



@section('content')

    <section>

        <div class="container">
            <h1>Welcome</h1>
            <div class="row row-cols-5">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$movie->title}}</h3>
                            </div>
                        </div>
                    </div>
                @endforealse
            </div>
        </div>
        
    </section>
    

@endsection