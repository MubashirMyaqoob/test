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
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
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
      @foreach($data as $keys)
      <tr>
        <td>{{$keys->id}}</td>
        <td>{{$keys->email}}</td>
        <td>{{$keys->password}}</td>
        <td><a href="{{url('/')}}/update{{$keys->id}}"><button class="btn btn-primary">Update</button></a></td>
        <td><a href="{{url('/')}}/delete/{{$keys->id}}"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
