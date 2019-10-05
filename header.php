<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				if($(window).width() <= 830) {
					$('nav').hide();
				} else {
					$('nav').show();
				}

				$('#menuButton').click(function() {
					$('nav').slideToggle();
					console.log('a');
				});
			});
			$(window).resize(function() {
				if($(window).width() <= 830) {
					$('nav').hide();
				} else {
					$('nav').show();
				}
			});
		</script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28834272-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="qubsBar">
			<ul>
				<li><a href="https://qubs.ca">QUBS</a></li>
				<li><a href="https://elbowlakecentre.ca">ELEEC</a></li>
                <li><a href="https://research.qubs.ca">QUBS Projects</a></li>
<!--				<li><a href="https://dataverse.scholarsportal.info/dataverse/QUBS">QUBS Dataverse</a></li>-->
				<li><a href="https://opinicon.wordpress.com/">Opinicon Natural History</a></li>
				<li class="active"><a href="/">Eco-Adventure Camp</a></li>
				<li><a href="https://fowlerherbarium.ca">Fowler Herbarium</a></li>
				<li><a href="http://fieldstations.ca">fieldstations.ca</a></li>
			</ul>
		</div>
		<header>
			<!-- <h1><?php bloginfo('name'); ?></h1> -->
			<h1><img src="<?php echo get_template_directory_uri();?>/images/logo.svg"
					 alt="<?php bloginfo('name'); ?>"></h1>
			<button id="menuButton">&equiv;</button>
			<nav>
				<?php
					function the_page_menu_args( $args ) {
						$args['show_home'] = true;
						return $args;
					}
					add_filter('wp_page_menu_args', 'the_page_menu_args');		
					wp_nav_menu(array('container' => '', 'theme_location' => 'primary'));
				?>
			</nav>
		</header>
		<section class="main">
