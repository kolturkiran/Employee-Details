<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
       <form method="post" action="/update/{{$employeedetail->id}}" >
        @csrf
  <div class="mb-3 my-5">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name" placeholder="Enter your name" autocomplete="off" value="<?php echo $employeedetail->name; ?>">  
  </div>
  <div class="mb-3 my-5">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" id="" name="email" placeholder="Enter your email" autocomplete="off" value="<?php echo $employeedetail->email; ?>">
  </div>
  <div class="mb-3 my-5">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" id="" name="mobile" placeholder="Enter your mobile no." autocomplete="off" value="<?php echo $employeedetail->mobile; ?>">
  </div>

  <div class="mb-3 my-5">
    <label  class="form-label">Gender</label>
    <div class="dropdown">    
    <select name="gender">
      <option value="selected">--Select your Sex--</option>
      <option <?php if($employeedetail->gender=='Female')echo 'selected'; ?>>Female</option>
      <option <?php if($employeedetail->gender=='Male') echo 'selected'; ?>>Male</option>      
    </select>
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">update</button>
</form>
    </div>
   
    
  </body>
</html>
