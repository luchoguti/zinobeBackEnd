<?php


namespace App\Controllers;
use Config\Views;

class LoginController extends Views
{
    public function exec($param = ''){
        $data = array();
        if($param == 'user_sucess'){
            $data=[
                'message'=>"user create success!"
            ];
        }
        echo $this->getBlade ()->render ('index',$data);
    }
    public function login(){

    }

}