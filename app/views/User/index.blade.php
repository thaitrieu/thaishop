@extends('layouts.default')


@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Velkommen</h1>
    <p>Velkommen {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
</div>
@endsection