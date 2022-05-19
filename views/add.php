<?php
    // if (isset($_POST['submit'])){
    //     $newStudent = new StudentsController();
    //     $newStudent->addStudent();
    // }
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
                            <label for="name">Full name*</label>
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address*</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="depart">Departement*</label>
                            <input type="text" name="depart" class="form-control" placeholder="Departement">
                        </div>
                        <div class="form-group">
                            <label for="starting_date">Starting date*</label>
                            <input type="date" name="starting_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">not-active</option>
                            </select>
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