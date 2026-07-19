<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        $validated['article_id'] = $article->id;

        Comment::create($validated);

        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
