<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use \Auth;
use App\Image;
use App\Article;
use App\Comment;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
        $this->middleware('writer', ['only' => ['create','edit']]);
    }
    public function index()
    {
    	$articles = Article::latest()->get();
        return view('articles.index',compact('articles'));
    }
    public function show($article)
    {
        return view('articles.show',compact('article'));
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(ArticleRequest $request)
    {
        // dd($request->file('image'));
        $article = Auth::user()->articles()->create($request->all());
        Image::upload($request,$article);
        return redirect('articles/admin/list');
    }
    public function edit($article)
    {
        if(Auth::user()->id != $article->user_id)
            return redirect('articles/admin/list');
        return view('articles.edit',compact('article'));        
    }
    public function update($article,ArticleRequest $request)
    {
        $article->update($request->all());
        Image::upload($request,$article);
        return redirect('articles/admin/list');
    }
    public function comment($article,Request $request)
    {
        $this->validate($request,['body'=>'required']);
        $comment = $article->comments()->create($request->all());
        Auth::user()->comments()->save($comment);
        return redirect(url('articles',[$article->id]));
    }
    public function adminList()
    {
        if(Auth::user()->isAdmin())
            $articles = Article::latest()->get();
        else
            $articles = Auth::user()->articles;
        return view('admin.articleList',compact('articles'));
    }
    public function destroy($article)
    {
        $article->kill();
        return redirect('articles/admin/list');
    }
}
