<?php

namespace Manhcuong\Asm\Controllers\Client;

use Manhcuong\Asm\Commons\Controller;
use Manhcuong\Asm\Commons\Helper;
use Manhcuong\Asm\Models\Category;
use Manhcuong\Asm\Models\Post;

class HomeController extends Controller
{
    private Post $post;
    private Category $category;

    public function __construct()
    {
        $this->post = new Post();
        $this->category = new Category();
    }
    
    public function index() {
        $posts = $this->post->all();
        $categories = $this->category->all(); 

        $this->renderViewClient('home', [
            'posts'      => $posts,
            'categories' => $categories,
        ]);
    }
}