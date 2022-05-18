<?php
$data = new DashboardController();
$student = $data->getCount('students');
$prof = $data->getCount('profs');
$admin = $data->getCount('admins');

$fper = number_format($data->getPer('f'),1);
$mper = number_format($data->getPer('m'), 1);

//$teacher = $data->getTeachersCount();
//$user = $data->getUsersCount();

?>


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
                        <h3 class="d-inline">jjj</h3>
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