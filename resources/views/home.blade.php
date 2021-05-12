@extends('layouts.app')

@section('main')
  <div class="comics">
    <div class="comics-child container">
      <button class="btn-jumbo" type="button" name="button">
        current series
      </button>
      <!-- @foreach($comics as $key)
        <p>{{ $key['title'] }}</p>
      @endforeach -->

    </div>
  </div>
@endsection
