<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->request = \Config\Services::request();
    }
    public function index()
    {
        $data = [
            'title' => 'my title',
            'content' => view('login/login'),
        ];

        return view('templates/templateLogin', $data);
    }

    public function doLogin(){
        $rules = [
            'email' => 'required|min_length[6]|max_length[50]|valid_email',
            'password' => 'required|min_length[8]|max_length[255]|validateUserPe[email,password]',
        ];
        $errors = [
            'password' => [
                'validateUserPe' => 'El email o contraseña no coincide'
            ]
        ];

        $this->validation->setRules($rules, $errors);

        if ($this->validation->run($_POST)) {
            $userModel = new UserModel();

            $usuario = $userModel->findByColumn("email",$this->request->getVar('email'));

            $session = session();
            $session->set("usuario", $usuario);
           
            return redirect()->to(site_url('admin/dashboard'));
        } else {
            $data = [
                'title' => 'my title',
                'content' => view('login/login'),
            ];

            return view('templates/templateLogin', $data);
        }
    }
}
