@extends('welcome')

@section('content')
		<div class="container">
			<div class="card">
				<div class="card-header"> <h1>All Departemnt </h1><a class="btn btn-success" href="{{ route('departement.create')}}">Add</a></div>
				<div class="card-body">
					<table class="table">
			<thead>
				<tr>
				<th>Code</th>
				<th>Intitule</th>
				<th>Editer</th>
				<th>Supprimer</th>
				</tr>
			</thead>
			@foreach($departements as $departement)
			<tbody>
				<tr>
					<td>{{ $departement->code}}</td>
					<td>{{ $departement->intitule}}</td>
					<td><a class="btn btn-sm btn-info" href="{{ route('departement.edit',$departement)}}">Edit</a></td>
					<td>
						{!! Form::open(['route'=>['departement.destroy',$departement->id],'method'=>'DELETE']) !!}
						<button class="btn btn-sm btn-danger">Delet</button>

						{!! Form::close() !!}
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>
				</div>
			</div>
		</div>
@stop