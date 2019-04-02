@extends('welcome')

@section('content')
	<h1>Contactez moi</h1>
	<div class="container">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Cliquer sur le bouton pour avoir le formulaire</div>
				<div class="panel-body">
					<a href="{{ route('contact.create')}}" class="btn btn-md btn-primary">Formulaire</a>
				</div>
			</div>
		</div>
	</div>
@stop