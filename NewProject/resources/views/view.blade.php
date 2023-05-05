<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <div class="row">
    <div class="col-md-9">
  <form  >
    <div class="col-md-10"><input type="search" name="search" class="form-control col-md-6" placeholder="Search by Name or Email"  >
    </div>
    <input type="submit"  class="btn btn-warning ">
  </form></div>
  <div class="col-md-3">
  <a href="{{$url3}}"><button class="btn btn-primary p-5">{{$button3}}</button></a> </div>
</div>           
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($select as $keys)
      <tr>
        <td>{{$keys->id}}</td>
        <td>{{$keys->email}}</td>
        <td>{{$keys->password}}</td>
        <td><a href="{{$url1}}/{{$keys->id}}"><button class="btn btn-success">{{$button1}}</button></a></td>
        <td><a href="{{$url2}}/{{$keys->id}}"><button class="btn btn-danger">{{$button2}}</button></a></td>
      </tr>
     @endforeach
    </tbody>

  </table>
  <div class="row">{{$select->links()}}</div>
</div>

</body>
</html>
