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
      <li class="active"><a href="#">Cities</a></li>
      <li><a href="/weather/best">Best</a></li>
      <li><a href="/weather/update">Update</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>City Name</th>
        <th>Temperature</th>
        <th>Wind</th>
        <th>Humidity</th>
      </tr>
    </thead>
    <tbody>
         @foreach ($cities as $city)
            <tr>
                <td>{{($loop->index)+1}}</td>
                <td>{{$city['name']}}</td>
                <td>{{$city['temp']}}</td>
                <td>{{$city['wind']}}</td>
                <td>{{$city['humidity']}}</td>
            </tr>
        @endforeach
     
    </tbody>
  </table>
</div>

</body>
</html>
