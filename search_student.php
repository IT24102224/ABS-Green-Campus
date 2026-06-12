<?php
session_start();
include 'db.php';

$student = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $sql = "SELECT * FROM students WHERE nic = '$nic'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        echo "Student not found!";
    }
}
?>

<!DOCTYPE html>

<head>
    
    <title>Search Student</title>
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
    <h2>Search Student by NIC</h2><br>
    <form method="POST" action="search_student.php">
        <input type="text" name="nic" placeholder="Enter NIC" ><br><br><br>
        <button type="submit">Search Student</button>
    </form>

    <?php if ($student): ?>
        <h3>Student Details</h3>
        <p>Name: <?php echo $student['name']; ?></p>
        <p>Address: <?php echo $student['address']; ?></p>
        <p>Phone: <?php echo $student['phone']; ?></p>
        <p>Course: <?php echo $student['course']; ?></p>
    <?php endif; ?>
</body>
</html>
