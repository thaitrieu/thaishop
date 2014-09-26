@extends('layouts.default')



@section('content')

      <div class="jumbotron">
        <h1>Opret Produkt</h1>
        <div class="alert alert-danger">
            @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </div>
            {{ Form::open(['route' => 'products.store']) }}
                {{ Form::label('name', 'Navn:') }}<br>
                {{ Form::text('name') }}<br><br>
                {{ Form::label('description', 'Beskrivelse:') }}<br>
                {{ Form::textarea('description') }}<br><br>
                {{ Form::label('price', 'Pris:') }}<br>
                {{ Form::text('price') }}<br><br>
                {{ Form::label('quantity', 'Antal:') }}<br>
                {{ Form::text('quantity') }}<br><br>
                {{ Form::label('manufacturer_id', 'Leverandør:') }}<br>
                {{ Form::select('manufacturer_id', [
                '3' => 'foo',
                '5' => 'bar',
                '7' => 'baz', ], '3') }}<br><br>
                {{ Form::submit('Tilføj') }}<br>
            {{ Form::close() }}
      </div>



@endsection