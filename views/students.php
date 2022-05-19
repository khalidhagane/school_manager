<?php
//students table
?>

<?php
$data = new StudentsController();
$students = $data->getAllStudents();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-10 mx-auto">
            <a href="<?= BASE_URL;?>add-student" class="btn btn-md btn-primary">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Matricul</th>
                            <th scope="col">Name</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date naissance</th>
                            <th scope="col">Email</th>
                            <th scope="col">Parants name </th>
                            <th scope="col">action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($students as $student):?>
                            <tr>
                            <td><?= $student['matr'];?></td>
                                <td><?= $student['name'];?></td>
                                <td><?= $student['genre'];?></td>
                                <td><?= $student['address'];?></td>
                                <td><?= $student['date_ne'];?></td>
                                <td><?= $student['email'];?></td>
                                <td><?= $student['parents_name'];?></td>
                                
                                
                                
                                <td class="d-flex">
                                    <form method="post" action="update" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $student['id']?>">
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="post" action="delete-student" class="mr-1">
                                        <input type="hidden" name="id" value="<?= $student['id']?>">
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