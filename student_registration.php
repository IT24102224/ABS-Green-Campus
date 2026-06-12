<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (nic, name, address, phone, course) VALUES ('$nic', '$name', '$address', '$phone', '$course')";
    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>

<head>
   
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            font-size: 25px;
        }
        
        table {
            margin:  auto;
            
            width: 50%;
        }
        td {
            padding: 10px;
            
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            
            border: 1px solid blue;
            border-radius: 4px;
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
    <h1>Register New Student</h1><br>
    <form method="POST" action="student_registration.php">
        <table>
            <tr>
                <td>NIC</td>
                <td><input type="text" name="nic" ></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" ></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" ></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><input type="text" name="course" ></td>
            </tr>
        </table><br>
        <button type="submit">Register Student</button>
    </form>
</body>
</html>
