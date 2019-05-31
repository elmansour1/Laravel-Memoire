@extends('welcome')

@section('content')
<div class="container">
		<div class="card card-info">
			<div class="card-header">
				<h1>Enseignants</h1>
				<a class="btn btn-success" href="{{ route('enseignant.create')}}">Add</a>
				<a href="" class="btn btn-info pull-right">Imprimer en PDF</a>
			</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<!-- <th>ID</th> -->
					<th>Nom</th>
					<th>Grade</th>
					<!-- <th>Resume</th>
					<th>Abstract</th>
					<th>Parcour</th> -->
					<th>Editer</th>
					<th>Supprimer</th>
				</thead>
				@foreach($enseignants as $enseignant)
				<tbody>
					<td>{{ $enseignant->nom}}</td>
					<td>{{ $enseignant->grade}}</td>
					<td><a class="btn btn-sm btn-info" href="{{ route('enseignant.edit',$enseignant)}}">Edit</a></td>
					<td>
						{!! Form::open(['route'=>['enseignant.destroy',$enseignant->id],'method'=>'DELETE']) !!}
						<button class="btn btn-sm btn-danger">Delet</button>

						{!! Form::close() !!}
					</td>
				</tbody>
				@endforeach
			</table>
			</div>
		</div>
	</div>
@stop