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
    // here !
    // $article->articleImage = ;
    $article->save();

    }
}
