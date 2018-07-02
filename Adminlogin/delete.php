<?php
require 'dbcon.php';
$id=$_GET['id'];
$delete = mysqli_query($con, "delete from student_info_db where student_info = '$id'");
if ($delete) {
	include 'come.php';
 }; 
 ?>