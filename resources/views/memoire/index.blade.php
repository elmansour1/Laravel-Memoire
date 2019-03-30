@extends('welcome')

@section('content')
	<h1>Memoires</h1>
	<a class="btn btn-success" href="{{ route('memoire.create')}}">Add</a>
		<table class="table">
			<thead>
				<!-- <th>ID</th> -->
				<th>Titre</th>
				<th>Mots-cle</th>
				<th>Resume</th>
				<th>Abstract</th>
				<th>Parcour</th>
				<th>Editer</th>
				<th>Supprimer</th>
			</thead>
			@foreach($memoires as $memoire)
			<tbody>
				<!-- <td>{{$memoire->id}}</td> -->
				<td>{{ $memoire->titre}}</td>
				<td>{{ $memoire->mots_cle}}</td>
				<td>{{ $memoire->resume}}</td>
				<td>{{ $memoire->abstract}}</td>
				<td>{{ $memoire->parcour->cycle}}</td>
				<td><a class="btn btn-sm btn-info" href="{{ route('memoire.edit',$memoire)}}">Edit</a></td>
				<td>
					{!! Form::open(['route'=>['memoire.destroy',$memoire->id],'method'=>'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Delet</button>

					{!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>
@stop