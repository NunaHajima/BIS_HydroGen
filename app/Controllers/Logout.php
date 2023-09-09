<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $session->remove('id_user');
        $session->remove('lokasipltu');
        $session->remove('loggedIn');

        $session->setFlashdata('success', 'Successfully logout!');

        return redirect()->to('/login');
    }
}
