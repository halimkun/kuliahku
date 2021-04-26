<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2 - 0163</title>
</head>
<body style="padding: 30px">
    <form action="" method="post">
        <table>
            <tr>
            <!-- INPUT TIPE TEXT UNTUK USERNAME -->
                <td> <label for="username">Username : </label> </td>
                <td> <input type="text" name="username" id="username"> </td>
            </tr>
            <tr>
            <!-- INPUT TIPE PASSWORD UNTUK PASSWORD -->
                <td> <label for="pass">Password : </label>  </td>
                <td> <input type="text" name="password" id="pass"> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
    <br>
</body>
</html>


<?php
    $user = "halimkun";
    $pass = "halimkun";

    if ($_POST) {

        $username = $_POST['username'];
        $password = $_POST['password'];


        if ($username == $user && $password == $pass) { // username dan password sesuai
            echo "<p style='color:green;'>Username dan password sesuai</p>";

        } else if($username == $user && $password != $pass){ // password tidak sesuai
            echo "<p style='color:#ffc107;'>Password tidak sesuai</p>";

        } else if ($username != $user && $password == $pass) { // username tidak sesuai
            echo "<p style='color:red;'>Username tidak sesuai, -- User tidak ditemukan</p>";

        } else { // selain dari yang diatas / username dan password tidak sesuai
            echo "<p style='color:red;'>User tidak ditemukan</p>";

        }

    }