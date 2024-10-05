<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    public function mesin() {
      $posts = Post::all();
      return view('mesin', compact('posts'));
    }

    public function tambah(){
        return view('tambahsparepart');
    }
}
