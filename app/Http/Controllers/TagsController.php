<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
class TagsController extends Controller
{
    public function index(Tags $tags)
    {
        //return $tags;

        $posts = $tags->posts;

        return view('posts.index', compact('posts'));
    }
}
