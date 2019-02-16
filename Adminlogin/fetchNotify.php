 <?php require 'dbcon.php';
    $empty = true;
       $query = mysqli_query($con,"SELECT * from student_info_db where status = 'pending'");
       $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        if(!empty($data)){
            $empty = false;
            $jdata = json_encode($data);
            echo $jdata;
        }
?>