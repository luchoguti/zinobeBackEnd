<?php

namespace App\Controllers;

require './bootstrap.php';
use App\Models\User as UserModel;
use App\Models\Country;
use App\Views;

class User extends Views
{
    public function store(){

        $user = new UserModel();
        $user->name = 'luis';
        $user->document = 1222333;
        $user->email = 'luisaa@hotmail.com';
        $user->password = password_hash ("abc123",PASSWORD_BCRYPT);
        $user->id_country = 2;
        $user->created_at = new DateTime('NOW');
        $user->save ();
        return json_encode ([
            'message'=>"user create success!",
            'data'=>['user_id'=>$user->id]
        ]);
    }
    public function create_user_view()
    {
       $country = Country::all ()->toArray ();
       echo $this->getBlade ()->render ('user',['country'=>$country]);
    }
}