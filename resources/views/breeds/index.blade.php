@extends('layouts.admin')
@section('contenido')
<div class="row" >
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Razas 
			<a href="" data-target="#modal-create" data-toggle="modal">
				<button class="btn btn-success">Nuevo</button>
		    </a>
		</h3>		
	</div>
</div>

<div class="row" id="app">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Raza</th>
					<th>Operaciones</th>					
				</thead>

                <tr v-for="breed in breeds">
					<td>@{{ breed.id }}</td>
					<td>@{{ breed.name }}</td>
					<td>
						<a href="#" class="btn btn-info">Editar</a>

                        <button class="btn btn-danger" @click.prevent="deleteBreed(breed)">
							Eliminar
						</button>
						
					</td>
				</tr>
			</table>			
		</div>		
	</div>	
</div>
@endsection
