<div class="col-12 col-sm-6 mb-5">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<h2 class="title">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				Afla mai multe
			</a>
	</article>
</div>
