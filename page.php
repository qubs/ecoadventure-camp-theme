<?php

get_header();

if(is_front_page()) {
	// echo do_shortcode('[ssba_hide]');
	echo '<section class="hero"><img src="' . get_template_directory_uri() . '/images/header1.jpg" alt=""></section>';
	echo '<div class="col col66">';
}

while(have_posts()): the_post();
	the_content();
endwhile;

if(is_front_page()) {
	echo '</div>';
}

if(is_front_page()) {
	get_sidebar();
}

get_footer();
