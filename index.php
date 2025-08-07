 <!DOCTYPE html> 
<html> 
<head> 
<title>Basic MySQLi Commands</title> 
</head> 
<body> 
    <div> 
        <center> 
        <form method="POST" action="add.php"> 
            <h3>STUDENTS MARKSHEET</h3><br> 
            <label>Roll Number:</label><input type="text" name="Roll_num" Required><br><br> 
            <label>Name:</label><input type="text" name="Name" Required><br><br> 
            <label>Subject 1:</label><input type="text" name="Mark1" Required><br><br> 
            <label>Subject 2:</label><input type="text" name="Mark2" Required><br><br> 
            <label>Subject 3:</label><input type="text" name="Mark3" Required><br><br> 
            <input type="submit" name="add"> 
        </form> 
</center> 
    </div> 
    <br> 
    <div> 
        <center><table border="1"> 
            <thead> 
                <th>Roll Number</th> 
                <th>Name</th> 
                <th>Subject 1</th> 
                <th>Subject 2</th> 
                <th>Subject 3</th> 
                <th>Operations</th> 
                <th></th> 
            </thead> 
            <tbody> 
                <?php 
                    include('conn.php'); 
                    $query=mysqli_query($conn,"select * from `marksheet`"); 
                    while($row=mysqli_fetch_array($query)){ 
                        ?> 
                        <tr> 
                            <td><?php echo $row['Roll_num']; ?></td> 
                            <td><?php echo $row['Name']; ?></td> 
                            <td><?php echo $row['Mark1']; ?></td> 
                            <td><?php echo $row['Mark2']; ?></td> 
                            <td><?php echo $row['Mark3']; ?></td> 
                            <td> 
                                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
                                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> 
                            </td> 
                        </tr> 
                        <?php 
                    } 
                ?> 
            </tbody> 
        </table> 
                </center> 
    </div> 
</body> 
</html> 