<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<div style="
				background: url('<?php echo $url ?>') no-repeat ;
				background-size:contain;
				height: 300px;
				width:100%;
				" class="mb-3">
			</div>



	<div class="entry-content text-light">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div>
</article>
