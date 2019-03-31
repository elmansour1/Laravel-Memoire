@extends('welcome')

@section('content')
	<h1>Diplomes</h1>
	<a class="btn btn-success" href="{{ route('diplome.create')}}">Add</a>
		<table class="table">
			<thead>
				<!-- <th>ID</th> -->
				<th>Titre</th>
				<!-- <th>Intitule</th> -->
				<th>Editer</th>
				<th>Supprimer</th>
			</thead>
			@foreach($diplomes as $diplome)
			<tbody>
				<td>{{ $diplome->titre}}</td>
				<td><a class="btn btn-sm btn-info" href="{{ route('diplome.edit',$diplome)}}">Edit</a></td>
				<td>
					{!! Form::open(['route'=>['diplome.destroy',$diplome->id],'method'=>'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Delet</button>

					{!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>
@stop