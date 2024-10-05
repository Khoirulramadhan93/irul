<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post(Request $request) {
        $request->validate([
            'title' => ['required'],
            'deskripsi' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        Post::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath
        ]);
        return redirect()->route('mesin');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }


    public function delete($id)
    {
        $data = Post::findOrFail($id);
        $data->delete();
        return redirect()->route('mesin');
    }
}
