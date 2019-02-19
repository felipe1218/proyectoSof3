<!DOCTYPE html>
<html>
	<head>
		<title>Editar producto</title>
		<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ secure_asset('js/app.js') }}"></script>
	</head>
	<body>
		<center>
			<div  style="background: #F3F2F2; margin: 10px; padding: 10px; border-radius: 10px; width: 600px;">				
				<h2>Gestión de productos</h2>					
				</br>
				<div class="container">
		    		@include('flash::message')
				</div>
				<form class="form-group" method="PUT" action="/productos/actualizar/{{$producto->id}}">
					<table>
						<tr>
							<td><label>Producto:</label></td>
							<td><label>{{$producto->nombre}}</label></td>
						</tr>
						<tr>
							<td><label>Precio:</label></td>
							<td><input type="number" min="0" name="precio" class="form-group"></td>
						</tr>
						<tr>
							<td><label>Cantidad:</label></td>
							<td><input type="number" min="0" name="cantidad" class="form-group"></td>
						</tr>
						<tr>
							<div class="text-center">
								<td>{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}</td>
							</div>
						</tr>						
					</table>
				</form>
			</div>		
		</center>
	</body>
</html>