<!DOCTYPE html>
<html lang="da">
	<head>
		<meta name="charset" content="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Statistik - Comkean</title>
		<meta name="description" content="Live subscriber count - Comkean">
		<link rel="icon" href="/favicon.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@ComkeanYT">
		<meta name="twitter:creator" content="@jensz12">
		<meta name="twitter:title" content="Statistik - Comkean">
		<meta name="twitter:description" content="Live statistik for Comkean">
		<meta name="twitter:image:src" content="https://comkean.dk/blog/wp-content/uploads/2017/06/bg_comkean.jpg">
		<link rel="image_src" href="https://comkean.dk/blog/wp-content/uploads/2017/06/bg_comkean.jpg">
		<meta name="theme-color" content="#37474f">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://design.jensz12.com/css/material-fullpalette.min.css" rel="stylesheet">
		<link rel="manifest" href="/manifest-sub.json">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="Statistik for Comkean">
		<link rel="apple-touch-icon" href="/favicon.png">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-43679005-10', 'auto');
		ga('send', 'pageview');
		</script>
		<style>
		body {
			background-image: url(https://comkean.dk/blog/wp-content/uploads/2017/06/bg_comkean.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			background-attachment: fixed;
			height: 100%;
			font-family: 'Roboto', sans-serif;
		}
		.wrapper {
			position: relative;
			height: 90vh;
		}
		.jumbotron {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		</style>
	</head>
	<body>
		<main role="main" id="content" class="container">
			<div class="row">
				<article class="col-lg-12 col-md-12">
					<div class="wrapper">
						<div class="jumbotron">
							<img src="/favicon.png" class="img-responsive img-circle center-block" alt="Comkean" width="200px">
							<h1 class="text-center">Subscribers:<div id="result1"></div></h1>
							<h1 class="text-center">Visninger:<div id="result2"></div></h1>
							<h1 class="text-center">Videoer:<div id="result3"></div></h1>
						</div>
					</div>
				</article>
			</div>
		</main>
			<script src="//code.jquery.com/jquery-2.2.2.min.js"></script>
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://design.jensz12.com/js/ripples.min.js"></script>
			<script src="https://design.jensz12.com/js/material.min.js"></script>
			<script>
			function worker(){
				$.ajaxSetup ({
					cache: false
				});

				var loadUrl = "";
				$("#result1").load('count-subs.php');
				$("#result2").load('count-views.php');
				$("#result3").load('count-videos.php');
			}
			$(function(){
				worker();
				setInterval(worker, 10000);
			});
			</script>
	</body>
</html>
