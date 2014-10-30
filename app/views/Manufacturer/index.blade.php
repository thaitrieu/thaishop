@extends('layouts.default')

@section('content')
<?php

foreach($manufacturerProducts as $m){
    $array[] = $m;
}

?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Produkter tilhørende {{ $currentM->name }}</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Produktnavn</th>
                  <th>Beskrivelse</th>
                  <th>Pris</th>
                  <th>På lager</th>
                </tr>
              </thead>

              <tbody>
                @foreach($manufacturerProducts as $p)

                <tr>
                  <td id="{{ $p->id }}"><a href="../products/{{ $p->id }}">{{ ucfirst($p->name) }}</a></td>
                  <td id="{{ $p->id }}">{{ ucfirst($p->description) }}</td>
                  <td id="{{ $p->id }}">{{ number_format($p->price, 2, ',', '.') }} kr.</td>
                  <td id="{{ $p->id }}">{{ $p->quantity }}</td>
                </tr>

                @endforeach
              </tbody>
            </table>
            <div align="center">{{ $manufacturerProducts->links() }}</div>
            <div>Antal varer: {{ $manufacturerProducts->getTotal() }}</div>
          </div>
        </div>
      </div>

    <script>
        $(document).ready(function(){
            var opened = false;

            var jsvar = {{ json_encode($array) }};

            $('tr').click(function(event){
                var x = event.target.id;

                if(!opened){
                    $(this).after('<tr class="fooTemp"><td>' + 'Informationer' + '</td><td/><td/><td/></tr>');
                    opened = true;
                } else {
                    $('.fooTemp').remove();
                    opened = false;
                }
            });
        });
    </script>
    </div>
@stop