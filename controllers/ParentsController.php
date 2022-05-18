<?php

class ParentsController
{
    /**
     * this methode return all element from table parent in database;
     *  @return table   
     */
    public function getAllparents(){
        $parents = Parents::getAll();
        return $parents;
    }

    public function addNewParent(){
        if(isset($_POST['submit'])){
            $data = array(
                'matr' => $_POST['matr'],
                'name' => $_POST['name'],
                'genre' => $_POST['genre'],
                'job' => $_POST['job'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
            );
            $result = Parents::addParent($data);
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }
}