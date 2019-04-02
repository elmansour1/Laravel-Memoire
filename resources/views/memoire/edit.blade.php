@extends('welcome')

@section('content')
	<h1>Editer</h1>
	<div class="container">
		<div class="col-md-8">
		<div class="card">
			<div class="card-header">Editer</div>
				<div class="card-body">
				{!! Form::open(['method'=>'put','url'=>route('memoire.update',$memoire)]) !!}
				<div class="form-group {!! $errors->has('titre') ? 'has-error':'' !!}">
					{!! Form::label('titre','Titre',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('titre',$memoire->titre,['class'=>'form-control ']) !!}
					{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
				</div>
				<div class="form-group raw {!! $errors->has('mots_cle') ? 'has-error':'' !!}">
					{!! Form::label('mots_cle','Mots-cle',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('mots_cle',$memoire->mots_cle,['class'=>'form-control']) !!}
					{!! $errors->first('mots_cle','<small class="help-block">:message</small>') !!}
				</div>				
				<div class="form-group raw">
					{!! Form::label('resume','Resume',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::textarea('resume',$memoire->resume,['class'=>'form-control ']) !!}
				</div>
				<div class="form-group raw">
					{!! Form::label('abstract','Abstract',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::textarea('abstract',$memoire->abstract,['class'=>'form-control ']) !!}
				</div>
				<div class="form-group row">
							{!! Form::label('parcours','Parcour',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('parcours',$memoire->parcour(),null,['class'=>'form-control col-sm-6']) !!}
						</div>   
						<div class="form-group row">
							{!! Form::label('enseignants','Encadreur',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('enseignant_id',$memoire->enseignants(),null,['class'=>'form-control col-sm-6']) !!}
						</div> 
				<div class="form-group row ">
	                <div class="col-md-6 offset-md-4">
	                	<a class="btn btn-default col-form-label text-md-righ " href="{{route('memoire.index')}}">Cancel !</a>
						<button class="btn btn-primary"> Envoyer</button>
					</div>
	            </div> 
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop