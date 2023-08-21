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
    <style>
         th, td {
  border-style: outset;
  padding: 10px;
}
    </style>
</head>

<body style="margin-top:10%;">
    <?php

    $loginsql = "SELECT * FROM `job` where `job_id`='" . $_GET['id'] . "'";
    $result = mysqli_query($con, $loginsql);
    while ($row = mysqli_fetch_assoc($result)) {
       $name1= $row['name'];
       $pdf_name=$name1."-".$_GET['id'];
    ?>
        <table style="margin-left:30%;padding:10%;">
            <tr>
                <th  colspan="2" ><?php echo $row['name']."-".$_GET['id'] ?> Profile</th>
            </tr>
            <tr>
                <th>Name:-</th>
                <th><?php echo $row['name']; ?></th>
            </tr>
            <tr>
                <th>Qualification:-</th>
                <th><?php echo $row['qualification']; ?></th>
            </tr>
            <tr>
                <th>Job Role:-</th>
                <th><?php echo $row['apply_for']; ?></th>
            </tr>
            <tr>
                <th>Preferd Location:-</th>
                <th><?php echo $row['prefer_location']; ?></th>
            </tr>
            <tr>
                <th>State:-</th>
                <th><?php echo $row['state']; ?></th>
            </tr>
            <tr>
                <th>District:-</th>
                <th><?php echo $row['district']; ?></th>
            </tr>
            <tr>
                <th>Ph.No:-</th>
                <th><?php echo $row['contact']; ?></th>
            </tr>
            <tr>
                <th>E-mail:-</th>
                <th><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></th>
            </tr>
            <tr>
                <th>Resume</th>
                <th><a href="./assets/resume/<?php echo $pdf_name;?>.pdf" target="_blank" ><input id="edit" type="submit" name="edit" value="VIEW" class="btn btn-success" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="resumedelete.php?id=<?php echo $row['job_id'] ?>"><input id="edit" type="submit" name="edit" value="DELETE" class="btn btn-danger" /></a></th>
                
            </tr>
        </table>
        
        <?php
       

        }
       
            ?>

</body>

</html>