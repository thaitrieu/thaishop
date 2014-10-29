@extends('layouts.default')

@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Alle produkter</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Produktnavn</th>
                  <th>Lagerstatus</th>
                  <th>Pris</th>
                </tr>
              </thead>

              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->name }}</td>
                  <td>{{ $d->quantity }}</td>
                  <td>{{ $d->price }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div align="center">{{ $data->links() }}</div>
          </div>

        </div>

      </div>
    </div>

@stop