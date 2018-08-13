<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lorem ipsum">
	
	<?php wp_head(); ?>
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-danger">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
					</li>
				</ul>
				<div class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Menu 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Menu 2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Menu 3 inactif</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>	
	<div class="container">
		<div class="jumbotron">
			<h1>Mon beau thème prends forme</h1>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row m-30-x">
				<div class="col-xs-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-10">
					<h1>Titre de l'article</h1>
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.</p>
				</div>
			</div> <!-- row-->
		</div> <!-- container-->

		<div class="container">
			<div class="row m-30-x">
				<div class="col-xs-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-10">
					<h1>Titre de l'article</h1>
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.</p>
				</div>
			</div> <!-- row-->
		</div> <!-- container-->

		<div class="container">
			<div class="row m-30-x">
				<div class="col-xs-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-10">
					<h1>Titre de l'article</h1>
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.</p>
				</div>
			</div> <!-- row-->
		</div> <!-- container-->

		<div class="container">
			<div class="row m-30-x">
				<div class="col-xs-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-10">
					<h1>Titre de l'article</h1>
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.</p>
				</div>
			</div> <!-- row-->
		</div> <!-- container-->
	</section>

	<?php wp_footer(); ?>
</body>
</html>