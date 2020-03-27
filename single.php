<?php get_header(); ?>
<?php
$increase_sidebar_position = get_field('increase_options_sidebar_position','options');
?>

<div class="position-sticky;" >
	<div class="navbar-brand-single">

		<a class="" href="http://savoria.goodafternoon.ro">
			<img src="/wp-content/uploads/2019/08/Logo-Savoria.svg" class="d-inline-block" alt="Savoria">
		</a>
		<div style="margin-left:10px; padding-top:35px;">


			<a class="text-light d-none d-sm-block" href="/category/article/"  >
				<img src="/wp-content/uploads/2019/10/arrow-back.svg" class="d-inline-block" alt="Back">
				<div style="margin-left:3px;" >Inapoi</div>
			</a>
		</div>
	</div>



</div>


<div class="wrap <?php if($increase_sidebar_position != 'disabled'){echo 'row';} ?>">
	<?php if($increase_sidebar_position != 'disabled'){ ?>
		<div class="col-12">
		<?php } ?>

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

<div class="paine3 d-none d-sm-block" style="
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


		<div class="row">




			<div class="col-12 col-lg-6 col-sm-6 mb-5">
				<header class="entry-header">
					<h3 class="title">
						<?php the_title(); ?>
					</h3>
				</header>


			</div>

			<?php if (have_posts()) { ?>



				<div class="post-wrap col-12 col-lg-6">
					<?php while ( have_posts() ) :  the_post();	 ?>

						<?php

						get_template_part( 'template-parts/post/content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

/*
						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'increase' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'increase' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper"> </span>%title</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'increase' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'increase' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper"> </span></span>',
						) );

						*/

						?>

					<?php endwhile; ?>
				</div>




			</div>
		<?php }; ?>
	</main>
</div>
<?php /*if($increase_sidebar_position != 'disabled'){ ?>
	</div>
	<div class="col-md-4 col-lg-3 <?php if($increase_sidebar_position == 'left'){echo 'order-md-first';} ?>">
	<?php get_sidebar(); ?>
	</div>
	<?php } */?>
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
.social-fixed-right{
	bottom:50%;
}
ul.cnss-social-icon li.cn-fa-icon a,
ul.cnss-social-icon li.cn-fa-icon a:hover{
	background-color:transparent !important;
}

.navbar-brand-single {
	position: absolute;
	top: 65px;
	left: 50px;
	width: 90px;
	height: 98px;
	margin-top: -5px;
	margin-left: 0;
	z-index: 999999999999999999999;
}
div.content-area{
	padding-top:200px;
}
.navbar-brand > img{
	display:none !important;
}
</style>
<?php get_footer();
