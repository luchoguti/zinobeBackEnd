<?php


namespace App\Controllers;

require './bootstrap.php';
use App\Models\User;
use Config\Session;
use Config\Views;

/**
 * Class LoginController
 * @package App\Controllers
 */
class LoginController extends Views
{
    /**
     * @var Session
     */
    private $session;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->session = new Session();
    }

    /**
     * @param string $param
     */
    public function exec($param = ''){
        if(!$this->session->validate_session ()) {
            $data = array();
            if ($param == 'user_sucess') {
                $data = [
                    'message' => "user create success!"
                ];
            }
            $this->view_index ($data);
        }else{
            $this->view_session ();
        }
    }

    /**
     * @param $request
     */
    public function login($request)
    {
        if(!$this->session->validate_session ()) {
            if (!empty($request)) {
                $valid_email = User::query ()->where (
                    'email', '=', $request['email_login']
                )->get ();
                if ($valid_email->count () > 0) {
                    if (password_verify ($request['password_login'], $valid_email[0]->password)) {
                        $this->session->add ('name_user', $valid_email[0]->name);
                        $this->session->add ('email', $valid_email[0]->email);
                        header ("Location: https://shielded-fjord-53139.herokuapp.com");
                    } else {
                        $data = [
                            'error' => "Email or password does not match, please verify!",
                            'dataForm' => $request
                        ];
                        $this->view_index ($data);
                    }
                } else {
                    $data = [
                        'error' => "Email do not exists, please verify!",
                        'dataForm' => $request
                    ];
                    $this->view_index ($data);
                }
            } else {
                $this->view_index ([]);
            }
        }else{
            $this->view_session ();
        }
    }

    /**
     *
     */
    public function logout(){
        $this->session->close ();
        header("Location: https://shielded-fjord-53139.herokuapp.com/");
    }

    /**
     *
     */
    private function view_session()
    {
        echo $this->getBlade ()->render ('home');
    }

    /**
     * @param $data
     */
    private function view_index($data)
    {
        echo $this->getBlade ()->render ('index', $data);
    }

}