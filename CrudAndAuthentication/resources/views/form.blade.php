<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>{{$title}}</h2>
  
  <form action="{{$url}}" method="Post" enctype="multipart/form-data">
    <div class="form-group">
      @csrf
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$data== '' ? '' : $data->email}}"><span class="text-danger">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"><span class="text-danger">@error('pwd'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Confirm password" name="cpwd"><span class="text-danger">@error('cpwd'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
      <input type="file" name="image">
    </div>
    <!-- <x-Input type='text' name="text" label='Enter your Name'/> -->
    <!-- <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> -->
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
