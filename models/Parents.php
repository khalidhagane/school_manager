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
}