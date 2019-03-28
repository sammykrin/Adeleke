 <?php
 	require 'dbcon.php';
 	$result=mysqli_query($con,"select * from student_reg_db where student_id=1");
	while ($row=mysqli_fetch_array($result)) 
	{
	$id= $row['student_id'];
	$matricno = $row['matric_no'];
    $mail = $row['email'];
	$come[$matricno] = array("Id"=>$id,"Matricno"=>$matricno,"Email"=>$mail);
	$select=mysqli_query($con,"select * from student_info_db where student_info=1");
	$data = mysqli_fetch_array($select,MYSQLI_ASSOC);
	array_push($come[$matricno],$data);		
	}
	if($data){
	$jdata = json_encode($come);}
	echo "[".$jdata."]";
	 
	
?>