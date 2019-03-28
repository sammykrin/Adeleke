 <?php
 	require 'dbcon.php';
 $val = $_POST['input'];
 // 	$result=mysqli_query($con,"select * from student_reg_db where student_id=1");
	// while ($row=mysqli_fetch_array($result)) 
	// {
	// $id= $row['student_id'];
	// $matricno = $row['matric_no'];
 //    $mail = $row['email'];
	// $come[$matricno] = array("Id"=>$id,"Matricno"=>$matricno,"Email"=>$mail);
	$select=mysqli_query($con,"select * from student_info_db where Name like '%".$val."%' or Matric_No  like '%".$val."%'");
	$data = mysqli_fetch_all($select,MYSQLI_ASSOC);
	if($data){
	$jdata = json_encode($data);
}
    echo $jdata;
	
	
?>