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
	$jb_name = isset($_POST['name'])?$_POST['name']:'';
	$jb_sex = isset($_POST['sex'])?$_POST['sex']:'';
	$jb_email = isset($_POST['email'])?$_POST['email']:'';
	$jb_tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
	$jb_s1 = isset($_POST['s1'])?$_POST['s1']:'';
	$jb_s2 = isset($_POST['s2'])?$_POST['s2']:'';
	$jb_s3 = isset($_POST['s3'])?$_POST['s3']:'';
	$jb_s4 = isset($_POST['s4'])?$_POST['s4']:'';
	$flag_noinput  = false;
	$flag_noemail = false;
	if (
		empty($jb_name) or empty($jb_sex) or empty($jb_email) or empty($jb_tel)
		or (
			empty($jb_s1) and empty($jb_s2) and empty($jb_s3) and empty($jb_s4)
			)
	) {
		$flag_noinput=true;
	}

	if( !filter_var($jb_email, FILTER_VALIDATE_EMAIL)) {
		$flag_noemail=true;
	}
	if ($flag_noinput or $flag_noemail) {
		echo "<script>";
		echo $flag_noinput?"alert('您有必填欄位未填寫');":'';
		echo $flag_noemail?"alert('您的Email格式有問題');":'';
		echo "history.back();";
		echo "</script>";
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
			echo "姓名：".$jb_name."<br />";
			echo "性別：".$jb_sex."<br />";
			echo "電話：".$jb_tel."<br />";
			echo "Email：".$jb_email."<br />";
			echo "擅長運動：";
			if ( !empty($jb_s1) )
				echo "羽球,";
			if ( !empty($jb_s2) )
				echo "籃球,";
			if ( !empty($jb_s3) )
				echo "桌球,";
			if ( !empty($jb_s4) )
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
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
</body>
</html>