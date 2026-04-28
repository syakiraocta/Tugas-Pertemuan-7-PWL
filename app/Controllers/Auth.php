<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        return view('v_login');
    }

    public function auth()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Syarat: Email ada '@' dan Password tidak kosong
        if (strpos($email, '@') !== false && !empty($password)) {
            $session->set([
                'user_email' => $email,
                'user_name'  => 'Admin WarmadZ',
                'logged_in'  => TRUE
            ]);
            return redirect()->to(base_url('/'));
        } else {
            return redirect()->to(base_url('/login'))->with('msg', 'Email harus pakai @ dan password jangan kosong!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}