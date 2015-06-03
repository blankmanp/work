<?php
	$cssUrl = base_url()."style/css/";
	$jsUrl = base_url()."stle/js/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo $cssUrl?>bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $cssUrl?>mycss.css">
	<script type="text/javascript" src="<?php echo $jsUrl?>jquery.min.css"></script>
</head>
<body>
	<div id="login-form-container" class="container-fluid">
		<div id="login-form" class="col-md-offset-3 col-sm-offset-3 col-xs-offset-5 col-md-6 col-sm-6 col-xs-8">
			<form class="form-horizontal">
				<div class="form-group">
					<label for="admin" class="control-label col-md-4 col-sm-4 col-xs-6">账户名：</label>
					<div class="col-md-6 col-sm-6 col-xs-9">
						<input type="text" class="form-control" id="admin" placeholder="admin">
					</div>
				</div>
				<div class="form-group">
					<label for="psw" class="control-label col-md-4 col-sm-4 col-xs-6">密码：</label>
					<div class="col-md-6 col-sm-6 col-xs-9">
						<input type="text" class="form-control" id="psw" placeholder="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-6 col-sm-offset-6 col-xs-offset-9">
						<button type="submit" class="btn btn-default">登陆</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>