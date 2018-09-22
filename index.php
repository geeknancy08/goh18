<?php
	include_once 'Includes/Database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121072402-2">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-121072402-2');
    </script>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Game of Holmes</title>
	<link rel="shortcut icon" href="Pictures/gohlogo1.png">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
</head>
<style>
html,body {
	height: 100%;
}

body.my-login-page {
	background: url('Pictures/default.jpg') no-repeat ;width:100%; height:640px;
		font-size: 14px;
}

.my-login-page .brand {
	width: 90px;
	height: 90px;
	overflow: hidden;
	border-radius: 50%;
	margin: 0 auto;
	margin: 40px auto;
	box-shadow: 0 0 40px rgba(0,0,0,.05);
}

.my-login-page .brand img {

	margin-top: -5px;
	margin-left: -3px;
	width: 100%;
}

.my-login-page .card-wrapper {
	width: 400px;

}

.my-login-page .card {
	background-image: url('Pictures/nancy.jpg');
	-webkit-box-shadow: -1px 4px 26px 11px #ddcea7;
-moz-box-shadow: -1px 4px 26px 11px #ddcea7;
box-shadow: -1px 4px 26px 11px #ddcea7;

}

.my-login-page .card.fat {
	padding: 10px;
}

.my-login-page .card .card-title {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 30px;

	text-shadow: 0 0 20px #ddcea7;
	color: #ddcea7;
	text-align: center;
	margin-bottom: 30px;
}

.my-login-page .form-control {
	border-width: 2.3px solid;

}

.my-login-page .form-group label {
	font-family: verdana;
	color: #ddcea7;
	width: 100%;

}

.my-login-page .btn.btn-block {
	padding: 12px 10px;
}

.my-login-page .btn.btn-outline-danger:hover {
	background-color: transparent;
	border:1px solid #8f422e;
	color: #ddcea7;
}
.my-login-page .btn.btn-outline-danger{
	border:1px solid #8f422e;
	color: #ddcea7;
	background-color: #8f422e;

}


.my-login-page .margin-top20 {
	margin-top: 20px;
	color: #ddcea7;

}

.my-login-page .no-margin {
	margin: 0;
}

.my-login-page .footer {
	margin: 40px 0;
	color: #888;
	text-align: center;
}
.panel-heading{
		font-size:30px;
		text-align: center;
	}

@media screen and (max-width: 425px) {
	.my-login-page .card-wrapper {
		width: 90%;
		margin: 0 auto;
	}
}
@media screen and (max-width: 425px) {
	.panel-heading img{
		width: 40px;
		height: 30px;

	}
	.panel-heading{
		font-size:20px;
		text-align: 
	}
}

@media screen and (max-width: 320px) {
	.my-login-page .card.fat {
		padding: 0;
	}

	.my-login-page .card.fat .card-body {
		padding: 15px;
	}
}
</style>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
						<div class="panel panel-default" style="border-radius: 20px;">
    <div class="panel-heading" style="background-color: #ddcea7; color:#8f422e;font-weight: bolder;font-family: Monteserrat;text-shadow: 0 0 20px #8f422e; border-radius: 20px;       webkit-box-shadow: -1px 4px 26px 11px #8f422e;
-moz-box-shadow: -1px 4px 26px 11px #8f422e;
box-shadow: -1px 4px 26px 11px #8f422e; margin-top: 50px; "><img src="Pictures/gohlogo1.png">GAME OF HOLMES</div>
</div>
					<br><br>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" action="Login.php">
							 
								<div class="form-group">
									<label for="email">Username</label>

									<input id="email" type="text" class="form-control" name="uid" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="Forgot.php" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="pwd" required data-eye>
								</div>

								

								<div class="form-group no-margin">
									<button type="submit" name="submit2" class="btn btn-danger btn-outline-danger btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="Register.php">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2018 &mdash;<img src="Pictures/logo1.png" style="max-width: 30px;max-height: 30px;"><u>Impetus Student Society</u> 
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<script src="bootstrap.min.js"></script>
	
</body>
</html>