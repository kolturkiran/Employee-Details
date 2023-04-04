<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Details</title>
  <script src="{!!url('/js/jquery.min.js')!!}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
  <div class="container my-5">
    <button id='add_emp' class="btn btn-primary"><a href="add_emp_detail" class="text-light">Add Employee</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>     
      <th scope="col">Gender</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    
      
     @foreach($emp_cruds as $emp_crud)
        <tr>     
      <th scope="row">{{$emp_crud->id}}</th>
      <td>{{$emp_crud->name}}</td>
      <td>{{$emp_crud->email}}</td>
      <td>{{$emp_crud->mobile}}</td>      
      <td>{{$emp_crud->gender}}</td>
      <td><button class="btn btn-primary"><a href="emp_detail/{{$emp_crud->id}}" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete/{{$emp_crud->id}}" class="text-light">Delete</a></button></td>
    </tr>
    <tr>
      @endforeach

  
  </tbody>  
</table>
{{ $emp_cruds->links()}}

  </div>

<script type="text/javascript">
    $(document).ready(function() {
      
    });
</script>
</body>
</html>