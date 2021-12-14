@extends('layouts.master')
@section('content')


   <div class="row my-4">
       <div class="col-md-3">
        <div class="card bg-light border border-primary">
            <h3 class="card-hearder">
                Recherche
            </h3>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="search">Recherche</label>
                        <input type="text" name="search" id="" class="form-control" placeholder="Recherche">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Valide</button>
                    </div>
                </form>
            </div>
        </div>
       </div>
<div class="col-md-6">
    <div class="card border berder-primary">
        <h3 class="card-header">Toutes les articles</h3>
        <div class="card-body">
             @foreach($articles as $article)
             <div class="media">
                <div class="media-left">
                    <img src="dossierarticle/{{$article->articleImage}}" width="100" heigth="100" class="img-fluid rounded-circle"alt="">
                </div>
                <div class="media-body">
                    <h3 class="text-info">
                        <a href="#" class="btn btn-link">{{$article->Title}}</a>
                    </h3>
                    <p class="d-flex flex-row justify-content-start">
                        <span class="badge bg-danger mx-3"> Description: {{$article->Description}}</span>
                        <span class="badge bg-primary"> catégorie: {{$article->categ}} </span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
    </div>
@endsection
