<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p><a href="/show"><button class="btn btn-danger d-inline-block float-right">User List</button></a>               
  <br><table  class="table" id="myTable">
    <thead>
      <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $value)
      <tr>
        <td>{{$value->email}}</td>
        <td>{{$value->password}}</td>
        <td><img src="{{$value->image}}" height="100px" width="100px"></td>
        <td><a href="/restore/{{$value->id}}" ><button class="btn btn-primary">Restore</button></a></td>
        <td><a href="/force-delete/{{$value->id}}"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script type="text/javascript">
  let table = new DataTable('#myTable');
</script>
</body>
</html>
