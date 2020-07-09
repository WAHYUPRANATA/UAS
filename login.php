<?php
//cek tombol submit
if(isset($_POST["submit"])){
//cek username dan password
if($_POST["username"] == "admin" && $_POST["password"] == "123"){
//jika benar,redirect ke halaman admin
header("Location: index.php");
exit;
}else
//pesan error
$eror = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if (isset($eror)):?>
    <p style="color:red;font-style:italic">salah satu gaes</p>
    <?php endif;?>
 <table>
 <form action="" method="POST">
 <tr> 
        <td><label for="username">Username:</label></td>
        <td><input type="text" name="username" id="username">
        </td>
        </tr>
        
        <tr>
        <td>
            <label for="password">Password:</label>
            </td><td>
            <input type="password" name="password" id="password">
        <td>
        <tr>
        <td>
            <button type="submit" name="submit">Login</button>
        </td> 
        </tr> 
    </tr>
    </form>
 </table>
    
</body>
</html>