<?php
session_start();
include 'db.php';

$student = null;

if (isset($_POST['search'])) {
    $nic = $_POST['nic'];
    $sql = "SELECT * FROM students WHERE nic = '$nic'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        echo "<p style='color: red;font-size:25px;'><I>Student not available!</p></I>";
    }
}

if (isset($_POST['update'])) {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', address='$address', phone='$phone', course='$course' WHERE nic='$nic'";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green; font-size:25px;'><I>Student details updated successfully!</p></I>";
    }
     else {
        echo "<p style='color: red; font-size:25px;'><I>Error updating record: " . $conn->error . "</p></I>";
    }
}
?>

<!DOCTYPE html>

<head>
   
    <title>Update Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
       
        input[type="text"] {
            padding: 9px;
            width: 200px;
            border-radius: 4px;
            border: 1px solid blue;
            font-size: 20px;
        }
        button {
            padding: 10px 20px;
            background-color: LightSalmon;
            border-radius: 4px;
            font-size: 19px;
            cursor: pointer;
        }
       
    </style>
</head>
<body>
    <h2>Update Student Details</h2><br>

    <?php if (!$student): ?>
        
        <form method="POST" action="update_student.php">
            <input type="text" name="nic" placeholder="Enter NIC" ><br><br>
            <button type="submit" name="search">Search Student</button>
        </form>
    <?php else: ?>
      
        <form method="POST" action="update_student.php">
            <input type="hidden" name="nic" value="<?php echo $student['nic']; ?>">
            <input type="text" name="name" value="<?php echo $student['name']; ?>" ><br><br>
            <input type="text" name="address" value="<?php echo $student['address']; ?>" ><br><br>
            <input type="text" name="phone" value="<?php echo $student['phone']; ?>"><br><br>
            <input type="text" name="course" value="<?php echo $student['course']; ?>" ><br><br>
            <button type="submit" name="update">Update Student</button>
        </form>
    <?php endif; ?>
</body>
</html>