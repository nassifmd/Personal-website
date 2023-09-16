<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClickCount;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ClickCountController extends Controller
{

    public function index()
    {   
        // Retrieve all posts from the database
        $posts = Post::all(); 
        
        return view('article_detail', ['posts' => $posts]);

    }

    public function trackClick($article_id)
    {
        // Increment the click count
        DB::table('articles')->where('id', $article_id)->increment('clicks');
    
        // Redirect to the article's URL
        $article = DB::table('articles')->where('id', $article_id)->first();
    
        // Condition 
        if ($article) {
            return redirect()->to($article->url);
        } else {
            abort(404);
        }
    }    

    public function showArticles()
    {
        //fetch articles
        $articles = DB::table('articles')
            ->select('articles.id', 'articles.date', 'articles.title', 'articles.description', 'articles.url', 'articles.clicks')
            ->orderBy('articles.date', 'desc')
            ->get();

        return view('rack', ['articles' => $articles]);
    }

    public function showArticleDetail($article_id, $url)
    {
        //fetch article detail
        $article = DB::table('articles')
            ->select('articles.id', 'articles.date', 'articles.title', 'articles.description', 'articles.url', 'articles.clicks')
            ->where('articles.id', $article_id)
            ->where('articles.url', $url)
            ->first();

        if (!$article) {
            abort(404);
        }

        return view('article_detail', compact('article'));
    }
}



