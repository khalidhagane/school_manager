<?php

class AdminsController {

    public function auth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $result = Admin::login($data);
            if($result->username === $_POST['username'] && (password_verify($_POST['password'],$result->password) || $_POST['password'] === $result->password)){

                $_SESSION['logged'] = true;
                $_SESSION['username'] = $result->username;
                Redirect::to('dashboard');

            }else{
                Session::set('error','Pseudo ou mot de passe est incorrect');
                Redirect::to('login');
            }
        }
    }

    public function addAdmin(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12
            ];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
            $data = array(
                'fullname' => $_POST['fullname'],
                'username' => $_POST['username'],
                'password' => $password,
            );
            $result = Admin::createAdmin($data);
            if($result === 'ok'){
                Session::set('success','Admin crée');
                Redirect::to('dashboard');
            }else{
                echo $result;
            }
        }
    }

    static public function logout(){
        session_destroy();
    }


}