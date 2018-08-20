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
				<!--<div class="form-inline my-2 my-lg-0">
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
				</div>-->
				<?php 
					wp_nav_menu(array(
						'theme_location' 				=> 'top-menu',
						
						'depth' 			=> 2,
						'container' 		=> 'div',
						'container_class'	=> 'form-inline my-2 my-lg-0',
						
						'menu_class' 		=> 'navbar-nav mr-auto',
						'menu_id'			=> 'nav-link'
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                		'walker'            => new WP_Bootstrap_Navwalker()
						)
					); ?>
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
			<?php if (have_posts()):  ?>
				<?php while(have_posts()): the_post(); ?>
					<div class="row m-30-x">
						<div class="col-2">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="col-10">
							<h1><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
						</div>
					</div> <!-- row-->
				<?php endwhile; ?>

			<?php else: ?>
				<div class="row">
					<div class="col-12">
						<p>Aucun résultats</p>
					</div>
				</div>
			<?php endif; ?>

		</div> <!-- container-->
	</section>

		<?php wp_footer(); ?>
	</body>
	</html>