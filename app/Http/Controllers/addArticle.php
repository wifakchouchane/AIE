<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
class addArticle extends Controller
{
    public function add(Request $req){
    $article  = new articles();
    $article->Categ = $req->get('Categories');
    $article->Title = $req->get('Title');
    $article->Description = $req->get('Description');
    $image = $req->uploadPhoto;
    $imagename = time().'.'.$image->getClientoriginalExtension();
    $req->uploadPhoto->move('dossierarticle',$imagename);
    $article->articleImage = $imagename;

    $article->save();
    return 'done_with_success';

    }
    public function index()
    {
        $article = articles::all();
        return view('article.article',['articles'=>$article]);

    }
    public function sendEmail(){

    }
}
