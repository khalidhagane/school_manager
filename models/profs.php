<?php
class profs{

    /**
     *  BY MOHAMED MAITITE
     * this Methode getAll profs 
     * @param string 
     * @param string 
     * @return \prof
     */
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM profs');
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
     /**
     *  BY MOHAMED MAITITE
     * this Methode for add New teacher
     * @param array $data 
     * @param string 
     * @return \prof
     */
    //add-teacher
    static public function add($data)
    {
    $stmt = DB::connect()->prepare('INSERT INTO profs (matr,name,genre,matier,phone,class)
    VALUES (:matr,:name,:genre,:matier,:phone,:class)');
    $stmt->bindParam(':matr',$data['matr']);
    $stmt->bindParam(':name',$data['name']);
    $stmt->bindParam(':genre',$data['genre']);
    $stmt->bindParam(':matier',$data['matier']);
    $stmt->bindParam(':phone',$data['phone']);
    $stmt->bindParam(':class',$data['class']);

    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error3';
    }
   
     }

  /**
     *  BY MOHAMED MAITITE
     * this Methode for update  teacher
     * @param array $data 
     * @param string 
     * @return 
     */
    //add-teacher
    static public function update($data)
    {
        $query = "UPDATE `profs` SET `matr` = :matr, `name` = :name, `genre` = :genre, `matier` = :matier, `phone` = :phone , `class` = :class WHERE `id` = :id";
        $stmt=DB::connect()->prepare($query);
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':matr', $data['matr'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':genre', $data['genre'], PDO::PARAM_STR);
        $stmt->bindParam(':matier', $data['matier'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':class', $data['class'], PDO::PARAM_STR);

        // die(print_r($data));
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
     }
     

     /**
     *  BY MOHAMED MAITITE
     * this Methode for get one  teacher
     * @param array $data 
     * @param string 
     * @return \prof
     */

     static public function getTechear($data)
     {
         $id = $data['id'];
         try {
             $query = "SELECT * FROM profs WHERE id=:id";
             $stmt = DB::connect()->prepare($query);
             $stmt->execute(array(":id" => $id));
             $teacher = $stmt->fetch(PDO::FETCH_OBJ);
             return $teacher;
         } catch (PDOException $ex) {
             echo 'erreur2' . $ex->getMessage();
         }
     }


/**
     *  BY MOHAMED MAITITE
     * this Methode for Delete   teacher
     * @param array $data 
     * @param string 
     * @return \prof
     */
   
    static public function delete($data){
        $id = $data['id'];
        try {
            $query = "DELETE FROM profs WHERE id=:id";
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


