<?php

namespace Manhcuong\Asm\Controllers\Admin;

use Manhcuong\Asm\Commons\Controller;
use Manhcuong\Asm\Commons\Helper;
use Manhcuong\Asm\Models\Category;

class DashboardController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function dashboard()
    {
        $categories = $this->category->count();

        $this->renderViewAdmin(__FUNCTION__, [
            "categories"=> $categories
        ]);
    }
}