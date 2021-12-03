<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data ">
    @csrf
  <div class="mb-3">
<div>
  <label for="exampleInputcateg" class="form-label">Categories</label>
    <select name="Categories" id="">
        <option value="1">Sports</option>
        <option value="2">Politique</option>
        <option value="3">Santé</option>
    </select>
    <div>
    <label for="exampleInputtitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="Title" aria-describedby="Title"name="Title">
  </div>
  <div>
  <label for="Description" class="form-label">Decription</label>
  <textarea name="Description" id="Description" cols="30" rows="10">

  </textarea>
      </div>
      <div>
  <label for="uploadPhoto" class="form-label">upload Photo</label>
    <input type="file" class="form-control" id="uploadPhoto" aria-describedby="uploadPhoto"name="uploadPhoto">
  </div>
  <div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Add Topic</button>
  <input type="reset"class="btc btn-primary" value="Cancel">
</form>
</body>
</html>
