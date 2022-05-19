<?php

//  include_once './controllers/profsController.php';

if (isset($_POST['submit'])) { 
	$Newteacher = new profsController();
	$Newteacher ->addprofs();
}
?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add New teacher</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>techer" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="matr">matr</label>
							<input type="text" name="matr" class="form-control" placeholder="matr">
						</div>
						<div class="form-group">
							<label for="name">name</label>
							<input type="text" name="name" class="form-control" placeholder="name">
						</div>
						<div class="form-group">
							<label for="genre">genre</label>
							<input type="text" name="genre" class="form-control" placeholder="genre">
						</div>
						<div class="form-group">
							<label for="matier">matier</label>
							<input type="text" name="matier" class="form-control" placeholder="matier">
						</div>
						<div class="form-group">
							<label for="phone">phone/label>
							<input type="text" name="phone" class="form-control" placeholder="phone">
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