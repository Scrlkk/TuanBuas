<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan daftar postingan
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Menampilkan form untuk membuat postingan baru
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan postingan baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'status' => 'required|in:draft,published',
            'allow_comments' => 'required|boolean',
        ]);

        // Simpan data
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Menampilkan detail postingan
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Menampilkan form untuk mengedit postingan
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Mengupdate postingan
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'status' => 'required|in:draft,published',
            'allow_comments' => 'required|boolean',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // Menghapus postingan
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
