<?php
//add form and redirection to controller
?>
<?php


    if (isset($_POST['submit'])){
        $newStudent = new StudentsController();
        $newStudent->addStudent();
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
                            <input type="number" name="matr" class="form-control" placeholder="Matricule">
                        </div>
                        <div class="form-group">
                            <label for="email">name*</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="depart">gerne*</label>
                            <!-- <input type="text" name="genre" class="form-control" placeholder="Genre"> -->

                            <select class="custom-select my-1 mr-sm-2" name="genre">
                                
                                <option value="f">F</option>
                                <option value="m">M</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="starting_date">Address*</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="starting_date"> date naissance*</label>
                            <input type="date" name="date_ne" class="form-control" placeholder="Date de naissance">
                        </div>
                        <div class="form-group">
                            <label for="starting_date">Email*</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="starting_date">Matricule parent*</label>
                            <input type="int" name="parents_matr" class="form-control" placeholder="Matricule parent">
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