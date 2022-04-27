<?php
include "db.php";
echo'<a href="index.php"> Go back</a> <br><br>';

$id = $_GET['id'];

$result = mysqli_query($con,"delete from topics where id = '$id'"); // delete query

echo '<script>alert("Topic u fshi")</script>';


?>