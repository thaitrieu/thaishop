@extends('layouts.default')

@section('content')
<!--         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Produktnavn {{ $id }}</h1>
        </div> -->
        <div class="container">
            <?php $pic = rand(1,8) ?>
        	<img src="{{ asset("img/$pic.jpg") }}"/>
        	<table class="productInformation">
        		<tr>
        			<th width="50px">Navn: </th>
        			<td>{{ $product->name }}</td>
        		</tr>
        		<tr>
        			<th>Lager: </th>
        			<td>{{ $product->quantity }}</td>
        		</tr>
        		<tr>
        			<th>Pris: </th>
        			<td>{{ number_format($product->price, 2, ',', '.') }}</td>
	        		</tr>
        		<tr>
        			<td>
        			{{ Form::open(['route' => 'carts.store']) }}
        				{{ Form:: hidden('id', $product->id)}}
        				{{ Form::text('qty', 1, ['style' => 'width:25px']) }}
        			</td>
        			<td>{{ Form::submit('Læg i kurv') }}</td>
        			{{ Form::close() }}
        		</tr>
        	</table>
        </div>


      </div>
    </div>
@stop