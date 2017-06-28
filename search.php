<?php
get_header();
if (have_posts()):
?>
	<div class="search-results">
		<h2>Search Results for: <?php echo get_search_query(); ?></h2>
		<?php get_search_form(); ?>
<?php
		// Start the loop.
		while (have_posts()): the_post();
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">',
						esc_url(get_permalink())), '</a></h2>');
					?>
				</header>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>
				<?php if ('post' == get_post_type()): ?>
					<footer class="entry-footer">
						<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
					</footer>
				<?php else: ?>
					<?php edit_post_link('Edit', '<footer class="entry-footer"><span class="edit-link">',
						'</span></footer>'); ?>
				<?php endif; ?>
			</article>
<?php
			// End the loop.
		endwhile;

	// Previous/next page navigation.
		the_posts_pagination(array(
			'prev_text'          => 'Previous page',
			'next_text'          => 'Next page',
			'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
		));
?>
	</div>
<?php
else :
?>
	<h2>No Results</h2>
	<p>Nothing was found for your search "<?php echo get_search_query(); ?>".</p>
	<?php get_search_form(); ?>
<?php
endif;

get_footer();
