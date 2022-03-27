<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class Blogs extends Controller
{

    public function index(Request $request)
    {

        $blogs = Blog::all();
        return view('blog_list', ["blogs" => $blogs]);
    }

    public function blog_details($id)
    {

        $blog = Blog::where('id', $id)->first();
        return view('blogDetails', ["blog" => $blog]);
    }

    public function delete_blog($id)
    {
        Blog::where('id', $id)->delete();
        return redirect('/');
    }

    public function create_blog_render(Request $request)
    {
        if ($request->session()->has('user')) {
            return view('blogCreate',);
        }
        return redirect('reg_view/');
    }

    public function create_blog(Request $request)
    {

        $blog = new Blog();
        $blog->title =  $request->title;
        $blog->body =  $request->body;
        $blog->author =  $request->author;
        $blog->save();

        return redirect('/');
    }
}
