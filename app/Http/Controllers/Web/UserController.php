<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return view('users', ['users' => User::all()]);
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('users')->with('success', 'Пользователь создан');
    }
}
