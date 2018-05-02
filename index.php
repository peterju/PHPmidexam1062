<!DOCTYPE HTML>
<html lang="zh-hant-TW">
<head>
	<meta charset="utf-8">
	<title>Web程式設計與實習期中考</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<!-- navbar -->
<div class="navbar-wrapper">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<h1 class="brand"><a href="index.php">Web程式設計與實習期中考</a></h1>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
					<!-- <li><a title="team" href="#about">About</a></li>
					<li><a title="services" href="#services">Services</a></li>
					<li><a title="works" href="#works">Works</a></li>
					<li><a title="blog" href="#blog">Blog</a></li>
					<li><a title="contact" href="#contact">Contact</a></li>
					<li><a href="page.html">Page</a></li> -->
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>勤益人力銀行 求職人才履歷表</h4>
	<p>表中“＊”請務必填寫</p>
	<div class="blankdivider30">
	</div>
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				<form action="next.php" method="post" role="form" class="contactForm">
					<div class="row">
						<div class="span6">
							<div class="form-group">
								<label for="name">* 姓名</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="姓名" />
							</div>
							<div class="form-group">
								<label for="sex">* 性別</label>
								<label class="radio-inline">
									<input type="radio" class="form-control" name="sex" id="inlineRadio1" value="男"> 男
									<input type="radio" class="form-control" name="sex" id="inlineRadio2" value="女"> 女
								</label>
								<br>
							</div>
							<div class="form-group">
								<label for="email">* Email</label>
								<input type="text" class="form-control" name="email" id="email" />
							</div>
							<div class="form-group">
								<label for="tel">* 電話</label>
								<input type="text" class="form-control" name="tel" id="tel" />
							</div>
							<div class="form-group">
								<label for="sports">* 擅長運動</label>
								<label class="checkbox-inline">
									<input type="checkbox" class="form-control" name="s1" id="s1" value="羽球"> 羽球
									<input type="checkbox" class="form-control" name="s2" id="s2" value="籃球"> 籃球
									<input type="checkbox" class="form-control" name="s3" id="s3" value="桌球"> 桌球
									<input type="checkbox" class="form-control" name="s4" id="s4" value="直排輪"> 直排輪
								</label>
								<br>
							</div>
						</div>
						<div class="span6">
							<div class="form-group">
								<label for="message">自傳</label>
								<textarea class="form-control" name="message" rows="20"></textarea>
							</div>
							<input type="submit" value="送出" class="btn btn-theme pull-left">
							<input type="reset"  value="清除" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- ./span12 -->
	</div>
</div>
</section>
<footer>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
			<ul class="social-networks">
				<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
				<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
				<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
				<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
			</ul>
			<p class="copyright">
				Web程式設計與實習期中考
			</p>
		</div>
	</div>
</div>
<!-- ./container -->
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>