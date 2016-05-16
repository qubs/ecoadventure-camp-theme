<?php
	get_header();

	if(have_posts()):
		query_posts("cat=-22");
		while(have_posts()): the_post();
?>
			<div class="post">
				<h2><?php the_title(); ?></h2>
				<div class="date">Posted <?php the_time('F jS, Y'); ?></div>
				<?php get_template_part('content', get_post_format()); ?>
				<?php the_content(); ?>
				<?php comments_popup_link(
                                  __('No Comments »', 'constructor'),
                                  __('1 Comment »', 'constructor'),
                                  __('% Comments »', 'constructor'),
                                  'comments-link',
                                  __('Comments Closed', 'constructor')); ?>
			</div>
<?php
		endwhile;
	endif;

	// get_sidebar();
	get_footer();
?>