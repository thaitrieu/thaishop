@extends('layouts.default')

@section('content')


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Produkter tilhørende {{ $currentM->name }}</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Produktnavn</th>
                  <th>Beskrivelse</th>
                  <th>Pris</th>
                  <th>På lager</th>
                  <th>Læg i kurv</th>
                </tr>
              </thead>

              <tbody>
                @foreach($manufacturerProducts as $p)

                <tr>
                  <td>{{ $p->id }}</td>
                  <td>{{ $p->name }}</td>
                  <td>{{ $p->description }}</td>
                  <td>{{ $p->price }} kr.</td>
                  <td>{{ $p->quantity }}</td>
                  <td>
                    {{ Form::open(['route' => 'carts.store']) }}
                        {{ Form::hidden($p) }}
                        {{ Form::image('img/basket.png', 'submit', ['style' => 'width: 25px; height: 25px']) }}
                    {{ Form::close() }}
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>

@stop