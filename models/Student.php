<?php

class Student
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM students');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO students (name,email,departement,starting_date,status)
			VALUES (:name,:email,:depart,:starting_date,:status)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':depart',$data['depart']);
        $stmt->bindParam(':starting_date',$data['starting_date']);
        $stmt->bindParam(':status',$data['status']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }
}

