<?php

include_once './controllers/profsController.php';

if (isset($_POST['id'])) { 
	$Teacher = new profsController();
	$data = $Teacher->getOneTeacher();
}
else{
    Redirect::to('teacher');
}
if (isset($_POST['submit'])) { 
	$Teacher = new profsController();
	$Teacher ->updateTeacher();
}
?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Update teacher</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>dashboard" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">matr</label>
							<input type="text" name="matr" class="form-control" placeholder="Nom" value="<?= $data->matr ?>">
						</div>
						<div class="form-group">
							<label for="name">name</label>
							<input type="text" name="name" class="form-control" placeholder="name" value="<?= $data->name ?>">
						</div>
						<div class="form-group">
							<label for="genre">genre</label>
							<select class="custom-select my-1 mr-sm-2 mb-3" name="genre">
							<option value="<?= $data->genre; ?>" selected><?= $data->genre; ?></option>
								<option value="F">female</option>
								<option value="M">Male</option>
							</select>
								
						</div>
						<div class="form-group">
							<label for="matier">matier</label>
							<input type="text" name="matier" class="form-control" placeholder="matier" value="<?= $data->matier ?>">
							<input type="hidden" name="id" value="<?= $data->id; ?>">
						</div>
                            
                        <div class="form-group">
							<label for="phone">Phone</label>
							<input type="text" name="phone" class="form-control" placeholder="phone" value="<?= $data->phone ?>">
						</div>
						<div>
						<label for="Class">Class</label>
					   <select class="custom-select my-1 mr-sm-2 mb-3" name="class">
							<option value="<?= $data->class; ?>" selected><?= $data->class; ?></option>
							<option value="Namek">Namek</option>
							<option value="meata">meata</option>
							<option value="NiNJA">NiNJA</option>
                       </select>
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