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

    /**
     *  BY MOHAMED MAITITE
     * this Methode addprofs by methode add from class profs in models
     * @param string 
     * @param string 
     * @return 
     */

    public function addprofs(){
        if(isset($_POST['submit'])){
            $data = array(
                'matr' => $_POST['matr'],
                'name' => $_POST['name'],
                'genre' => $_POST['genre'],
                'matier' => $_POST['matier'],
                'phone' => $_POST['phone'],
            );
            $result = profs::add($data);
            if($result === 'ok'){
                Redirect::to('teacher');
            }else{
                echo $result;
            }
        }

    }

    /**
     *  BY MOHAMED MAITITE
     * this Methode updateTeacher  by methode update from class profs in models
     * @param string 
     * @param string 
     * @return 
     */

    public function updateTeacher(){
        if (isset($_POST['submit'])) {
            $data = array(
             'id' => $_POST['id'],
             'matr' => $_POST['matr'],
             'name' => $_POST['name'],
             'genre' => $_POST['genre'],
             'matier'=> $_POST['matier'],
             'phone' =>  $_POST['phone'],
            );      
            $result =profs::update($data);
            if ($result === 'ok') {
                Redirect::to('teacher');
            }else{
                echo $result;
            }
        }
      
    }




     /**
     *  BY MOHAMED MAITITE
     * this Methode getOneTeacher  by methode getTeacher from class profs in models
     * @param string 
     * @param string 
     * @return 
     */
    public function getOneTeacher(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $teacher = profs::getTechear($data);
            return $teacher;
        }
     }
 /**
     *  BY MOHAMED MAITITE
     * this Methode deleteTechear  by methode delete from class profs in models
     * @param string 
     * @param string 
     * @return 
     */

     public function deleteTechear(){
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = profs::delete($data);
            if ($result === 'ok') {
                // header('location:'.BASE_URL);
                // Session::set('success', 'Epmployé Supprimé');
                Redirect::to('teacher');
            } else {
                echo $result;
            }
        }
    }

   




}