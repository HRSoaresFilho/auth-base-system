<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to('login');
    }

    public function view($page = 'login')
    {
        if (!is_file(APPPATH . 'Views/auth/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        return view('template/header')
            . view('auth/' . $page)
            . view('template/footer');
    }
}
