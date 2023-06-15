<?php
require_once "../index_nav.php";
require_once dirname(__FILE__) . "/include/head.php";
?>

<div>
    <form id="form" action="/HW3/models/change_pw_check.php">
        <div>
            <h1>Change Password</h1>
            <h3 class="label-txt">請輸入舊密碼</h3>
            <input id="passwordOld" type="password" name="oldpassword" class="input" required="">
            <div class="line-box">
                <div class="line"></div>
            </div>
            </label>
        </div>
        <div>
            <h3 class="label-txt">請輸入新密碼</h3>
            <input id="passwordInput" type="password" name="password" class="input" required="">
            <div class="line-box">
                <div class="line"></div>
            </div>
            </label>
        </div>
        <div>
            <label>
                <h3 class="label-txt">請再輸入一次新密碼</h3>
                <input id="passwordConfirm" type="password" class="input" autocomplete="Off" required="">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label>
        </div>
        <button id="submitBtn" type="submit">提交</button>
    </form>
</div>

<script>
    $("#form").submit(function(e) {
        if ($("#passwordInput").val() !== $("#passwordConfirm").val()) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: '請再確認一次密碼',
            });
            e.preventDefault();
            return;
        }
    });

    if (getUrlVars()['error']) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: '舊密碼輸入錯誤'
        });
    }

    function getUrlVars() {
        var vars = [],
            hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
</script>



<style>
    body {
        background-image: url(../resources/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    #form {
        background-color: rgb(251, 230, 185);
        max-width: 420px;
        padding: 30px 38px 66px;
        margin: 0 auto;
        margin-top: 50px;
        text-align: center;
    }

    button {
        display: block;
        margin: auto;
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        top: 30px;
    }

    .input {
        font-size: 20px;
    }

    #submitBtn {
        font-weight: bold;
        border-color: blue;
        background-color: orange;
        width: 50%
    }
</style>