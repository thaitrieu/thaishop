@extends('layouts.default')


@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Login</h1>
    {{ Form::open(['route' => 'sessions.store']) }}
        {{ Form::label('email', 'Email') }}<br/>
        {{ Form::text('email') }}<br/><br/>
        {{ Form::label('password', 'Kode') }}<br/>
        {{ Form::password('password') }}<br/><br/>
        {{ Form::submit('Log ind') }}
    {{ Form::close() }}
</div>
@endsection