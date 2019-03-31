@extends('welcome')

@section('content')
	<h1>Departements</h1>
	<a class="btn btn-success" href="{{ route('departement.create')}}">Add</a>
		<table class="table">
			<thead>
				<!-- <th>ID</th> -->
				<th>Code</th>
				<th>Intitule</th>
				<th>Editer</th>
				<th>Supprimer</th>
			</thead>
			@foreach($departements as $departement)
			<tbody>
				<td>{{ $departement->code}}</td>
				<td>{{ $departement->intitule}}</td>
				<td><a class="btn btn-sm btn-info" href="{{ route('departement.edit',$departement)}}">Edit</a></td>
				<td>
					{!! Form::open(['route'=>['departement.destroy',$departement->id],'method'=>'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Delet</button>

					{!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>
@stop