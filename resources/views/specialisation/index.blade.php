@extends('welcome')

@section('content')
	<h1>Specialisations</h1>
	<a class="btn btn-success" href="{{ route('specialisation.create')}}">Add</a>
		<table class="table">
			<thead>
				<!-- <th>ID</th> -->
				<th>Titre</th>
				<!-- <th>Intitule</th> -->
				<th>Editer</th>
				<th>Supprimer</th>
			</thead>
			@foreach($specialisations as $specialisation)
			<tbody>
				<td>{{ $specialisation->titre}}</td>
				<td><a class="btn btn-sm btn-info" href="{{ route('specialisation.edit',$specialisation)}}">Edit</a></td>
				<td>
					{!! Form::open(['route'=>['specialisation.destroy',$specialisation->id],'method'=>'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Delet</button>

					{!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>
@stop