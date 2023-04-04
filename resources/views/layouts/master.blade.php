<?php
  include 'connect.php';   
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud operation</title>
  <script src="{!!url('/js/jquery.min.js')!!}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    <button class="btn btn-primary"><a href="user.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">State</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    
  
  </tbody>
</table>
  </div>

</body>
</html>