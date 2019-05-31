@extends('welcome')

@section('content')
	<h1>Create memoire</h1>
	<div class="container">
			<div class="card">
				<div class="card-header">Ajouter un Memoire</div>
				<div class="card-body">
					{!! Form::open(['url'=>route('memoire.store'),'files'=>true]) !!}
						@csrf
						<div class="col-md-6">
						 <div class="form-group row {!! $errors->has('titre') ? 'has-error':'' !!}">
							{!! Form::label('titre','Titre',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('titre',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
						</div>
	                      <div class="form-group row {!! $errors->has('mots_cle') ? 'has-error' :'' !!}">
							{!! Form::label('mots_cle','Mots_cle',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('mots_cle',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('mots_cle','<small class="help-block">:message</small>') !!}
						</div>
						 <div class="form-group row">
							{!! Form::label('resume','Resume',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::textarea('resume',null,['class'=>'form-control col-sm-6']) !!}
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group row">
							{!! Form::label('abstract','Abstract',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::textarea('abstract',null,['class'=>'form-control col-sm-6']) !!}
						</div>  
						
						<div class="form-group row">
							{!! Form::label('auteurs','Auteur',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('author_id',$auteurs,null,['class'=>'form-control col-sm-6']) !!}
							<a class="btn btn-md btn-success" href="{{ route('author.create')}}">add</a>
						</div>
						<div class="form-group row">
							{!! Form::label('parcours','Parcour',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('parcour_id',$parcours,null,['class'=>'form-control col-sm-6']) !!}
						</div>   
						<div class="form-group row">
							{!! Form::label('enseignants','Encadreur',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('enseignant_id',$enseignants,null,['class'=>'form-control col-sm-6']) !!}
						</div> 
						<div class="form-group row">
							{!! Form::label('document','Document',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::file('document',null,['class'=>'form-control col-sm-6']) !!}
						</div> 
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            	<a class="btn btn-default col-form-label text-md-righ " href="{{route('memoire.index')}}">Cancel !</a>
                               <button class="btn btn-primary col-form-label text-md-righ ">Envoyer !</button>
                            </div>
                        </div> 
                        </div>
					{!! Form::close() !!}
				</div>
			</div>
	</div>			
@stop