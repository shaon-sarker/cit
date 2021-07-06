<?php 

require '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `testimonials` WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
header('location:/cit/testimonial/view_testimonial.php');

?>