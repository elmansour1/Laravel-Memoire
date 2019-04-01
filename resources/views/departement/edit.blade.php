@extends('welcome')

@section('content')
	<h1>Editer</h1>
	<div class="container">
		<div class="col-md-8">
		<div class="card">
			<div class="card-header">Editer</div>
				<div class="card-body">
				{!! Form::open(['method'=>'put','url'=>route('departement.update',$departement)]) !!}
				<div class="form-group {!! $errors->has('code') ? 'has-error':'' !!}">
					{!! Form::label('code','Code',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('code',$departement->code,['class'=>'form-control ']) !!}
					{!! $errors->first('code', '<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group raw {!! $errors->has('intitule') ? 'has-error':'' !!}">
					{!! Form::label('intitule','Intitule',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('intitule',$departement->intitule,['class'=>'form-control']) !!}
					{!! $errors->first('intittule','<small class="help-block">:message</small>') !!}
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