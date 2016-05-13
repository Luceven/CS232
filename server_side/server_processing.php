<?php  
require_once "login.php";
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_POST['login'])) {
    $loginType = $_POST['login'];

    if ($loginType == 'login') {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $query = "SELECT * FROM login WHERE username = '$username'";
        $result = $conn->query($query);
        if (!$result) {
            echo 'Wrong username or password';
        }
        else {
            echo "success";
        }

        // if ($_POST['username'] == 'admin' && $_POST['password'] == '123456') {
        //   echo 'success!';
        // }
    }
    elseif ($loginType == 'register') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "SELECT * FROM login WHERE username = $username";
        $result = $conn->query($query);
        if (!$result) {
            $password = sha1($password);
            $query = "INSERT INTO login (username, password, email)" .
                    "VALUES('$username', '$password', '$email')";
            $result = $conn->query($query);
            if (!$result) 
                die($conn->error);
            else
                echo "success";
        }
        else {
            echo 'fail';
        }
    }
    $conn->close();
}
?>