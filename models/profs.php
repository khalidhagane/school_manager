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
}