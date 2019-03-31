@extends('welcome')

@section('content')
	<h1>Parcours</h1>
	<a class="btn btn-success" href="{{ route('parcour.create')}}">Add</a>
		<table class="table">
			<thead>
				<!-- <th>ID</th> -->
				<th>Cycle</th>
				<!-- <th>Intitule</th> -->
				<th>Editer</th>
				<th>Supprimer</th>
			</thead>
			@foreach($parcours as $parcour)
			<tbody>
				<td>{{ $parcour->cycle}}</td>
				<td><a class="btn btn-sm btn-info" href="{{ route('parcour.edit',$parcour)}}">Edit</a></td>
				<td>
					{!! Form::open(['route'=>['parcour.destroy',$parcour->id],'method'=>'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Delet</button>

					{!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>
@stop