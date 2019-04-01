@extends('welcome')

@section('content')
	<h1>Contact me</h1>
		<div class="col-md-8">
			
			<div class="card">
				<div class="card-header">Contactez moi</div>
				<div class="card-body">
					{!! Form::open(['url'=>route('contact.store')]) !!}
                        @csrf
			             <div class="form-group row {!! $errors->has('nom') ? 'has-error': '' !!}">
							{!! Form::label('nom','Nom',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('nom',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('nom','<small class="help-block">:message</small>') !!}
						</div>
						 <div class="form-group row {!! $errors->has('email') ? 'has-error': '' !!}">
							{!! Form::label('email','Email',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::email('email',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('email','<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group row {!! $errors->has('texte') ? 'has-error': '' !!}">
							{!! Form::label('texte','Texte',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::textarea('texte',null,['class'=>'form-control col-sm-6']) !!}
							{!! $errors->first('texte','<small class="help-block">:message</small>') !!}
						</div>     
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <button class="btn btn-primary col-form-label text-md-righ ">Envoyer !</button>
                            </div>
                        </div> 
						               
					{!! Form::close() !!}
				</div>
		</div>
		</div>
	</div>
	
@stop