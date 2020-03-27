<?php get_header(); ?>
<?php
$increase_sidebar_position = get_field('increase_options_sidebar_position','options');
?>

<div class="wrap <?php if($increase_sidebar_position != 'disabled'){echo 'row';} ?>">
	<?php if($increase_sidebar_position != 'disabled'){ ?>
		<div class="col-12  col-lg-2" style="padding-top:250px; z-index:9;">
			<div class="h4">Media</div>
			<div class="display-4 text-light">Stiri</div>
		</div>
		<div class="col-12  col-lg-10">
		<?php } ?>
		<?php /* <header class="entry-header">
		<?php
		the_archive_title( '<h1 class="title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		</header> */ ?>


		<div class="paine1" style="position:absolute; bottom: -10px; left: 50%;">
			<img src="<?php echo the_field('paine_1'); ?>" alt="">
		</div>

		<div class="paine1" style="
		position: fixed;
		top: 70%;
		right: 10%;
		">
		<img src="/wp-content/uploads/2019/08/paine2.png" alt="">
	</div>

	<div class="paine2" style="
	position: fixed;
	top: 0%;
	left: 0;
	">
	<img src="/wp-content/uploads/2019/08/paine2.png" alt="">
</div>

<div class="paine3" style="
position: fixed;
bottom: -30%;
left: -20%;
">
<img src="/wp-content/uploads/2019/08/Top-bread.png" alt="">
</div>

<div class="paine4" style="
position: fixed;
top: 13%;
right: 5%;
">
<img src="/wp-content/uploads/2019/08/paine1.png" alt="">
</div>



<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if (have_posts()) { ?>
			<div class="posts-wrap row">
				<?php while (have_posts()) : the_post();
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );



				?>
				<div class="col-12 col-sm-6 mb-5">
					<div style="
					background: url('<?php echo $url ?>') no-repeat ;
					background-size:contain;
					    height: 300px;
					width:100%;
					">

				</div>

			</div>

			<?

			get_template_part('template-parts/post/content', 'excerpt');

		endwhile;

		if ($wp_query->max_num_pages > 1) {
			if (function_exists('wp_pagenavi')) {
				wp_pagenavi();
			} else {
				?><div class="alignleft"><?php next_posts_link( __( '<span>&laquo;</span> Older posts', 'increase' ) );?></div>
				<div class="alignright"><?php previous_posts_link( __( 'Newer posts <span>&raquo;</span>', 'increase' ) );?></div><?php
			}
		} ?>
	</div>


<?php } else {


	if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'increase' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php } else { ?>

		<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'increase'); ?></p>
		<?php
		get_search_form();

	};

}; ?>
</main>
</div>
<?php if($increase_sidebar_position != 'disabled'){ ?>
</div>

<?php } ?>
</div>
<style media="screen">
body {
	min-height: 100%;
	webkit-overflow-scrolling: touch;
	/* overflow:hidden; */
	margin: 0;
	padding: 0;
	background: url(/wp-content/uploads/2019/08/background-green.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

footer#site-footer{
	display:none;
}
.entry-summary{
	color:white;
}
h2.title{
	font-size:24px;
}
.navbar-brand > img {
	position: absolute;
	top: 65px;
	left: 50%;
	width: 90px;
	height: 98px;
	margin-top: -5px;
	margin-left: -47px;
	z-index: 999999999999999999999;
}

ul.cnss-social-icon li.cn-fa-icon a{
	background-color:transparent !important;
}
@media (min-width: 993px) {
	div#primary{
		padding-top:250px;
	}
}


</style>
<?php get_footer();
