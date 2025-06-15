<?php
class UserController {
    public function login() {
        echo "Login page works!";
    }
    public function loginPost() {
        echo "POST to login!";
    }
    public function profile() {
        echo "Profile page works!";
    }
    public function logout() {
        session_destroy();
        header('Location: /login');
        exit;
    }
}
