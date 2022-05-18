<?php
include_once './controllers/ParentsController.php';

if (isset($_POST['submit'])) { 
	$newParent = new ParentsController();
	$newParent -> addNewParent();
}
?>


<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajouter un Parent</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="matr">Matricule*</label>
							<input type="text" name="matr" class="form-control" placeholder="Matricule">
						</div>
						<div class="form-group">
							<label for="name">Nom complet*</label>
							<input type="text" name="name" class="form-control" placeholder="Nom complet">
						</div>
						<div class="form-group">
							<label for="genre">Genre*</label>
                            <select class="form-control" name="genre">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group">
							<label for="job">Job*</label>
							<input type="text" name="job" class="form-control" placeholder="Job">
						</div>
						<div class="form-group">
							<label for="adress">Adresse*</label>
							<input type="text" name="address" class="form-control" placeholder="Adresse">
						</div>
						<div class="form-group">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" class="form-control" placeholder="Phone">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>