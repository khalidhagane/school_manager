<?php
require_once './controllers/ParentsController.php';
$data = new ParentsController();
$parents = $data->getAllparents();

?>

<div class="container">
    <div class="row">
        <div class="col col-lg-12 mx-auto">
            <a href="<?= BASE_URL; ?>add-parent" class="btn btn-md btn-primary">
                <i class="fas fa-plus"></i>
            </a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Matricule</th>
                            <th scope="col">Nom Complet</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Job</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Phone</th>
                            <th scope="col">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($parents as $parent) {
                        ?>
                            <tr>
                                <td><?= $parent['matr']; ?></td>
                                <td><?= $parent['name']; ?></td>
                                <td><?= $parent['genre']; ?></td>
                                <td><?= $parent['job']; ?></td>
                                <td><?= $parent['address']; ?></td>
                                <td><?= $parent['phone']; ?></td>
                                <td class="d-flex">
                                    <form method="post" action="update-parent" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $parent['id'] ?>">
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="post" action="delete-parent" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $parent['id'] ?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>