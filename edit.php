<?php 
    include('conn.php'); 
    $id=$_GET['id']; 
    $query=mysqli_query($conn,"select * from `marksheet` where id='$id'"); 
    $row=mysqli_fetch_array($query); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Basic MySQLi Commands</title> 
</head> 
<body> 
    <h2>Edit</h2> 
    <form method="POST" action="update.php?id=<?php echo $id; ?>"> 
        <label>Roll Number:</label><input type="text" value="<?php echo $row['Roll_num']; ?>" name="Roll_num"><br><br> 
        <label>Name:</label><input type="text" value="<?php echo $row['Name']; ?>" name="Name"><br><br> 
        <label>Subject 1:</label><input type="text" value="<?php echo $row['Mark1']; ?>" name="Mark1"><br><br> 
        <label>Subject 2:</label><input type="text" value="<?php echo $row['Mark2']; ?>" name="Mark2"><br><br> 
        <label>Subject 3:</label><input type="text" value="<?php echo $row['Mark3']; ?>" name="Mark3"><br><br> 
        <input type="submit" name="submit"> 
        <a href="index.php">Back</a> 
    </form> 
</body> 
</html>