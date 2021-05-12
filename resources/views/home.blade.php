@extends('layouts.app')

@section('main')
  <div class="comics">
    <div class="container">
      <button class="btn-jumbo" type="button" name="button">
        current series
      </button>
    </div>
    <div class="comics-child container">
      @foreach($comics as $key)
        <div class="comics-card">
          <img src= {{ $key['thumb'] }} alt="">
          <p>{{ $key['series'] }}</p>
        </div>
      @endforeach
    </div>
    <div class="load">
      <button type="button" name="button">load more</button>
    </div>
  </div>
@endsection
