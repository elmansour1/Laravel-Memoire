@extends('welcome')

@section('content')
	<h1>Create memoire</h1>
	<div class="container">
		<div class="col-sm-8">
			<div class="card">
				<div class="card-header">Ajouter un Memoire</div>
				<div class="card-body">
					{!! Form::open() !!}
						@csrf

						 <div class="form-group row">
							{!! Form::label('titre','Titre',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('nom',null,['class'=>'form-control col-sm-6']) !!}
						</div>
	                      <div class="form-group row">
							{!! Form::label('mots_cle','Mots_cle',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('mots_cle',null,['class'=>'form-control col-sm-6']) !!}
						</div>
						 <div class="form-group row">
							{!! Form::label('resume','Resume',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::textarea('resume',null,['class'=>'form-control col-sm-6']) !!}
						</div>
						<div class="form-group row">
							{!! Form::label('abstract','Abstract',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::textarea('abstract',null,['class'=>'form-control col-sm-6']) !!}
						</div>  
						<div class="form-group row">
							{!! Form::label('parcours','Memoire',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::select('parcours',App\Parcour::list('cycle','id'),null,['class'=>'form-control col-sm-6']) !!}
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