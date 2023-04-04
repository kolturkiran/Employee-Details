<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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
    
     <?php 
     foreach($emp_crud as $emp_crud){
        echo ' <tr>     
      <th scope="row">'.$emp_crud->id.'</th>
      <td>'.$emp_crud->name.'</td>
      <td>'.$emp_crud->email.'</td>
      <td>'.$emp_crud->mobile.'</td>      
      <td>'.$emp_crud->gender.'</td>
      <td><button class="btn btn-primary"><a href="emp_detail/'.$emp_crud->id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete/'.$emp_crud->id.'" class="text-light">Delete</a></button></td>
    </tr>
    <tr>';
       }
    ?>

  
  </tbody>
</table>
  </div>
<script type="text/javascript">
    $(document).ready(function() {
      const APP_URL ='http://127.0.0.1:8000';
        function AddEmployee(){
           $.ajax({
               url: APP_URL+"/add_emp_detail",
               method: 'GET',
               dataType: 'json',
               data:{id:2,rad_val:radio},
               success: function(data)
               {

               }
             });
        }
    });
</script>
</body>
</html>