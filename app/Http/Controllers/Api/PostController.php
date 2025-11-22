<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use App\Notifications\NewPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->order == 'oldest') {
            return Post::oldest()->paginate(15);
        }

        return Post::latest()->paginate(15);
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());
        Notification::send(User::all(), new NewPost());
        return $post;
    }
}
