@extends('welcome')

@section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">About me</div>
		<div class="panel-body">
			{!! Form::open(['url'=>route('about.index'),'files'=> true]) !!}
			{!! Form::label('Nom') !!}
			{!! Form::text('nom', null, ['class'=>'form-control']) !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>

	
@stop