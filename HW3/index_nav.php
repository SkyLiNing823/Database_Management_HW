<nav>
    <?php
    if (isset($_GET['logout'])) {
        setcookie("login", "", time() - 1800, '/');
        logOut();
    }

    function logOut()
    {
        $_SESSION['login'] = false;
        unset($_SESSION['id']);
        unset($_SESSION['username']);
    }
    if (isset($_COOKIE['login']) && isset($_GET['logout']) == false) {
        echo "Hello  <b>" . $_COOKIE['login'] . "</b>&nbsp;&nbsp;&nbsp;";
        echo '<input type="button" value="登出" onclick="location.href=\'/HW3/index.php?logout=true\'">';
        echo '<input type="button" value="修改密碼" onclick="location.href=\'/HW3/views/change_pw.php\'"">';
    } else {
        echo '<input type="button" value="登入" onclick="location.href=\'/HW3/views/login.php\'"">';
        echo '<input type="button" value="註冊" onclick="location.href=\'/HW3/views/registration.php\'">';
    } ?>
</nav>

<style>
    nav {
        margin: auto;
        width: 90%;
        margin-bottom: 10px;
        background-color: rgba(250, 250, 250, 0.5);
        text-align: right;
    }

    nav input {
        display: inline-block;
        padding: 10px;
    }
</style>