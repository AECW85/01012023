<!doctype html>

<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<title>Create Data</title>

</head>

<body>

<h2>Create Data Game</h2>

<form  action="/game"  method="POST" >
    @csrf
      <div class="form-group">
        <label >Name</label> <br> <br>
        <input type="text" class="form-control"  name="name">
      </div>
      <div class="form-group">
        <label >Game Play</label> <br> <br>
        <textarea name="gameplay"  cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <label >Developer</label> <br> <br>
        <input type="text" class="form-control"  name="developer">
      </div>
      <div class="form-group">
        <label >Year</label> <br> <br>
        <input type="number" class="form-control"  name="year">
      </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>
