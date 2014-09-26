@extends('layouts.default')


@section('content')
      <div class="jumbotron">
        <h1>Log ind her</h1>
        {{ Form::open(['route' => 'sessions.store']) }}
            {{ Form::label('email', 'Email') }}<br/>
            {{ Form::text('email') }}<br/><br/>
            {{ Form::label('password', 'Kode') }}<br/>
            {{ Form::password('password') }}<br/><br/>
            {{ Form::submit('Log ind') }}
        {{ Form::close() }}
      </div>
@endsection