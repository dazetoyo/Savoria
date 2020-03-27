<?php
/**
* Header template.
*/

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<?php wp_head(); ?>

</head>
<?php if(wp_is_mobile()){$deviceType = 'touch-device';}else{$deviceType = 'not-touch-device';} ?>
<body <?php body_class( $deviceType ); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'increase' ); ?></a>

	<?php/* if ( has_nav_menu( 'top' ) ) : ?>
	<div class="navigation-top">
	<div class="wrap">
	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
	</div><!-- .wrap -->
	</div><!-- .navigation-top -->
	<?php endif; */?>

	<?php $navbar_text_color = esc_attr(get_field( 'increase_options_header_text_color' , 'options' )); ?>
	<header style="margin-top:-26px;" class="header increase-header-<?php echo esc_attr(get_field( 'increase_options_header_text_color' , 'options' )); ?>" id="masthead" style="background-color: <?php echo esc_attr(get_field( 'increase_options_header_background_color' , 'options' )); ?>;">
		<div class="container p-0">
			<nav class="navbar navbar-expand-lg <?php if($navbar_text_color == 'light'){ echo 'navbar-light'; }else{ echo 'navbar-dark'; }; ?>">
				<a class="navbar-brand" href="<?php echo esc_url(get_bloginfo('url')); ?>">
					<?php $custom_logo_id = esc_attr(get_theme_mod( 'custom_logo' ));
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if(has_custom_logo()){ ?>
						<img src="<?php echo esc_url( $logo[0] ); ?>" class="d-inline-block" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
						<style>
						.header .navbar-brand img{
							max-height: <?php echo esc_attr(get_field( 'increase_options_header_logo_height' , 'options' )); ?>px
						}

						@media (max-width: 991px) {
							.header .navbar-brand img{
								max-height: <?php echo esc_attr(get_field( 'increase_options_header_logo_height_mobile' , 'options' )); ?>px
							}
						}
						</style>
					<?php }else{ ?>
						<?php echo esc_attr(get_bloginfo('name')); ?>
					<?php } ?>
				</a>
				<div class="d-none">
					<?php if(!get_field('header_phone_numbers','options')){ ?>
						<button class="btn <?php if($navbar_text_color == 'light'){ echo 'btn-outline-dark'; }else{ echo 'btn-light'; }; ?>" type="button" data-toggle="collapse" data-target="#header-phones" aria-controls="header-phones" aria-expanded="false" aria-label="Phone number">
							<span class="icon-custom increaseicons-phone navbar-custom-icon"></span>
						</button>
					<?php }else{ ?>
						<a href="tel:<?php the_field('header_phone_number_full','options'); ?>" class="btn <?php if($navbar_text_color == 'light'){ echo 'btn-outline-dark'; }else{ echo 'btn-light'; }; ?>" aria-label="Phone number">
							<span class="icon-custom increaseicons-phone navbar-custom-icon"></span>
						</a>
					<?php } ?>
					<?php if ( has_nav_menu( 'header_menu' ) ) { ?>
						<button class="btn <?php if($navbar_text_color == 'light'){ echo 'btn-outline-dark'; }else{ echo 'btn-light'; }; ?>" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-custom increaseicons-burger navbar-custom-icon"></span>
						</button>
					<?php } ?>
				</div>
				<div class="collapse navbar-collapse text-uppercase" id="header-menu">
					<?php if ( has_nav_menu( 'header_menu' ) ) {
						wp_nav_menu(
							array(
								'menu' => 'header_menu',
								'theme_location' => 'header_menu',
								'depth' => 2,
								'container' => '',
								'menu_class' => 'nav navbar-nav ml-md-auto',
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
								'walker' => new WP_Bootstrap_Navwalker()
							)
						);
					} ?>
				</div>
				<?php if(!get_field('header_phone_numbers','options')){ ?>
					<div class="collapse w-100" id="header-phones">
						<?php
						if( have_rows('sale_agents', 'options') ){ ?>
							<ul id="menu-head-phones" class="nav navbar-nav ml-md-auto">
								<?php $i=1; while ( have_rows('sale_agents', 'options') ) : the_row(); ?>
									<li id="menu-phones-<?php echo $i; ?>" class="menu-item menu-item-type-post_type nav-item">
										<a class="nav-link" href="tel:<?php echo esc_attr(get_sub_field('sale_agent_full_phone', 'options')); ?>"><?php echo esc_attr(get_sub_field('sale_agent_show_phone', 'options')); ?> - <?php echo esc_attr(get_sub_field('sale_agent_name', 'options')); ?></a>
									</li>
									<?php $i++; endwhile; ?>
								</ul>
							<?php }	?>

						</div>
					<?php }	?>
				</nav>
			</div>
		</header>

		<!-- preloader -->
		<div id="preloader" >
			<div class="spinner">
				<div class="dot1"></div>
				<div class="dot2"></div>
			</div>
		</div>

		<style media="screen">
		.spinner {
			width: 40px;
			height: 40px;
			-webkit-animation: sk-rotate 2.0s infinite linear;
			animation: sk-rotate 2.0s infinite linear;
			max-width: 50%;
		}
		#preloader {
			/* position: fixed;
			left: 0;
			top: 0;
			z-index: 9999999999999;
			width: 100%;
			height: 100%;
			overflow: visible;
			text-align: center;
			background-color: #fff; */
			display: flex !important;
			align-items: center;
			justify-content: center;
			position: fixed;
			left: 0;
			top: 0;
			z-index: 9999999999999;
			width: 100%;
			height: 100%;
			overflow: visible;
			text-align: center;
			background-color: #fff;
		}

		.dot1, .dot2 {
			width: 60%;
			height: 60%;
			display: inline-block;
			position: absolute;
			top: 0;
			background-color: #002442;
			border-radius: 100%;
			-webkit-animation: sk-bounce 2.0s infinite ease-in-out;
			animation: sk-bounce 2.0s infinite ease-in-out;
		}

		.dot2 {
			top: auto;
			bottom: 0;
			-webkit-animation-delay: -1.0s;
			animation-delay: -1.0s;
		}

		@-webkit-keyframes sk-rotate { 100% { -webkit-transform: rotate(360deg) }}
		@keyframes sk-rotate { 100% { transform: rotate(360deg); -webkit-transform: rotate(360deg) }}

		@-webkit-keyframes sk-bounce {
			0%, 100% { -webkit-transform: scale(0.0) }
			50% { -webkit-transform: scale(1.0) }
		}

		@keyframes sk-bounce {
			0%, 100% {
				transform: scale(0.0);
				-webkit-transform: scale(0.0);
				} 50% {
					transform: scale(1.0);
					-webkit-transform: scale(1.0);
				}
			}
			</style>

			<script>
			jQuery(window).load(function($){
				setTimeout(function(){
					jQuery('#preloader').fadeOut('slow',function(){
						jQuery(this).remove();
					});
				}, 300);
			});
			</script>
			<!-- end of preloader -->

			<div id="content">
				<div class="container">
