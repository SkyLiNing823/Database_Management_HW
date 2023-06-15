<?php
require_once dirname(__FILE__) . "/db_check.php";

$query = [
    'username' => htmlspecialchars($_COOKIE['login']),
    'password' => htmlspecialchars($_GET["password"]),
    'oldpassword' => htmlspecialchars($_GET["oldpassword"])
];
$conn = db_check();
checkData($_COOKIE['login'], md5($query['oldpassword'], false), md5($query['password'], false), $conn);
function checkData($username, $oldpassword, $password, $conn)
{
    $sql = "SELECT id, username FROM user_account WHERE username = '$username' AND password = '$oldpassword'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        header("Location: /HW3/views/change_pw.php?error=true");
    } else {
        $sql = "UPDATE user_account SET password='$password' WHERE username='$username'";
        if (mysqli_query($conn, $sql)) {
            setcookie("login", "", time() - 1800, '/');
            header("Location: /HW3/views/login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
function alterData($username, $password, $conn)
{
    $sql = "UPDATE user_account SET password='$password' WHERE username='$username'";
    if (mysqli_query($conn, $sql)) {
        echo "資料新增成功";
        setcookie("login", "", time() - 1800, '/');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
