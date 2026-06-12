<!DOCTYPE html>
<html >
<head>
    
    
    <title>Admin Login</title>
</head>
<body style="display: flex; flex-direction: column; align-items: center; justify-content: center; height:100vh">

    <div style="background-color: LightBlue; padding: 50px; border-radius: 5px; width: 500px; text-align: center;">
        <h1>Admin Login</h1>
        <form action="login_process.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <label  style="text-align: left; font-size: 25px;">Username:</label>
            <input type="text" id="username" name="username"  style="padding: 10px; width: 50%;">

            <label  style="text-align: left; font-size: 25px;">Password:</label>
            <input type="password" id="password" name="password"  style="padding: 10px; width: 50%;">

            <button type="submit" style="padding: 10px; font-size: 25px; background-color:blue; color: white; cursor: pointer; margin-top: 20px;">Login</button>
        </form>
    </div>

</body>
</html>
