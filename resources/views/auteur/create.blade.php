@extends('welcome')

@section('content')
	<h1>Create author</h1>
	<div class="container">
		<div class="col-md-8">
			
			<div class="card">
				<div class="card-header">Create</div>
				<div class="card-body">
					{!! Form::open(['url'=>route('author.store')]) !!}
                        @csrf
			             <div class="form-group row {!! $errors->has('nom') ? 'has-error': '' !!}">
							{!! Form::label('nom','Nom',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('nom',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('nom','<small class="help-block">:message</small>') !!}
						</div>
	                      <div class="form-group row {!! $errors->has('matricule') ? 'has-error': '' !!}">
							{!! Form::label('matricule','Matricule',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('matricule',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('matricule','<small class="help-block">:message</small>') !!}
						</div>
						 <div class="form-group row {!! $errors->has('email') ? 'has-error': '' !!}">
							{!! Form::label('email','Email',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::email('email',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('enail','<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group row {!! $errors->has('telephone') ? 'has-error': '' !!}">
							{!! Form::label('telephone','telephone',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('telephone',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('telephone','<small class="help-block">:message</small>') !!}
						</div>     
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <a class="btn btn-default col-form-label text-md-righ " href="{{route('author.index')}}">Cancel !</a>
                               <button class="btn btn-primary col-form-label text-md-righ ">Envoyer !</button>
                            </div>
                        </div> 
						               
					{!! Form::close() !!}
				</div>
		</div>
		</div>
	</div>
	
	
@stop