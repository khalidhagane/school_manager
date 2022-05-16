<?php

class profsController{


      /**
     *  BY MOHAMED MAITITE
     * this Methode getAllprofs by methode getAll from class profs in models
     * @param string 
     * @param string 
     * @return \prof
     */
    public function getAllprofs(){
        $profs = profs::getAll();
        return $profs;
    }
}