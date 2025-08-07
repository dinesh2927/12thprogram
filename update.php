<?php 
    include('conn.php'); 
    $id=$_GET['id']; 
    $Roll_num=$_POST['Roll_num']; 
    $Name=$_POST['Name']; 
    $Mark1=$_POST['Mark1']; 
    $Mark2=$_POST['Mark2']; 
    $Mark3=$_POST['Mark3']; 
    mysqli_query($conn,"update marksheet set Roll_num='$Roll_num', 
Name='$Name',Mark1='$Mark1',Mark2='$Mark2',Mark3='$Mark3' where id='$id'"); 
    header('location:index.php'); 
?> 