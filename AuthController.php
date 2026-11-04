<?php

class AuthController
{
    public function login($error = null)
    {
        $title = 'Login - mY Store';

        ob_start();
        require __DIR__ . '/../../views/pages/auth/login.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }

    public function authenticate()
    {
        require_once __DIR__ . '/../models/User.php';
        require_once __DIR__ . '/../../config/database.php';

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        $userModel = new User($pdo);
        $user      = $userModel->findByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id']  = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: /admin');
            exit;
        }

        $this->login('Username atau password salah.');
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: /login');
        exit;
    }
}