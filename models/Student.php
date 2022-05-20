<?php

class Student
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM students');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        // $stmt = null;
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO students (matr,name,genre,address,date_ne,email,parents_matr)
			VALUES (:matr,:name,:genre,:address,:date_ne,:email,:parents_matr)');
        $stmt->bindParam(':matr',$data['matr']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':genre',$data['genre']);
        $stmt->bindParam(':address',$data['address']);
        $stmt->bindParam(':date_ne',$data['date_ne']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':parents_matr',$data['parents_matr']);
        

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        
        // $stmt->close();
        // $stmt = null;
    }


    static public function delete($data){
        $id = $data['id'];
        try {
            $query = "DELETE FROM students WHERE id=:id";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }


    static public function update($data)
    {
        $query = "UPDATE `students` SET `matr` = :matr, `name` = :name, `genre` = :genre, `address` = :address, `date_ne` = :date_ne, `email` = :email, `parents_matr` = :parents_matr WHERE `id` = :id";
        $stmt = DB::connect()->prepare($query);
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':matr', $data['matr'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':genre', $data['genre'], PDO::PARAM_STR);
        $stmt->bindParam(':address', $data['address'], PDO::PARAM_STR);
        $stmt->bindParam(':date_ne', $data['date_ne'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':parents_matr', $data['parents_matr'], PDO::PARAM_STR);
        //  die(print_r($data));
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }


    static public function getOneStudent($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM students WHERE id=:id";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}




