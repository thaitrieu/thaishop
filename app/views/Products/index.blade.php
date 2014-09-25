@extends('layouts.default')

@section('content')
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Produkter</h1>
        <p>Viser alle produkter.</p>
        <p>Scroll</p>
        <p>
          <a class="btn btn-lg btn-primary" href="create" role="button">Hit it &raquo;</a>
        </p>
      </div>

        @foreach ($data as $d)
            <p style="font-size: small">{{ $d }}<br></p>
        @endforeach


@stop