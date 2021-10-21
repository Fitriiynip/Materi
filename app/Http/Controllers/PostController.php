<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function data()
    {
    //Route::get('/biodatas', function() {
        $show =  Post::all();
        return view('show_post', compact('show'));
}
}
