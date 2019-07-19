@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Gatos 
			<a href="" data-target="#modal-create" data-toggle="modal">
				<button class="btn btn-success">Nuevo</button>
		    </a>
		</h3>		
	</div>
</div>
@include('cats.search')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Nacimiento</th>
					<th>Genero</th>
					<th>Foto</th>
					<th>Imagen</th>
					<th>Raza</th>
					<th>Operaciones</th>					
				</thead>

                @foreach ($cats as $cat)
				<tr>
					<td>{{ $cat->id }}</td>
					<td>{{ $cat->name }}</td>
					<td>{{ $cat->date_of_birth }}</td>
					<td>{{ $cat->gender }}</td>
					<td>{{ $cat->photo }}</td>  
					<td><img src="{{ $cat->photo }}" class="img-responsive"></td> 
					<td>{{ $cat->breed->name }} - {{ $cat->breed->id }}</td>
					<td>
						<a href="#"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal">
							<button class="btn btn-danger">Eliminar</button>
						</a>
					</td>
				</tr>
				@include('cats.delete')
				@endforeach
			</table>
			@include('cats.create')
		</div>
		{{$cats->render()}}
	</div>
</div>

@endsection

