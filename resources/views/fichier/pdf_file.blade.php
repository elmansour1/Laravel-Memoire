<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Tous les Auteurs</h1>
			 </div>
			<div class="card-body">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Matricule</th>
							<th>Email</th>
							<th>Telephone</th>
						</tr>
					</thead>
					@foreach($datas as $data)
						<tr>
							<td>{{ $data->nom}}</td>
							<td>{{ $data->matricule}}</td>
							<td>{{ $data->email}}</td>
							<td>{{ $data->telephone}}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
	
	
</body>
</html>