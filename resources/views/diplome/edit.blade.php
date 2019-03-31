@extends('welcome')

@section('content')
	<h1>Editer</h1>
	<div class="container">
		<div class="col-sm-8">
			<div class="card">
				<div class="card-header">Editer un Diplome</div>
				<div class="card-body">
					{!! Form::open(['method'=>'put','url'=>route('diplome.update',$diplome)]) !!}
						@csrf

						 <div class="form-group row">
							{!! Form::label('titre','Titre',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('titre',$diplome->titre,['class'=>'form-control col-sm-6']) !!}
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