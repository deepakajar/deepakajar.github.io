<?php
$con =mysqli_connect("localhost", "root","","bizvoice");
if (!isset($_SESSION)) {
    session_start();
}
?>