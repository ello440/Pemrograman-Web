<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <a href="index.php">Go To Home</a>
    <br/><br/>

    <form action="register_process.php" method="post">
        <table width="25%' border="0">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <select name="gender" id="gender">
                    <option value="pria">LAKI</option>
                    <option value="wanita">Cewek</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Register"></td>
        </tr>
        </table>
    </form>
    <br><br>
    SUDAH MEMILIKI AKUN? <a href="login-page.php">Login</a>
</body>
</html>
                

