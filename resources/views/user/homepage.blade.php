<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>

        <li><a href="">Login</a></li>
        <li><a href="">Register</a></li>
        <li><a href="">Menu
            <div class='humb'>
                <div></div>
                <div></div>
            </div>
        </a></li>

              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="heroPage">
    <nav>
        <div class="logo">

        </div>
        <div>
            <h1>All the news :</h1>
            @foreach($articles as $article)
         <h3>{{ $articles->Title }}</h3>
         <p>{{ $articles->Description }}</p>
         <p>{{ $articles->articleImage }}</p>

      @endforeach
        </div>
    <ul>
    </ul>
    </nav>


    </div>
</body>
</html>
