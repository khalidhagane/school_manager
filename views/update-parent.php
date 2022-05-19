<?php
    require_once './controllers/ParentsController.php';
   if (isset($_POST['id'])) {
        $Parent = new ParentsController();
        $data = $Parent -> getOneParent();
   }
   else{
       Redirect::to('parent');
   }

   if (isset($_POST['submit'])) { 
        $Parent = new ParentsController();
        $Parent -> updateParent();  
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
							<input type="text" name="matr" class="form-control" placeholder="Matricule" value="<?= $data -> matr ?>">
						</div>
						<div class="form-group">
                            <label for="name">Nom complet*</label>
							<input type="text" name="name" class="form-control" placeholder="Nom complet" value="<?= $data -> name ?>">
						</div>
						<div class="form-group">
                            <label for="genre">Genre*</label>
                            <select class="form-control" name="genre" >
                                <option value="<?= $data -> genre ?>"><?= $data -> genre ?></option>
								<option value="Male" >Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group">
                            <label for="job">Job*</label>
							<input type="text" name="job" class="form-control" placeholder="Job" value="<?= $data -> job ?>">
                            <input type="hidden" name="id" value="<?= $data -> id; ?>">
                            
						</div>
						<div class="form-group">
                            <label for="adress">Adresse*</label>
							<input type="text" name="address" class="form-control" placeholder="Adresse" value="<?= $data -> address ?>">
						</div>
						<div class="form-group">
                            <label for="phone">Phone*</label>
							<input type="text" name="phone" class="form-control" placeholder="Phone" value="<?= $data -> phone ?>">
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