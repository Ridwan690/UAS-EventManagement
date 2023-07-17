<?php

class Auth extends Controller {
    
    public function index() 
    {
        $this->view('auth/login');
    }

    public function register() 
    {
        $this->view('auth/register');
    }

    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data['login'] = $this->model('Auth_model')->getUser($email, $password);
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
                // Lakukan verifikasi login, misalnya dengan memeriksa hasil query.
                if ($data['login']['role'] == "ADMIN") {
                    // Login berhasil, arahkan pengguna ke halaman yang sesuai
                    header('Location: ' . BASEURL . '/');
                    exit();
                }else {
                    header('Location: ' . BASEURL . '/auth');
                    exit();
                }
            }
        } else {
            // Tampilkan pesan error karena email dan/atau password tidak diset
            
        }
    }

    public function logout()
    {
        // Perform any necessary cleanup or logout actions here

        // Destroy the session and unset session variables
        if (session_status() == PHP_SESSION_NONE){
            session_start();
            session_destroy();
            session_unset();
        }

        // Redirect to the login page or any other desired page
        header('Location: ' . BASEURL . '/');
        exit();
    }

}