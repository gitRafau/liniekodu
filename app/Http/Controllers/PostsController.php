<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Http\Requests\PostsRequest;
use App\PostsPhoto;
use Illuminate\Http\Request;
use App\Posts;
use Carbon\Carbon;
use Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {

        $posts = Posts::latest();

        if ($month = request('month')) {

            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {

            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();


        $archives = Posts::archives();

        //return $archives;

        return view('posts.index', compact('posts', 'archives'));
    }

    public function create()
    {

        return view('posts.create');
    }

    public function edit(Posts $posts)
    {
        return view('posts.edit', compact('posts'));
    }

    public function update(PostsRequest $request, Posts $posts)
    {
        $posts->update($request->all());
        return redirect()->route('posts.index');
    }

    public function store(PostsRequest $postsRequest)
    {

        $posts = new Posts;

        $posts->title = request('title');
        $posts->author = request('author');
        $posts->body = request('body');

        //save image


        if($postsRequest->hasFile('featured_image')){
            $image = $postsRequest->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(200, 200)->save($location);

            $posts->image = $filename;
        }

        $posts->save();

        return redirect('/');
    }

    public function show(Posts $posts)
    {

        return view('posts.show', compact('posts'));
    }

    public function destroy(Posts $posts)
    {
        $posts->delete();
        return redirect()->route('posts.index');
    }

    public function upload()
    {
        return view('posts.create');
    }

    public function uploaded(ImagesRequest $request)
    {
        $photos = PostsPhoto::create($request->all());

        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
        };
        return 'Upload successful!';
    }


}
