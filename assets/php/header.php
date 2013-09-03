<style>
	h1,h2,h3,h4,h5,h6{
	font-family: headlineFontFamily;
	color: purple
}

body{
	margin-top: 30px;
}

p{

	font-family: copyFontFamily;
	font-size: 1.1em;
	line-height:1.4em;
	color: darkblue;
	padding: 0 2%;

}

.container{
	background: beige;
	-webkit-border-radius: 60px 0 0 0;
	-moz-border-radius: 60px 0 0 0;
	border-radius: 60px 0 0 0;

@media(max-width: 767px){
	-webkit-border-radius: 20px 0 0 0;
	-moz-border-radius: 20px 0 0 0;
	border-radius: 20px 0 0 0;

}
}
.main{
	background: beige;
}
.navbar{
	margin-bottom: 0;
}

.carousel{
	margin-bottom: 0;
}
.main>articel{
	margin: 0 5%;

}
.sidebar>aside{
	padding-right:5%;

	@media(max-width: 767px){
		padding-left:5%;
	}
}

aside{
	h2{
		font-size: 1.8em;
		color:pink;
		border-bottom: 1px dotted purple;


	}
}

.navbar{
	border-right:none;
	border-left:none;
	border-radius:0;
}

#branding{
	img{
		margin:10px 0 5px 25px;
		max-width:450px;
		@media(max-width: 767px){
			margin:10px 0 5px 10px;
			width: 90%;
		}
	}
}

.according-heading{
	background: purple;
	a{
		color:white;
	}
}
</style>
<div class="content row">
	<div class="col-lg-12">
		<header class="clearfix">
			<section id="branding">
				<a href="index.php">
					<img src="assets/images/logo.png" alt="">
				</a>
			</section>

			<div class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="venue.php">Venue</a></li>
					<li  class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Artists <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
	<li ><a tabindex="-1" href="artists.php">All artists</a></li>
	<li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
					</li>
					<li><a href="schedule.php">Schedule</a></li>
					<li><a href="register.php">Register</a></li>
					
				</ul>
			</div>

	<section id="modal" class="modal fade">
		<div class="modal-body">
			<img id="modal-image"src="" alt="modal photo" >
		</div>
	</section>
		</header>
	</div>
</div>