<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Emplyee</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container my-5 mx-5" >
       <form method="post" action="/add_emp_detail" enctype="multipart/form-data">
        @csrf
  <div class="mb-3 my-5">
    <label  class="form-label">User Name</label>
    <input type="text" class="form-control" id="" name="name" placeholder="Enter User Name" autocomplete="off" style="width: 30%;">  
  </div>
  <div class="mb-3 my-5">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" id="" name="email" placeholder="Enter your email" autocomplete="off" style="width: 30%;">
  </div>
  <div class="mb-3 my-5">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" id="" name="mobile" placeholder="Enter your mobile no." autocomplete="off" style="width: 30%;">
  </div>  
  <div class="mb-3 my-5">
    <label  class="form-label">Gender</label>
    <div class="dropdown">    
    <select name="gender" style="width: 20%;">
      <option value="selected">--Select your Sex--</option>
      <option>Female</option>
      <option>Male</option>      
    </select>
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
   
    
  </body>
</html>
