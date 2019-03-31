@extends('welcome')

@section('content')
	<h1>Create teacher</h1>
	<div class="container">
		<div class="col-sm-8">
			<div class="card">
				<div class="card-header">Ajouter un Eneignant</div>
				<div class="card-body">
					{!! Form::open(['url'=>route('enseignant.store')]) !!}
						@csrf

						 <div class="form-group row">
							{!! Form::label('nom','Nom',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('nom',null,['class'=>'form-control col-sm-6']) !!}
						</div>
	                      <div class="form-group row">
							{!! Form::label('grade','Grade',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
							{!! Form::text('grade',null,['class'=>'form-control col-sm-6']) !!}
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