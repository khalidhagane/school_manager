<?php

class StudentsController
{
    public function getAllStudents(){
        $students = Student::getAll();
        return $students;
    }

    public function addStudent(){
        if(isset($_POST['submit'])){
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'depart' => $_POST['depart'],
                'starting_date' => $_POST['starting_date'],
                'status' => $_POST['status'],
            );
            $result = Student::add($data);
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }
}