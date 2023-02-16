<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>amindsight</title>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script-name.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

	<?php if (is_front_page()) { ?>
		<div class="page-header">
		<?php } // if(is_front_page())
		?>

		<header class="fixed-top">
			<div class="container">
				<div class="row justify-content-between">

					<a href="/" class="home">&#8226;amindsight</a>

					<nav id="header">
						<ul class="menu">
							<a href="/">
								<li class="item-menu">
									Home
								</li>
							</a>
							<a href="/gallery">
								<li class="item-menu">
									Gallery
								</li>
							</a>
							<a href="/stories">
								<li class="item-menu">
									Stories
								</li>
							</a>
							<a href="/games">
								<li class="item-menu">
									Games
								</li>
							</a>
							<a href="/about">
								<li class="item-menu">
									About
								</li>
							</a>
						</ul>
					</nav>
				</div>
			</div>
		</header>