<?php

namespace Manhcuong\Asm\Controllers\Admin;

use Manhcuong\Asm\Commons\Controller;
use Manhcuong\Asm\Models\User;
use Rakit\Validation\Validator;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();

        $this->renderViewAdmin('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('users.create');
    }

    public function store()
    {
        $validate = new Validator();
        $validation = $validate->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'avatar' => 'uploaded_file:0,2048K,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/users/create'));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            if (!empty($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {
                $from = $_FILES['avatar']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['avatar']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['avatar'] = $to;
                } else {
                    $_SESSION['errors']['avatar'] = 'Upload không thành công!';

                    header('Location: ' . url('admin/users/create'));
                    exit;
                }
            }

            $this->user->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/users'));
        }
    }

    public function type($type, $id) {
        $this->user->type($type, $id);
        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công!';

        header('Location: ' . url('admin/users'));
    }

    public function delete($id)
    {
        try {
            $user = $this->user->findByID($id);

            $this->user->delete($id);

            if ($user['avatar'] && file_exists( PATH_ROOT . $user['avatar'] ) ) {
                unlink(PATH_ROOT . $user['avatar']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/users'));
        exit();
    }
}