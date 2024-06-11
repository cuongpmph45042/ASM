<?php

namespace Manhcuong\Asm\Controllers\Admin;

use Manhcuong\Asm\Commons\Controller;
use Manhcuong\Asm\Models\Category;
use Manhcuong\Asm\Models\Post;
use Rakit\Validation\Validator;

class PostController extends Controller
{
    private Post $post;
    private Category $category;

    public function __construct()
    {
        $this->post = new Post();
        $this->category = new Category();
    }

    public function index()
    {
        $posts = $this->post->all();

        $this->renderViewAdmin('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = $this->post->findByID($id);

        $this->renderViewAdmin('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        $categories = $this->category->all();
        $categoryList = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('posts.create', [
            'categoryList' => $categoryList
        ]);
    }

    public function store()
    {
        $validate = new Validator();
        $validation = $validate->make($_POST + $_FILES, [
            'id_categories' => 'required',
            'title' => 'max:500',
            'contents' => 'max:65000',
            'image' => 'uploaded_file:0,2048K,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/posts/create'));
            exit;
        } else {
            $data = [
                'id_categories' => $_POST['id_categories'],
                'title' => $_POST['title'],
                'contents' => $_POST['contents'],
            ];

            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {
                $from = $_FILES['image']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['image']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['image'] = $to;
                } else {
                    $_SESSION['errors']['image'] = 'Upload không thành công!';

                    header('Location: ' . url('admin/posts/create'));
                    exit;
                }
            }

            $this->post->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/posts'));
        }
    }

    public function edit($id)
    {
        $post = $this->post->findByID($id);
        $categories = $this->category->all();
        $categoryList = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('posts.edit', [
            'post' => $post,
            'categoryList' => $categoryList
        ]);
    }

    public function update($id)
    {
        $post = $this->post->findByID($id);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'id_categories' => 'required',
            'title' => 'max:500',
            'contents' => 'max:65000',
            'image' => 'uploaded_file:0,2048K,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/posts/edit/$id"));
            exit;
        } else {
            $data = [
                'id_categories' => $_POST['id_categories'],
                'title' => $_POST['title'],
                'contents' => $_POST['contents'],
                'update_at' => date('Y-m-d H:i:s')
            ];

            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {

                $from = $_FILES['image']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['image']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['image'] = $to;
                } else {
                    $_SESSION['errors']['image'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/posts/edit/$id"));
                    exit;
                }
            }

            $this->post->update($id, $data);

            if ($post['image'] && file_exists(PATH_ROOT . $post['image'])) {
                unlink(PATH_ROOT . $post['image']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/posts"));
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $post = $this->post->findByID($id);

            $this->post->delete($id);

            if ($post['image'] && file_exists( PATH_ROOT . $post['image'] ) ) {
                unlink(PATH_ROOT . $post['image']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/posts'));
        exit();
    }
}