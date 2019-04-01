@extends('welcome')

@section('content')
	<div class="container">
		<div class="col-md-8">
		<div class="panel panel-success">
			<div class="panel-heading">Confirmation</div>
			<div class="panel-body">
				Votre requete a ete bien envoyer <b>{{$contact->nom}}</b>!!
			</div>
		</div>
		</div>
	</div>
@stop