<?php

namespace Manhcuong\Asm\Controllers\Client;

use Manhcuong\Asm\Commons\Controller;
use Manhcuong\Asm\Models\User;

class AuthController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showFormLog()
    {
        $this->renderViewClient('auth.index');
    }

    public function login()
    {
        avoid_login();

        try {
            $user = $this->user->findByEmail($_POST['email']);

            if (empty($user)) {
                throw new \Exception('Không tồn tại email: ' . $_POST['email']);
            }

            $flag = password_verify($_POST['password'], $user['password']);
            if ($flag) {

                $_SESSION['user'] = $user;

                if ($user['type'] == 'admin') {
                    header('Location: ' . url('admin/'));
                    exit;
                }

                header('Location: ' . url());
                exit;
            }

            throw new \Exception('Password không đúng');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();

            header('Location: ' . url('auth/login'));
            exit;
        }
    }

    public function logout() {
        unset($_SESSION['user']);

        header('Location: ' . url() );
        exit;
    }

}