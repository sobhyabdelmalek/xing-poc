<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cites Weather List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">XING</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">Cities</a></li>
      <li class="active"><a href="#">Best</a></li>
      <li><a href="/weather/update">Update</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <p style="font-size: 26px" class="text-center"><mark>{{$city}}</mark> has the best Weather </p>
</div>

</body>
</html>
