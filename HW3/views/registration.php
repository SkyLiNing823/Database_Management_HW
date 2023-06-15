<?php
require_once "../index_nav.php";
require_once dirname(__FILE__) . "/include/head.php";
?>

<div>
  <form id="form" action="/HW3/models/registration_check.php">
    <div>
      <h1>Registration</h1>
      <label>
        <h3 class="label-txt">請輸入EMAIL</h3>
        <input id="email" type="email" class="input" name="email" required="">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <h3 class="label-txt">請輸入使用者名稱</h3>
        <input id="username" type="text" class="input" name="username" required="">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <h3 class="label-txt">請輸入密碼</h3>
        <input id="passwordInput" type="password" name="password" class="input" required="">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <h3 class="label-txt">請再輸入一次密碼</h3>
        <input id="passwordConfirm" type="password" class="input" autocomplete="Off" required="">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <button id="submitBtn" type="submit">註冊</button>
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
    } else {
      var params = {
        email: $('#email').val(),
        username: $('#username').val(),
        password: md5($('#passwordInput').val()),
      };
      var query = jQuery.param(params);
      var form = $(this);
      var url = form.attr('action');
      $.ajax({
        type: "POST",
        url: url + '?' + query,
        success: function(data) {
          if (data.includes('已註冊過')) {
            Swal.fire({
              icon: 'warning',
              title: 'Oops...',
              html: data,
            });
          }
          if (data.includes('資料新增成功')) {
            Swal.fire({
              icon: 'success',
              title: 'OK',
              text: '資料新增成功',
              allowOutsideClick: false,
              showCancelButton: false,
            }).then((result) => {
              if (result.value) {
                window.location = '/HW3/views/login.php'
              }
            })
          }
        }
      });
      e.preventDefault();
    }
  });
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