@extends('layouts.default')

@section('content')
      {{--<!-- Main component for a primary marketing message or call to action -->--}}
      {{--<div class="jumbotron">--}}
        {{--<h1>Produkter</h1>--}}
        {{--<p>Viser alle produkter.</p>--}}
        {{--<p>Scroll</p>--}}
        {{--<p>--}}
          {{--<a class="btn btn-lg btn-primary" href="products/create" role="button">Hit it &raquo;</a>--}}
        {{--</p>--}}
      {{--</div>--}}

        {{--@foreach ($data as $d)--}}
            {{--<p style="font-size: small">{{ $d }}<br></p>--}}
        {{--@endforeach--}}


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Alle produkter</h1>

          {{--<div class="row placeholders">--}}
            {{--<div class="col-xs-6 col-sm-3 placeholder">--}}
              {{--<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">--}}
              {{--<h4>Label</h4>--}}
              {{--<span class="text-muted">Something else</span>--}}
            {{--</div>--}}
            {{--<div class="col-xs-6 col-sm-3 placeholder">--}}
              {{--<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">--}}
              {{--<h4>Label</h4>--}}
              {{--<span class="text-muted">Something else</span>--}}
            {{--</div>--}}
            {{--<div class="col-xs-6 col-sm-3 placeholder">--}}
              {{--<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">--}}
              {{--<h4>Label</h4>--}}
              {{--<span class="text-muted">Something else</span>--}}
            {{--</div>--}}
            {{--<div class="col-xs-6 col-sm-3 placeholder">--}}
              {{--<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">--}}
              {{--<h4>Label</h4>--}}
              {{--<span class="text-muted">Something else</span>--}}
            {{--</div>--}}
          {{--</div>--}}

          {{--<h2 class="sub-header">Section title</h2>--}}
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Produktnavn</th>
                </tr>
              </thead>

              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->name }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>

@stop