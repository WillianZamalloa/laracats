<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create">
	<form method="POST" @submit.prevent="createBreed">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar Raza</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
						<label for="name">Raza</label>
						
						<input type="text" name="name" class="form-control" 
						       placeholder="Digite la raza..." v-model="newName">
						<span v-for="error in errors" class="text-danger">@{{ error }}</span>

                    </div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</div>
	</form>
</div>