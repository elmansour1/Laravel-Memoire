@extends('welcome')

@section('content')
	<h1>Create a Departemnt</h1>
	<div class="container">
		<div class="col-sm-8">
			<div class="card">
				<div class="card-header">Ajouter un Departement</div>
				<div class="card-body">
					{!! Form::open(['url'=>route('departement.store')]) !!}
						@csrf

						 <div class="form-group row">
							{!! Form::label('code','Code',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('code',null,['class'=>'form-control col-sm-6']) !!}
						</div>
	                      <div class="form-group row">
							{!! Form::label('intitule','Intitule',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('intitule',null,['class'=>'form-control col-sm-6']) !!}
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