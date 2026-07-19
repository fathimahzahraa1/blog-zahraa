<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::where('status', 'published');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $articles = $query->latest()->paginate(6)->withQueryString();

        $categories = Category::all();

        return view('public.home', compact('articles', 'categories'));
    }

    public function show(Article $article)
    {
        if ($article->status !== 'published') {
        abort(404);
        }
        return view('public.show', compact('article'));
    }
}
