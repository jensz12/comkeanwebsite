<?php
//FIXME: This is a "hack", please fix Jens...
require_once 'inc/JensFunctions.php';
JensFunctions::loadConfig('config.php');
?>
<div class="col-lg-3 col-md-4">
		<div class="row">
			<aside class="col-md-12 col-sm-6" role="complementary">
				<div class="panel panel-material-red-A700">
				<div class="panel-heading">
				<h2 class="panel-title"><i class="fab fa-youtube"></i> Abonnér på Youtube</h2>
				</div>
				<div class="panel-body"><script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channelid="UC_W5dwVHpjxue5R4ILmMZAA" data-layout="full" data-count="default"></div></div>
				</div>
			</aside>
			<aside class="col-md-12 col-sm-6" role="complementary">
			<div class="panel panel-material-red-A700">
				<div class="panel-heading">
					<h2 class="panel-title"><a href="/stats"><i class="fab fa-youtube"></i> Subs på YouTube</a></h2>
				</div>
				<div class="panel-body">
				<p class="subs"><?php echo number_format(JensFunctions::getYouTubeSubCount()); ?></p>
				</div>
			</div>
		</aside>
		<aside class="col-md-12 col-sm-6" role="complementary">
				<div class="panel panel-material-blue-300">
				<div class="panel-heading">
				<h2 class="panel-title dark-title"><i class="fab fa-discord"></i> Snak med på Discord</h2>
				</div>
				<div class="panel-body">
					<img class="img-responsive" src="https://vercinger.dk/img/discord.png" />
					<iframe src="https://discordapp.com/widget?id=105277386307723264&theme=light" width="100%" height="500" allowtransparency="true" frameborder="0"></iframe>
				</div>
				</div>
			</aside>
		</div>
		</div>
