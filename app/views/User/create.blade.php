@extends('layouts.default')


@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Opret Bruger</h1>
    {{ Form::open(['route' => 'users.store']) }}
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