@extends('welcome')

@section('content')
	<h1>Editer</h1>
	<div class="container">
		<div class="col-md-8">
		<div class="card">
			<div class="card-header">Editer</div>
				<div class="card-body">
				{!! Form::open(['method'=>'put','url'=>route('specialisation.update',$specialisation)]) !!}
				<div class="form-group {!! $errors->has('titre') ? 'has-error':'' !!}">
					{!! Form::label('code','Titre',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('code',$specialisation->titre,['class'=>'form-control ']) !!}
					{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
				</div>				
				<div class="form-group row ">
	                <div class="col-md-6 offset-md-4">
						<button class="btn btn-primary"> Envoyer</button>
					</div>
	            </div> 
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop