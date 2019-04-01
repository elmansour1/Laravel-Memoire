@extends('welcome')

@section('content')
	<h1>Editer</h1>
	<div class="container">
		<div class="col-md-8">
		<div class="card">
			<div class="card-header">Editer</div>
				<div class="card-body">
				{!! Form::open(['method'=>'put','url'=>route('author.update',$auteur)]) !!}
				<div class="form-group {!! $errors->has('nom') ? 'has-error': '' !!}">
					{!! Form::label('nom','Nom',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('nom',$auteur->nom,['class'=>'form-control ']) !!}
					{!! $errors->first('nom','<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group raw {!! $errors->has('matricule') ? 'has-error': '' !!}">
					{!! Form::label('matricule','Matricule',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('matricule',$auteur->matricule,['class'=>'form-control']) !!}
					{!! $errors->first('matricule','<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group raw {!! $errors->has('email') ? 'has-error': '' !!}">
					{!! Form::label('email','Email',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::email('email',$auteur->email,['class'=>'form-control']) !!}
					{!! $errors->first('enail','<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group raw {!! $errors->has('telephone') ? 'has-error': '' !!}">
					{!! Form::label('telephone','Telephone',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('telephone',$auteur->telephone,['class'=>'form-control ']) !!}
					{!! $errors->first('telephone','<small class="help-block">:message</small>') !!}
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