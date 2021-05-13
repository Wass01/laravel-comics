@extends('layouts.app')

@section('main')
  <div class="comics">
    <div class="container">
      <button class="btn-jumbo" type="button" name="button">
        current series
      </button>
    </div>
    <div class="comics-child container">
      @foreach($comics as $index => $comic)
        <div class="comics-card">
          <a href="{{route('detail', ['id' => $index])}}">
          <img src= "{{ $comic['thumb'] }}" alt="">
          <p>{{ $comic['series'] }}</p>
          </a>
        </div>
      @endforeach
    </div>
    <div class="load">
      <button type="button" name="button">load more</button>
    </div>
  </div>

  <div class="info">
    <div class="container info-child">
      <div class="info-card">
        <img src="./img/buy-comics-digital-comics.png" alt="">
        <p>digital comics</p>
      </div>
      <div class="info-card">
        <img src="./img/buy-comics-merchandise.png" alt="">
        <p>dc merchandise</p>
      </div>
      <div class="info-card">
        <img src="./img/buy-comics-subscriptions.png" alt="">
        <p>dc subscriptions</p>
      </div>
      <div class="info-card">
        <img src="./img/buy-comics-shop-locator.png" alt="">
        <p>comics shop locator</p>
      </div>
      <div class="info-card">
        <img src="./img/buy-dc-power-visa.svg" alt="">
        <p>dc power visa</p>
      </div>
    </div>
  </div>
@endsection
