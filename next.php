<!DOCTYPE HTML>
<html lang="zh-hant-TW">
<head>
<meta charset="utf-8">
<title>Web程式設計與實習期中考</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- css -->
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- skin color -->
<link href="color/default.css" rel="stylesheet">
<!--[if lt IE 7]>
            <link href="css/font-awesome-ie7.css" type="text/css" rel="stylesheet">
        <![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<!-- Favicon -->
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
				<h1 class="brand"><a href="index.php">回首頁</a></h1>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
					<!-- <li><a title="team" href="index.html#about">About</a></li>
					<li><a title="services" href="index.html#services">Services</a></li>
					<li><a title="works" href="index.html#works">Works</a></li>
					<li><a title="blog" href="index.html#blog">Blog</a></li>
					<li><a title="contact" href="index.html#contact">Contact</a></li>
					<li><a href="page.html">Page</a></li> -->
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<?php
	if (!isset($_POST['name']) or $_POST['sex']=="" or $_POST['email']=="" or $_POST['tel']=="" or
	 (!isset($_POST['s1']) and !isset($_POST['s2']) and !isset($_POST['s3']) and !isset($_POST['s4'])))
	{
		echo "You have no entry field.";
?>
		<script>
		alert("您有未輸入的欄位(php)");
		history.back();
		</script>
<?php
	}
?>
<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyUp">
			<h2 class="pagetitle">接收資料</h2>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="maincontent" class="inner">
<div class="container">
					<div class="row">
						<div class="span6">

							<h4 class="heading">基本資料<span></span></h4>
<?php
			echo "姓名：".$_POST['name']."<br />";
			echo "性別：".$_POST['sex']."<br />";
			echo "電話：".$_POST['tel']."<br />";
			echo "Email：".$_POST['email']."<br />";
			echo "擅長運動：";
			if ( isset($_POST['s1']) )
				echo "羽球,";
			if ( isset($_POST['s2']) )
				echo "籃球,";
			if ( isset($_POST['s3']) )
				echo "桌球,";
			if ( isset($_POST['s4']) )
				echo "直排輪";
?>

						</div>
						<div class="span6">
							<h4 class="heading">自傳<span></span></h4>
<?php
							if ( isset($_POST['message']) )
								echo $_POST['message'];
?>
						</div>
					</div>

</div>
<!-- end container -->
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
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- nav -->
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<!-- localScroll -->
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- prettyPhoto -->
<script src="js/jquery.prettyPhoto.js"></script>
<!-- Works scripts -->
<script src="js/isotope.js"></script>
<!-- flexslider -->
<script src="js/jquery.flexslider.js"></script>
<!-- inview -->
<script src="js/inview.js"></script>
<!-- animation -->
<script src="js/animate.js"></script>
<!-- custom functions -->
<script src="js/custom.js"></script>
</body>
</html>