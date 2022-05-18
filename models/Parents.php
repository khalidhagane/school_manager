<?php

class Parents{

    static public function getAll(){
        $query = 'SELECT * FROM `parents`';
        $stmt = DB::connect() -> prepare($query);
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt = null;
    }


    static public function addParent($data){
        $stmt = DB::connect()->prepare('INSERT INTO parents (matr,name,genre,job,address,phone)
			VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bindParam(1,$data['matr']);
        $stmt->bindParam(2,$data['name']);
        $stmt->bindParam(3,$data['genre']);
        $stmt->bindParam(4,$data['job']);
        $stmt->bindParam(5,$data['address']);
        $stmt->bindParam(6,$data['phone']);
    
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }

    /**
     * method return database from id(button update) = id (database)
     *
     * @param [type] $data
     * @return $parent 
     */
    static public function getParent($data){
        try {
            $query = "SELECT * FROM parents WHERE id = ?";
            $stmt = DB::connect()->prepare($query);
            $stmt -> bindParam(1, $data['id']);
            $stmt->execute();
            $parent = $stmt->fetch(PDO::FETCH_OBJ);
            return $parent;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function update($data){
        $query = "UPDATE `parents` SET `matr` = ?, `name` = ?, `genre` = ?, `job` = ?, `address` = ?, `phone` = ? WHERE `id` = ?";
        
        $stmt = DB::connect()->prepare($query);
        $stmt->bindParam(1, $data['matr']);
        $stmt->bindParam(2, $data['name']);
        $stmt->bindParam(3, $data['genre']);
        $stmt->bindParam(4, $data['job']);
        $stmt->bindParam(5, $data['address']);
        $stmt->bindParam(6, $data['phone']);
        $stmt->bindParam(7, $data['id']);
      
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
            // die(print_r($data));
        }
        // $stmt->close();
        $stmt = null;
    }
}