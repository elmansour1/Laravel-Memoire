@extends('welcome')

@section('content')
	<h1>Author</h1>
	<a class="btn btn-sm btn-success" href="{{ route('author.create')}}">add</a>
	
		<table class="table">
			<thead>
				<!-- <th>ID</th> -->
				<th>Nom</th>
				<th>Matricule</th>
				<th>Email</th>
				<th>Telephone</th>
				<th>Editer</th>
				<th>Delete</th>
			</thead>
			@foreach($auteurs as $auteur)
			<tbody>
				<!-- <td>{{$auteur->id}}</td> -->
				<td>{{ $auteur->nom}}</td>
				<td>{{ $auteur->matricule}}</td>
				<td>{{ $auteur->email}}</td>
				<td>{{ $auteur->telephone}}</td>
				<td><a class="btn btn-sm btn-info" href="{{route('author.edit',$auteur)}}">Edit</a></td>
				<td>
					{!! Form::open(['route' =>['author.destroy',$auteur->id],'method'=>'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Delet</button>
					{!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>
	
@stop