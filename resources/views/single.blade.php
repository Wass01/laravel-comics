@extends('layouts.app')

@section('main')
  <!-- prima parte main -->
  <div class="bg-primary">
    <div class="container">
      <img class="single-img" src="{{$comic['thumb']}}" alt="cover">
    </div>
  </div>

  <!-- seconda parte main -->
  <div class="container second-main">
    <div class="info-comics">
      <h1>{{ $comic['title'] }}</h1>
      <div class="price-available">
        <p>U.S Price: <span>{{ $comic['price']}}</span></p>
        <div class="check-available">
          <p>available</p>
          <h4>Check Availability<i class="fas fa-sort-down"></i></h4>
        </div>
      </div>
      <p>{{ $comic['description']}}</p>
    </div>

    <div class="advertising">
      <div class="title-adv">
        <h3>advertisement</h3>
      </div>
      <img src="/img/adv.jpg" alt="adv">
    </div>
  </div>

  <!-- third main -->
  <div class="third-main pos-rel">
    <div class="container">
      <div class="talent info-third">
        <h2>Talent</h2>
        <div class="description-third">
          <h4>Art by:</h4>
          <p class="artist-writers">
          @foreach ($comic['artists'] as $artist)
          {{ $artist }},
          @endforeach
          </p>
        </div>
        <div class="description-third">
          <h4>Written by:</h4>
          <p class="artist-writers">
          @foreach ($comic['writers'] as $writer)
          {{ $writer }},
          @endforeach
          </p>
        </div>
      </div>
      <div class="specs info-third">
        <h2>Specs</h2>
        <div class="description-third">
          <h4>Series:</h4>
          <h3>{{ $comic['series']}}</h3>
        </div>
        <div class="description-third">
          <h4>U.S. Price:</h4>
          <p class="price-date">{{ $comic['price']}}</p>
        </div>
        <div class="description-third">
          <h4>On Sale Date:</h4>
          <p class="price-date">{{ $comic['sale_date']}}</p>
        </div>
      </div>
    </div>

@endsection
