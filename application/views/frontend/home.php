<?php 
	$cssUrl = base_url().'style/css/';
	$imgUrl = base_url().'style/img/';
	$jsUrl = base_url().'style/js/';
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
	<script type="text/javascript" src="<?php echo $jsUrl?>jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="container" id="homeContainer">
			<div class="col-md-2" id="homeTitle">
				<img src="<?php echo $imgUrl?>blogIcon.jpg" alt="icon" class="img-circle">
				<h1>blankmanP</h1> 
			</div>
			<div class="pull col-md-8">
				<div class="pull-left pullCircle" id="pull1"></div>
				<div class="pull-left pullCircle" id="pull2"></div>
				<div class="pull-left pullCircle" id="pull3"></div>
			</div>
			<div class="col-md-2" id="homeMenu">
				<ul id="menuClass">
					<li>
						<div class="dropdown">
							<h1 class="dropdownTitle" id="webDrop"><a href="">WEBSITE</a></h1>
							<ul class="menuContent" dropby="webDrop">
								<li class="menuContentLi pull-left">test</li>
								<li class="menuContentLi pull-left">test</li>
								<li class="menuContentLi pull-left">test</li>
							</ul>
						</div>
						<div class="dropdown">
							<h1 class="dropdownTitle" id="codeDrop"><a href="">CODE</a></h1>
							<!--ul class="menuContent" dropby="codeDrop">
								<li class="menuContentLi pull-left">lalala</li>
								<li class="menuContentLi pull-left">lalala</li>
								<li class="menuContentLi pull-left">lalala</li>
							</ul-->
						</div>
					</li>
					<li>
						<div class="dropdown">
							<h1 class="dropdownTitle" id="blogDrop"><a href="">BLOG</a></h1>
						</div>
						<div class="dropdown">
							<h1 class="dropdownTitle" id="gameDrop"><a href="">GAME</a></h1>
						</div>
					</li>
					<li>
						<h1><a href="https://plus.google.com/101549408884906873125/posts">GOOGLE+</a></h1>
						<h1><a href="https://twitter.com/blankman_p">TWITTER</a></h1>
						<h1><a href="https://github.com/blankmanp">GITHUB</a></h1>
					</li>
				</ul>
				<script>
					$(".menuContent").hide()
					.parent().hover(function() {
						console.log("hi");
					})
				</script>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>