@extends('welcome')

@section('content')
	<h1>Creer un diplome</h1>
	<div class="container">
		<div class="col-sm-8">
			<div class="card">
				<div class="card-header">Ajouter un Diplome</div>
				<div class="card-body">
					{!! Form::open(['url'=>route('diplome.store')]) !!}
						@csrf

						 <div class="form-group row {!! $errors->has('titre') ? 'has-error':'' !!}">
							{!! Form::label('titre','Titre',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('titre',null,['class'=>'form-control col-sm-6']) !!}
							{!!  $errors->first('titre', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group row">
							{!! Form::label('parcours','Parcour',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('parcour_id',$parcours,null,['class'=>'form-control col-sm-6']) !!}
						</div>  
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            	<a class="btn btn-default col-form-label text-md-righ " href="{{route('diplome.index')}}">Cancel !</a>
                               <button class="btn btn-primary col-form-label text-md-righ ">Envoyer !</button>
                            </div>
                        </div> 
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>			
@stop