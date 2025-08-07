<?php 
    include('conn.php'); 
    $Roll_num=$_POST['Roll_num']; 
    $Name=$_POST['Name']; 
    $Mark1=$_POST['Mark1']; 
    $Mark2=$_POST['Mark2']; 
    $Mark3=$_POST['Mark3'];     
    mysqli_query($conn,"insert into `marksheet` (Roll_num,Name,Mark1,Mark2,Mark3) values 
('$Roll_num','$Name','$Mark1','$Mark2','$Mark3')"); 
    header('location:index.php'); 
?>