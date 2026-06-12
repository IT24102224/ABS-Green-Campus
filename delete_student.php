<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $sql = "DELETE FROM students WHERE nic = '$nic'";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;font-size:25px;'><I>Student deleted successfully!</p></I>";
    } else {
        echo "<p style='color: red;font-size:25px;'><I>Error deleting student: " . $conn->error . "</p></I>";
    }
}
?>

<!DOCTYPE html>

<head>
  
    <title>Delete Student</title>
</head>
<body style=" justify-content: center;font-family: Arial, sans-serif;text-align: center;">
            
    <div style="text-align: center;">
        <h2>Delete Student</h2><br>
        
        <form method="POST" action="delete_student.php" >
            <input type="text" name="nic" placeholder="Enter NIC to delete"style="padding: 9px; width: 200px; border-radius: 4px;border: 1px solid blue; 
            font-size: 20px;">
              
            <br><br><br>
            <button type="submit" style="padding: 10px 20px; background-color: LightSalmon;border-radius: 4px;font-size: 19px;cursor: pointer;">Delete Student  
            </button>
        </form>
    </div>

</body>
</html>
