 <?php require 'dbcon.php';
    $id = $_GET['id'];
       $query = mysqli_query($con,"UPDATE student_info_db set status = 'accepted' where student_info = '$id'");
       if($query){
       header('location:notification.php');
       }
?>