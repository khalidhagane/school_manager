<?php
$data = new profsController();
$profs = $data->getAllprofs();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-10 mx-auto">
            <a href="<?= BASE_URL;?>add-teacher" class="btn btn-md btn-primary">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">matr</th>
                            <th scope="col">name</th>
                            <th scope="col">genre</th>
                            <th scope="col">matier</th>
                            <th scope="col">phone</th>
                            <th scope="col">Class</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($profs as $prof):?>
                            <tr>
                                <td><?= $prof['matr'];?></td>
                                <td><?= $prof['name'];?></td>
                                <td><?= $prof['genre'];?></td>
                                <td><?= $prof['matier'];?></td>
                                <td><?= $prof['phone'];?></td>
                                <td><?= $prof['class'];?></td>
                                <td class="d-flex">
                                    <form method="post" action="update-teacher" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $prof['id']?>">
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="post" action="delete-teacher" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $prof['id']?>">
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
