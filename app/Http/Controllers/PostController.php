<?php namespace App\Http\Controllers;

use Request;
use Response;
use App\Models\Post;

class PostController extends Controller {

    public function getPosts()
    {
        $page = Request::input('page', 0);
        $size = Request::input('size', 10);


        return Post::skip($page * $size)->take($size)->get();
    }

}