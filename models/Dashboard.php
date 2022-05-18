<?php

class Dashboard
{
    public static function count($table){
        try{
            $query = "SELECT count(*) FROM $table";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            $number = $stmt->fetchColumn();
            return $number;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

    public static function per($genre){
        try{
            $query = "SELECT count(*) FROM students WHERE genre = :genre";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":genre" => $genre));
            $number = $stmt->fetchColumn();
            return $number;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
}