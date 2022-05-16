<?php
$data = new StudentsController();
$employes = $data->getAllEmployes();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-10 mx-auto">
            <a href="<?= BASE_URL;?>add" class="btn btn-md btn-primary">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Full name</th>
                            <th scope="col">email</th>
                            <th scope="col">departement</th>
                            <th scope="col">Staring date</th>
                            <th scope="col">Status</th>
                            <th scope="col">actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($employes as $employe):?>
                            <tr>
                                <td><?= $employe['name'];?></td>
                                <td><?= $employe['email'];?></td>
                                <td><?= $employe['departement'];?></td>
                                <td><?= $employe['starting_date'];?></td>
                                <td><?= $employe['status']?
                                    '<span class="badge badge-success">active</span>':
                                    '<span class="badge badge-danger">nonactive</span>';?></td>
                                <td class="d-flex">
                                    <form method="post" action="update" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $employe['id']?>">
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="post" action="delete" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $employe['id']?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
