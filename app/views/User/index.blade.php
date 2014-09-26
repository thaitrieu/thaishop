@extends('layouts.default')


@section('content')
      <div class="jumbotron">
        <h1>Du er nu logget ind</h1>
        <p>Velkommen {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>

      </div>
@endsection