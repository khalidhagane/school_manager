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
                'matr' => $_POST['matr'],
                'name' => $_POST['name'],
                'genre' => $_POST['genre'],
                'address' => $_POST['address'],
                'date_ne' => $_POST['date_ne'],
                'email' => $_POST['email'],
                'parents_name' => $_POST['parents_name'],
            );
            $result = Student::add($data);
            if($result === 'ok'){
                Redirect::to('students');
            }else{
                echo $result;
            }
        }
    }

    public function deleteStudent(){
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Student::delete($data);
            if ($result === 'ok') {
                
                Redirect::to('students');
            } else {
                echo $result;
            }
        }
    }

    public function afichageinput(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $Student =Student::getOneStudent($data);
            return $Student;
        }}


     public function updateStudent(){
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'matr' => $_POST['matr'],
                'name' => $_POST['name'],
                'genre' => $_POST['genre'],
                'address'=> $_POST['address'],
                'date_ne'=> $_POST['date_ne'],
                'email'=> $_POST['email'],
                'parents_name' => $_POST['parents_name'],
               );
            $result = Student::update($data);
            if ($result === 'ok'){     
                Redirect::to('students');
            } else {
                echo $result;
            }
        }
     }   
}