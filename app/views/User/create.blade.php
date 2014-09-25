@extends('layouts.default')

@section('content')
      <div class="jumbotron">
        <h1>Opret Bruger</h1>
            {{ Form::open(['route' => 'user.create']) }}
                {{ Form::label('first_name', 'Fornavn:') }}<br>
                {{ Form::text('first_name') }}<br><br>
                {{ Form::label('last_name', 'Efternavn:') }}<br>
                {{ Form::text('last_name') }}<br><br>
                {{ Form::label('email', 'Email:') }}<br>
                {{ Form::text('email') }}<br><br>
                {{ Form::label('password', 'Kode:') }}<br>
                {{ Form::password('password') }}<br><br>
                {{ Form::submit('Opret mig') }}<br>
            {{ Form::close() }}
      </div>
@endsection