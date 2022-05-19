<?php

$data = new DashboardController();
if(isset($_POST['search'])){
    $search = $data->findKeyword($_POST['table'], $_POST['keyword']);
}else{
    $student = $data->getCount('students');
    $prof = $data->getCount('profs');
    $admin = $data->getCount('admins');
    $class = $data->getCount('classes');

    $fper = number_format($data->getPer('f'),1);
    $mper = number_format($data->getPer('m'), 1);
}


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-primary" href="#">Escuela</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="students">Etudient</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="parents">Parents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teacher">Professeurs</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" type="search" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <select class="custom-select my-1 mr-sm-2" name="table">
                <option value="students" selected>Apprenent</option>
                <option value="profs">Prof</option>
                <option value="parents">Parent</option>
            </select>
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="search">
        </form>
    </div>
</nav>
<div class="container">
    <?= $mper.'% '.$fper?>
        <div class="row mt-4">
            <!-- students card -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded p-3 pb-1 bg-light">
                    <p class="text-secondary">Students</p>
                    <div class="text-end">
                        <h3 class="d-inline"><?= $student?></h3>
                    </div>
                </div>
            </div>
            <!-- classes card -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded p-3 pb-1 bg-info">
                    <p class="text-secondary">Classes</p>
                    <div class="text-end">
                        <h3 class="d-inline"><?= $class?></h3>
                    </div>
                </div>
            </div>
            <!-- teachers card -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded p-3 pb-1 bg-danger">
                    <p class="text-secondary">Teachers</p>
                    <div class="text-end">
                        <h3 class="d-inline"><?= $prof?></h3>
                    </div>
                </div>
            </div>
            <!-- users card -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded p-3 pb-1 bg-warning">
                    <p class="text-secondary">Users</p>
                    <div class="text-end">
                        <h3 class="d-inline"><?= $admin?></h3>
                    </div>
                </div>
            </div>
        </div>
</div>