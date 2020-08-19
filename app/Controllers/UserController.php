<?php

namespace App\Controllers;

require './bootstrap.php';
use App\Models\User as UserModel;
use App\Models\Country;
use Config\Views;

/**
 * Class UserController
 * @package App\Controllers
 */
class UserController extends Views
{
    /**
     * @param array $request
     */
    public function store(array $request){
        $valid=$this->validate_store ($request);
        if($valid[0]){
            $this->create_user_view ($valid[1],$request);
        }else {
            $user = new UserModel();
            $user->name = $request['name'];
            $user->document = $request['document'];
            $user->email = $request['email'];
            $user->password = password_hash ($request['password'], PASSWORD_BCRYPT);
            $user->id_country = $request['country'];
            $user->created_at = new \DateTime('NOW');
            $user->save ();
            if($user->id){
                header("Location: /zinobeBackEnd/Login/exec/user_sucess");
            }
        }

    }

    /**
     * @param array $validate
     * @param array $dataForm
     */
    public function create_user_view($validate=[], $dataForm=[])
    {
       $country = Country::all ()->toArray ();
       echo $this->getBlade ()->render ('user',[
           'country'=>$country,
           'validate'=>$validate,
           'dataForm'=>$dataForm
       ]);
    }

    /**
     * @param $request
     * @return array
     */
    private function validate_store($request)
    {
        $valid = false;
        $message_valid = [];
        if($request['password_confirm']!=$request['password']){
            array_push ($message_valid,"The password and password confirm do not match, please verify");
            $valid= true;
        }
        if(strlen($request['name'])<3){
            array_push ($message_valid,"The name must have more than 3 letters, please verify");
            $valid= true;
        }
        if(preg_match("/(?=.*?[0-9]).{6,}/", $request['password']) == 0){
            array_push ($message_valid,"The Password there must be at least 6 characters and at least 1 digit, please verify");
            $valid= true;
        }
        $valid_email = UserModel::query ()->where ('email','=',$request['email'])->count ();
        if($valid_email > 0){
            array_push ($message_valid,"The email is already registered in our database, please verify");
            $valid= true;
        }
        $valid_document = UserModel::query ()->where ('document','=',$request['document'])->count ();
        if($valid_document > 0){
            array_push ($message_valid,"The document is already registered in our database, please verify");
            $valid= true;
        }
        return [
            0=>$valid,
            1=>$message_valid
        ];
    }
}