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
        $stmt = DB::connect()->prepare('INSERT INTO students (matr,name,genre,address,date_ne,email,parents_name)
			VALUES (:matr,:name,:genre,:address,:date_ne,:email,:parents_name)');
        $stmt->bindParam(':matr',$data['matr']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':genre',$data['genre']);
        $stmt->bindParam(':address',$data['address']);
        $stmt->bindParam(':date_ne',$data['date_ne']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':parents_name',$data['parents_name']);
        

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
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

}




