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
            <a href="#" class="navbar-brand">Crud Using CI</a>
        </div>

    </div>
    <div class="container">
        <h2 class="text-center m-4">Edit Student Details</h2>
        <div class="row">
       


        <form name="addstu"  method="POST" action="<?php echo base_url().'index.php/Student/Edit/'.$students['id']; ?>" 
         <div class="col-md-8">
            
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo($students['Name']);?>">
                <?php echo form_error('name'); ?>
                
            
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo($students['Address']);?>">
                <?php echo form_error('address'); ?>
                

            
            </div>
            <div class="form-group">
                <label for="Contact">Contact</label>
                <input type="text" name="contact" class="form-control" value="<?php echo($students['Contact']);?>">
                <?php echo form_error('contact'); ?>
                

            
            </div>


            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo($students['Email']);?>">
                <?php echo form_error('email'); ?>
                
            
            </div>

            <div class="form-group">
                <label for="Course">Course</label>
                <input type="text" name="course" class="form-control" value="<?php echo($students['Course']);?>">
                <?php echo form_error('course'); ?>
                

            
            </div>
            
            <div class="form-group m-2">
                <button class="btn btn-primary">Update</button>
                <a href="#" class="btn btn-dark">Back</a>
            
            </div>
            
           
         </div>
         </form>

        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>