<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Using CI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <?php
    include_once('application/Components/navbar.php');
    
    ?>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center m-5">View Student Details</h3>
        </div>
        <div class="col-md-3 text-right">
            <a href="<?php echo base_url().'index.php/Student/create'; ?>" class="btn btn-info m-5"> 
            <i class="fa-solid fa-plus">

            ADD
            
</i>
            </a>
        </div>
        <div class="col-md-3 text-right">
        <form class="d-flex m-5" role="search" method="POST" action="<?php echo base_url().'index.php/Student/Search_Name'; ?>">
      

      <input class="form-control me-2" type="search" name="key" placeholder="Search By Name" aria-label="Search">


      
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
   <?php if(!empty($result)){
    foreach ($result as $stu) { ?>
        <tr>
        <td><?php echo $stu['id']; ?></td>
        <td><?php echo $stu['Name']; ?></td>
        <td><?php echo $stu['Address']; ?></td>
        <td><?php echo $stu['Contact']; ?></td>
        <td><?php echo $stu['Email']; ?></td>
        <td><?php echo $stu['Course']; ?></td>
        <td>
            <a href="<?php echo base_url().'index.php/Student/Edit/'.$stu['id']; ?>" class="btn btn-secondary">
            <i class="fa-solid fa-pen-to-square p-0"> 
                
            </i>
            </a>
        </td>
        <td>
            <a href="<?php echo base_url().'index.php/Student/Delete/'.$stu['id']; ?>" class="btn btn-danger">
            <i class="fa-sharp fa-solid fa-trash"></i>
            </a>
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