<?php

namespace Manhcuong\Asm\Controllers\Client;

use Manhcuong\Asm\Commons\Controller;
use Manhcuong\Asm\Models\Post;

class PostDetailController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post();
    }

    public function index($id) {
        $post = $this->post->findByID($id);

        $this->renderViewClient('post.index', [
            'post'=> $post
        ]);
    }
}