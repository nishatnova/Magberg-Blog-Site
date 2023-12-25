<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $categories, $blogs, $blog;

    public function index()
    {
        $this->categories = Category::all();
        $this->blogs = Blog::all();
        return view('website.home.index', ['categories' => $this->categories, 'blogs' => $this->blogs]);
    }
    public function category($id)
    {
        $this->blogs = Blog::where('category_id', $id)->get();
        return view('website.category.index', ['blogs' => $this->blogs]);
    }

    public function detail($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('website.detail.index', ['blog' => $this->blog, 'categories' => $this->categories]);
    }
}
