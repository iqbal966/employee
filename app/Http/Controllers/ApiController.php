<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function post(Request $request)
    {
        $posts = new Post();

        dd($posts);


        $data = $posts->created_at;
        

        dd($data);
    }
}
