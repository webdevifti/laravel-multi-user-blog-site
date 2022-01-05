<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index']]);
    }

    public function index(){
        return view('profile.index')->with('posts', Post::where('user_id', auth()->user()->id)->get());
    }
}
