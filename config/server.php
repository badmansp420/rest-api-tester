<?php
$con = mysqli_connect('localhost', 'root', '', 'ocas');
if ($con->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected Successfully";

?>