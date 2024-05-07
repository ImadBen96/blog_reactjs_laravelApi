<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->limit(2)->with(["user","category"])->get();
        foreach ($posts as $post) {
            $post->setAttribute("added_at",$post->created_at->diffForHumans());
            $post->setAttribute("comments_count",$post->comments->count());
        }
        return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json([
            "id" => $post->id,
            "slug" => $post->slug,
            "body" => $post->body,
            "added_at" => $post->created_at->diffForHumans(),
            "comments_count" => $post->comments->count(),
            "image" => $post->image,
            "user" => $post->user,
            "title" => $post->title,
            "category" => $post->category,
            "comments" => $this->commentsFormatted($post->comments),

        ]);
    }
    private function commentsFormatted($comments) {
        $new_comments = [];
        foreach ($comments as $comment) {
            array_push($new_comments,[
               "id" => $comment->id,
               "body" => $comment->body,
               "user" => $comment->user,
               "added_at" => $comment->created_at->diffForHumans(),
            ]);
        }
        return $new_comments;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function categoryPosts($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $posts = Post::whereCategoryId($category->id)->with(["user","category"])->get();
        foreach ($posts as $post) {
            $post->setAttribute("added_at",$post->created_at->diffForHumans());
            $post->setAttribute("comments_count",$post->comments->count());
        }
        return response()->json($posts);
    }

    public function SearchPosts($query)
    {
        $posts = Post::where("title","like","%".$query."%")->with(["user","category"])->get();
        foreach ($posts as $post) {
            $post->setAttribute("added_at",$post->created_at->diffForHumans());
            $post->setAttribute("comments_count",$post->comments->count());
        }
        return response()->json($posts);
    }
}
