@extends('layouts.default')

@section('content')

    {{ Form::open(['route' => 'create']) }}
        {{ Form::label('name', 'Navn') }}
    {{ Form::close() }}

@endsectiond