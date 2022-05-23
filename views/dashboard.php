<?php
$data = new DashboardController();
$search = null;
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

<?php
if ($search !== null){
?>
    <pre>
    <?php var_dump($search);?>
    </pre>
    <a href="./">back</a>
<?php
} else {


?>
<div class="container">

        <div class="row mt-4">
            <!-- students card -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded p-3 pb-1 bg-light">
                    <p class="text-secondary">Students</p>
                    <div class="text-end">
                        <h3 class="d-inline"><?= $student?></h3>
                    </div>
                    <p class="text-info"><?= $mper.'% male'?></p>
                    <p class="text-info"><?= $fper.'%female'?></p>

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
<?php
}
?>