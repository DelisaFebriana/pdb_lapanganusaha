<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Logout extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $session->remove('id');
        $session->remove('username');
        $session->remove('loggedIn');

        $session->setFlashdata('success', 'Successfully logout!');

        return redirect()->to('/home');
    }
}
