<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show() {
    $human = "Coeg";
    $feel = "angry";
    $condition = "happy";
    $support = "Smk Assalaam";


        return view('example' , compact('human','feel','condition','support'));
    }
}
