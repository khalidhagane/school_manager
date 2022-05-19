<?php
// include_once './controller/StudentsController.php';


if (isset($_POST['id'])) { 
	$student = new studentsController();
	$data=$student -> afichageinput();
}
else
{Redirect::to('students');}
    if (isset($_POST['submit'])) { 
         	$student = new StudentsController();
        	$student->updateStudent();
    }

?>





<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Add new Student</div>
                <div class="card-body bg-light">
                
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="post">
                        <div class="form-group">
                            <label for="name">matricul*</label>
                            <input type="text" name="matr" class="form-control" placeholder="Full name"  value="<?= $data -> matr ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">name*</label>
                            <input type="text" name="name" class="form-control" placeholder="Email"  value="<?= $data -> name ?>">
                        </div>
                        <div class="form-group">
                            <label for="depart">gerne*</label>
                            <input type="text" name="genre" class="form-control" placeholder="Departement"  value="<?= $data -> genre ?>">
                        </div>
                        <div class="form-group">
                            <label for="starting_date">Address*</label>
                            <input type="text" name="address" class="form-control"   value="<?= $data -> address ?>">
                        </div>
                        <div class="form-group">
                            <label for="starting_date"> date naissance*</label>
                            <input type="date" name="date_ne" class="form-control"   value="<?= $data -> date_ne ?>">
                        </div>
                        <div class="form-group">
                            <label for="starting_date">Email*</label>
                            <input type="text" name="email" class="form-control"  value="<?= $data -> email ?>">
                            <input type="hidden" name="id" value="<?=$data -> id ?>">

                        </div>
                        <div class="form-group">
                            <label for="starting_date">Parent name*</label>
                            <input type="text" name="parents_name" class="form-control" value="<?= $data -> parents_name ?>">
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
