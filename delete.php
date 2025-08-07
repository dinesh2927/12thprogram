<?php 
    $id=$_GET['id']; 
    include('conn.php'); 
    mysqli_query($conn,"delete from `marksheet` where id='$id'"); 
    header('location:index.php'); 
?>