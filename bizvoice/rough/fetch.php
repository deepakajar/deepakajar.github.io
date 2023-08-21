<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="id">
       
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$sel = "select * from pdf where id='$id'";
$que = mysqli_query($con, $sel);
while ($row = mysqli_fetch_assoc($que)) {
    $pdf_name=$row['name'];
}
echo  $pdf_name;
?>
<iframe src="./assets/employee/<?php echo $pdf_name;?>.pdf" style="width: 100%;height:fit-content;"></iframe>
<?php
}
?>