<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-edit">
	<form method="POST" v-on:submit.prevent="updateBreed(fillbreed.id)">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Editar Raza</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
						<label for="name">Raza</label>
						
						<input type="text" name="name" class="form-control" v-model="fillbreed.name">
						<span v-for="error in errors" class="text-danger">@{{ error }}</span>

                    </div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</form>
</div>