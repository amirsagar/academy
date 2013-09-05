<!DOCTYPE html>
<html>
<head>
	<title>Academy Batman</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body id="characters" data-spy="scroll" data-target=".scrollspy">

	<section class="container">
		<div class="content row">
			
			<?php include "assets/php/header.php" ?>
			<div class="col col-lg-12">
				<section class="characterlist">
					<div id="characterindex" class="row">
						<section class="scrollspy clearfix col col-lg-3 hidden-xs">
							<ul class="nav nav-list affix-top" data-spy="affix" data-offset-top="350">
								<li><a href="#bane"><span class="glyphicon glyphicon-user"></span> Bane</a></li><li>
								<li><a href="#face"><span class="glyphicon glyphicon-user"></span> Clay Face</a></li>
								<li><a href="#catwoman"><span class="glyphicon glyphicon-user"></span> Cat woman</a></li>
								
								<li><a href="#freeze"><span class="glyphicon glyphicon-user"></span> Mr. Freeze</a></li>
								<li><a href="#joker"><span class="glyphicon glyphicon-user"></span> Joker</a></li>
								<li><a href="#penguinn"><span class="glyphicon glyphicon-user"></span> Penguinn</a></li>
								<li><a href="#quinn"><span class="glyphicon glyphicon-user"></span> Harley Quinn</a></li>
								<li><a href="#ivy"><span class="glyphicon glyphicon-user"></span> Poison Ivy</a></li>
								
								<li><a href="#ras"><span class="glyphicon glyphicon-user"></span> Ra's al Ghul</a></li>
								<li><a href="#riddler"><span class="glyphicon glyphicon-user"></span> Riddler</a></li>
								<li><a href="#crow"><span class="glyphicon glyphicon-user"></span> Scare Crow</a></li>
								<li><a href="#2face"><span class="glyphicon glyphicon-user"></span> Two Face</a></li>
							</ul>
						</section>

						<section class="characterinfo col col-lg-8">
							<?php include "assets/php/snippet_article_villians.php" ?>
							
						</section>
					</div>
				</section>
			</div>
			<?php include "assets/php/footer.php" ?>