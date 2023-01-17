@extends('layouts.main');
@section('content')

<section class="cards">
  @foreach ($movies as $movie)
      <div class="card">
          <div class="card-body">
            <h3 class="card-title">{{$movie->title}}</h3>
            <span class="card-text">Original title: {{$movie->original_title}}</span>
            <p class="card-text">Nationality: {{$movie->nationality}}</p>
            <span class="card-text">Vote: {{$movie->vote}}⭐ / 10⭐</span>
          </div>
      </div>
   @endforeach
</section>

@endsection