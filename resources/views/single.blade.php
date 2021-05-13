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
  <div class="third-main">

  </div>

@endsection
