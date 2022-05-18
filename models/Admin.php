<?php

class Admin
{
    static public function login($data){
        $username = $data['username'];
        $password = $data['password'];
        try{
            $query = 'SELECT * FROM admins WHERE username=:username AND password=:password';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username, ":password" => $password));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function createAdmin($data){
        $stmt = DB::connect()->prepare('INSERT INTO admins (matr,username,password)
			VALUES (:matr,:username,:password)');
        $stmt->bindParam(':fullname',$data['matr']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':password',$data['password']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }
}