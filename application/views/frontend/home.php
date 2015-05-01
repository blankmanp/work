<?php 
	$cssUrl = base_url().'style/css/';
	$imgUrl = base_url().'style/img/'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BlankmanP</title>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $cssUrl?>bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $cssUrl?>mycss.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $cssUrl?>font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="container" id="homeContainer">
			<div id="homeTitle">
				<img src="<?php echo $imgUrl?>blogIcon.jpg" alt="icon" class="img-circle">
				<h1>blankmanP</h1>
			</div>
			<div class="pull">
				<div class="pull-left pullCircle" id="pull1"></div>
				<div class="pull-left pullCircle" id="pull2"></div>
				<div class="pull-left pullCircle" id="pull3"></div>
			</div>
			<div id="homeMenu">
				<ul id="menuClass">
					<li>
						<h1><a href="">WEBSITE</a></h1>
						<!--ul class="menuContent">
							<li>test</li>
							<li>test</li>
							<li>test</li>
						</ul-->
						<h1><a href="">CODE</a></h1>
						<!--ul class="menuContent">
							<li>lalala</li>
							<li>lalala</li>
							<li>lalala</li>
						</ul-->
					</li>
					<li>
						<h1><a href="">BLOG</a></h1>
						<h1><a href="">GAME</a></h1>
					</li>
					<li>
						<h1><a href="">GOOGLE+</a></h1>
						<h1><a href="">TWITTER</a></h1>
						<h1><a href="">GITHUB</a></h1>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>