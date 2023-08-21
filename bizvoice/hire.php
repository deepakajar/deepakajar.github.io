<?php 
include('conn.php');
include 'h.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> 
</head>
<body style="margin-top: 10%;">
<div class="container">


    <?php
        $loginsql="SELECT * FROM `job`";
        $result=mysqli_query($con,$loginsql);
        ?>
             <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Job Role</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
               
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['job_id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['apply_for']; ?></td>
      <td><a href="hireshow.php?id=<?php echo $row['job_id'] ?>"><input id="edit" type="submit" name="edit" value="VIEW" class="btn btn-success" /></a></td>
    </tr>
    
 
            <?php
        }
    ?>
     </tbody>
</table>
</div>
</body>
</html>