<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" enctype="multipart/form-data" method="post">
        <input type="text" name="name">
        <input type="file" name="pdf_file">
        <input type="submit" name="submit" value="submit">
        <a href="fetch.php">link</a>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $sql = "SELECT * FROM pdf";
    $res = mysqli_query($con,$sql);
    $row_count = mysqli_num_rows($res);
    $id = $row_count+1;
    $pdf_name = $_POST['name'];
    $pdf_file = $_FILES['pdf_file']['name'];
    $tmp = $_FILES['pdf_file']['tmp_name'];
    $sqli = "INSERT INTO pdf(`id`,`name`,`pdf_name`) VALUES('$id','$pdf_name','$pdf_file')";
    $sqlicon = mysqli_query($con, $sqli);
    $sel = "select * from pdf where id='$id'";
    $que = mysqli_query($con, $sel);
    if ($sqlicon == true) {
        $folder = "assets\\employee\\" . $pdf_file;
        move_uploaded_file($tmp, $folder);
        while ($row = mysqli_fetch_assoc($que)) {
            if (rename("assets/employee/" . $row['pdf_name'], "assets/employee/" . $row['name'] . ".pdf")) {
                echo "Succesfully name changed";
                echo $_FILES['pdf_file']['size'];
            } else {
                echo "not changed";
            }
        }
    } else {
        echo "<script>alert('no');</script>";
    }
}
?>