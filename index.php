<?php
require_once 'inc/JensFunctions.php';

JensFunctions::loadConfig('config.php');
JensFunctions::checkCronjob();

$latest_youtube_video = JensFunctions::getYouTubeLatestVideo();
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Comkean</title>
<meta name="description" content="Comkean">
<link rel="icon" href="favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@comkeanyoutube">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Comkean">
<meta name="twitter:description" content="Comkean">
<meta name="twitter:image:src" content="https://comkean.dk/banner.jpg">
<?php require 'header.php';?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.5&appId=556771144486140";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
<?php require 'navbar.php';?>
</header>
<main role="main" id="content" class="container">
	<div class="row">
		<article class="col-lg-9 col-md-8">
			<div class="jumbotron">
				<div class="embed-responsive embed-responsive-16by9 hidden-print">
				<iframe class="embed-responsive-item" src="https://youtube.com/embed/<?php echo $latest_youtube_video->id; ?>?showinfo=0&color=white&theme=light&fs=1">Brug en moderne browser TAK!!</iframe>
				</div>
			</div>
			<div class="row hidden-print">
	<aside id="facebook" class="col-sm-6">
		<div class="panel panel-material-light-blue-900">
			<div class="panel-heading">
				<h2 class="panel-title"><i class="fab fa-facebook-square"></i> Facebook</h2>
			</div>
			<div class="fb-page" style="margin-left: -1px;" data-width="410" data-height="510" data-href="https://www.facebook.com/comkean" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/comkean"><a href="https://www.facebook.com/comkean">Comkean</a></blockquote></div></div>
			</aside>
	<aside id="twitter" class="col-sm-6">
		<div class="panel panel-info">
				<div class="panel-heading">
				<h2 class="panel-title"><i class="fab fa-twitter"></i> Twitter</h2>
				</div>
				<div class="panel-body">
				<a class="twitter-timeline" data-chrome="nofooter noheader transparent noscrollbar" height="475" href="https://twitter.com/ComKeanYoutube">Tweets by ComKeanYoutube</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				</div>
	</aside>
		</article>
		<?php require 'sidebar.php';?>
	</div>
<?php require 'footer.php';?>
</body>
</html>
