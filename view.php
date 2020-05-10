<?php

// get connection
require_once("connection.php");
$query = "select * from records";
$result = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Registered Customers</title>
   
</head>
<body class="bg-dark">
    
<a href="index.php">
    <button class="btn btn-primary btn-lg btn-block">Home</button>
    </a>

<div class="container">
  <div class="row">
    <div class="col m-auto">
      <div class="card mt-5">
       <table class="table table-bordered">
       <tr>
       <td> User ID </td>
       <td> User Name </td>
       <td> User Email </td>
       <td> User Age </td>
       <td> Edit </td>
       <td> Delete </td>

       </tr>

<?php
while($row=mysqli_fetch_assoc($result)) {
    $UserID = $row['User_ID'];
    $UserName = $row['User_Name'];
    $UserEmail = $row['User_Email'];
    $UserAge = $row['User_Age'];
?>

    <tr>
        <td>  <?php echo $UserID ?> </td>
        <td>  <?php echo $UserName ?> </td>
        <td>  <?php echo $UserEmail ?> </td>
        <td>  <?php echo $UserAge ?> </td>
        <td>
        <a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a>
        </td>
        <td>
        <a href="delete.php?Del=<?php echo $UserID ?>">Delete</a>
        </td>

    </tr>


    <?php 

}

?>

       </table>
      </div>
    </div>
  </div>
</div>


<!-- <a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a> -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>