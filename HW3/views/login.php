<?php
require_once "../index_nav.php";
require_once dirname(__FILE__) . "/include/head.php";


unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['username']);
?>

<div class="container">
	<div class="wrapper">
		<form id="form" class="form-signin" method="get" action="/HW3/models/login_check.php">
			<h1 class="form-signin-heading">Login</h1>
			<input id="username" name="username" type="text" class="form-control" placeholder="Username" required="">
			<input id="password" name="password" type="password" class="form-control" placeholder="Password" required=""></br>
			<button id="submitBtn" class="form-control" name="submit" value="Login" type="submit"><b>登入</b></button>
		</form>
	</div>
</div>

<script>
	if (getUrlVars()['error']) {
		Swal.fire({
			icon: 'warning',
			title: 'Oops...',
			text: decodeURIComponent(getUrlVars()['error']),
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
		background-image: url(/HW3/resources/bg.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}

	#form {
		background-color: rgb(251, 230, 185);
	}

	.wrapper {
		margin-top: 80px;
		margin-bottom: 20px;
	}

	.form-signin {
		max-width: 420px;
		padding: 30px 38px 66px;
		margin: 0 auto;
		background-color: #eee;
	}

	.form-signin-heading {
		text-align: center;
		margin-bottom: 30px;
	}

	.form-control {
		display: block;
		margin: auto;
		position: relative;
		font-size: 16px;
		height: auto;
		padding: 10px;
	}

	input[type="text"] {
		margin-bottom: 10px;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}

	input[type="password"] {
		margin-bottom: 20px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}

	#submitBtn {
		font-weight: bold;
		border-color: blue;
		background-color: orange;
		width: 50%
	}
</style>