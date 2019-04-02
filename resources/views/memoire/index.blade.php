@extends('welcome')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header"><h1>Tous les memoires</h1><a class="btn btn-success" href="{{ route('memoire.create')}}">Add</a> </div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Titre</th>
							<th>Mots-cle</th>
							<th>Resume</th>
							<th>Abstract</th>
							<th>Parcour</th>
							<th>Editer</th>
							<th>Supprimer</th>
						</tr>
					</thead>
					@foreach($memoires as $memoire)
					<tbody>
						<tr>
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
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
		</div>
	</div>
	
		
@stop