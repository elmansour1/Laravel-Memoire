@extends('welcome')

@section('content')
	<h1>Editer</h1>
	<div class="container">
		<div class="col-md-8">
		<div class="card">
			<div class="card-header">Editer</div>
				<div class="card-body">
				{!! Form::open(['method'=>'put','url'=>route('enseignant.update',$enseignant)]) !!}
				<div class="form-group">
					{!! Form::label('nom','Nom',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('nom',$enseignant->nom,['class'=>'form-control ']) !!}
				</div>
				<div class="form-group raw">
					{!! Form::label('grade','Grade',['class'=>'col-md-4 col-form-label text-md-righ']) !!}
					{!! Form::text('grade',$enseignant->grade,['class'=>'form-control']) !!}
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