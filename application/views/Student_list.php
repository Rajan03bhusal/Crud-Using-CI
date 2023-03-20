<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Using CI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD Using CI</a>
        </div>

    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center m-5">View Student Details</h3>
        </div>
        <div class="col-md-3 text-right">
            <a href="<?php echo base_url().'index.php/Student/create'; ?>" class="btn btn-primary m-5">ADD</a>
        </div>
        <div class="col-md-3 text-right">
        <form class="d-flex m-5" role="search">
      <input class="form-control me-2" type="search" name="name" placeholder="Search By Name" aria-label="Search">
    </form>
        </div>
        </div>
      
        <div class="row">
            <hr>
            <div class="col-md-12">

        <table class="table table-striped table-hover">
       
     
    <tr>
      <th scope="col">Id</th>
       <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Course</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
   <?php if(!empty($students)){
    foreach ($students as $stu) { ?>
        <tr>
        <td><?php echo $stu['id']; ?></td>
        <td><?php echo $stu['Name']; ?></td>
        <td><?php echo $stu['Address']; ?></td>
        <td><?php echo $stu['Contact']; ?></td>
        <td><?php echo $stu['Email']; ?></td>
        <td><?php echo $stu['Course']; ?></td>
        <td>
            <a href="<?php echo base_url().'index.php/Student/Edit/'.$stu['id']; ?>" class="btn btn-secondary">Edit</a>
        </td>
        <td>
            <a href="<?php echo base_url().'index.php/Student/Delete/'.$stu['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr> 
    <?php }}  else {?>
        <tr>
            <td> Records Not Found</td>
        </tr>
        <?php } ?>

  
  
</table>

</div>
    </div>

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>