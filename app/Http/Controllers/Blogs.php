<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloog;
use App\Models\User;


class Blogs extends Controller
{

    public function index(Request $request)
    {

        $blogs = Bloog::all();
        return view('blog_list', ["blogs" => $blogs]);
    }

    public function blog_details($id)
    {

        $blog = Bloog::where('id', $id)->first();
        return view('blogDetails', ["blog" => $blog]);
    }

    public function delete_blog($id)
    {
        Bloog::where('id', $id)->delete();
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

        $blog = new Bloog();
        $blog->title =  $request->title;
        $blog->body =  $request->body;
        $blog->user_id =  $request->session()->get('user')->id;
        $blog->save();

        return redirect('/');
    }

    public function get_profile(Request $request, $username)
    {
        $user = User::where("username",$username)->first();
        return view("UserProfile", ["user"=>$user]);
    }
}
