@extends('welcome')

@section('content')
	
	<div class="container">
		<div class="card card-info">
			<div class="card-header"><h1>All Authors</h1> <a class="btn btn-md btn-success" href="{{ route('author.create')}}">add</a></div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Matricule</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>Editer</th>
							<th>Delete</th>
						</tr>
					</thead>
					@if($auteurs->isEmpty())
						<p>There is no Author</p>
					@else
					@foreach($auteurs as $auteur)
					<tbody>
						<tr>
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
						</tr>
					</tbody>
					@endforeach
				</table>
				@endif
			</div>
		</div>
	</div>
@stop