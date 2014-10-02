@extends('layouts.default')


@section('content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Indkøbskurv</h1>
    <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Produktnavn</th>
                      <th>Pris/stk</th>
                      <th>Antal</th>
                      <th>Sum</th>
                    </tr>
                  </thead>
                    @if(isset($productList))
                      <tbody>
                        @foreach($productList as $p)

                        <tr>
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->name }}</td>
                          <td>{{ $p->price }} kr.</td>
                          <td>{{ Form::open(['route' => 'carts.update', 'method' => 'put']) }}
                              {{ Form::text('newQty['.$p->id.']', $p->qtySelected, ['size' => 1]) }}
                              </td>
                          <td>{{ $p->productSum }}</td>
                        </tr>

                        @endforeach
                        <tr>
                          <td></td><td></td><td></td>
                          <td>I alt</td>
                          <td>{{ $sum }}</td>
                        </tr>

                        <tr>
                          <td></td><td></td><td></td>
                          <td>
                            {{ Form::submit('Opdater') }}
                            {{ Form::close() }}</td>
                          <td>
                            {{ Form::open(['route' => 'carts.update', 'method' => 'put']) }}
                            {{ Form::submit('Til betaling') }}
                            {{ Form::close() }}</td>
                        </tr>

                        <tr>
                          <td></td><td></td> <td></td> <td></td>
                          <td>
                            {{ Form::open(['action' => 'CartsController@destroy', 'method' => 'delete']) }}
                            {{ Form::submit('Tøm kurven') }}
                            {{ Form::close() }}
                          </td>
                        </tr>
                      </tbody>
                    @endif
                    @if(!isset($productList))
                      <tbody>
                        <tr>
                            <td>Indkøbskurven er tom</td>
                            <td></td><td></td><td></td><td></td>
                        </tr>
                      </tbody>
                    @endif
                </table>
              </div>
</div>
@endsection