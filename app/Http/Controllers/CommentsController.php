<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comments;

class CommentsController extends Controller
{
    public function store(Posts $posts)
    {

        $posts->addComment(request('body'));

        return back();

    }

    public function destroy(Comments $comments)
    {
       $comments->delete();

       return redirect()->route('posts.show');
    }
}
