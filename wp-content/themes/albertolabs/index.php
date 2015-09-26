<?php get_header(); ?>

<div class="row">
	
	<div class="col-md-8">
	
		<?php if(have_posts()) : ?>

		   <?php while(have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<a href="<?= esc_url(get_permalink()); ?>" title="<?php the_title() ?>" class="post_title"><h2><?php the_title(); ?></h2></a>
				<p><small><?php the_date("d/m/Y") ?> &nbsp;&nbsp; by <?php the_author(); ?> &nbsp;&nbsp; <?php comments_number( '0 comments', '1 comment', '% comments' ); ?></small></p>

				<hr />

	 			<?php

	 				function new_excerpt_more( $more ) 
	 				{
						return ' [...] <p><a href="#" class="read-more">Read more ></a></p>';
					}

		 			if ( is_category() || is_archive() || is_home() ) 
		 			{
						add_filter('excerpt_more', 'new_excerpt_more');
						the_excerpt();
					} 
					else 
					{
						the_content();
					} 

				?>

			</div>

			<?php

			if (is_singular()) {
				// support for pages split by nextpage quicktag
				wp_link_pages();

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );

				// tags anyone?
				the_tags();
			}
			?>
		   <?php endwhile; ?>
		
		<?php if (!is_singular()) : ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php endif; ?>

		<?php else : ?>
		
		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>
		
		<?php endif; ?>
	
	
	</div>

	<div class="col-md-4">
	
		<br />
		<?php get_sidebar(); ?>
	
	</div>

</div>


<?php get_footer(); ?>