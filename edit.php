<?php

// get connection
require_once("connection.php");
$userID = $_GET['GetID'];
$query = "select * from records where User_ID='".$userID."'";
$result = mysqli_query($con, $query);

while ($row=mysqli_fetch_assoc($result))
    {
    $UserID = $row['User_ID'];
    $UserName = $row['User_Name'];
    $UserEmail = $row['User_Email'];
    $UserAge = $row['User_Age'];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Customer Register</title>
</head>
<body class="bg-dark">
    
<!-- <div class="container text-center">
<h1>Customer Register</h1>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card mt-5">
      <div class="card-title">
      <h3 class="bg-success text-white text-center py-3">Update Registration form</h3>

      <div class="card-body">
      <form action="update.php?ID=<?php echo $UserID ?>" method="post">
      
      <input type="text" name="name" class="form-control mb-2" placeholder="name" value="<?php echo $UserName ?>">
      <input type="email" name="email" class="form-control mb-2" placeholder="User email" value="<?php echo $UserEmail ?>">
      <input type="text" name="age" class="form-control mb-2" placeholder="User age" value="<?php echo $UserAge ?>">

<button name="update" class="btn btn-primary">Update</button>
      </form>
      </div>
      </div>
      </div>
    </div>
    
     
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>