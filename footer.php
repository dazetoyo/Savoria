<div class="social-fixed-right d-none d-sm-block">
    <?php echo do_shortcode( '[cn-social-icon]' )?>
</div>

</div><!-- .container -->

</div><!-- #content -->



<footer id="site-footer" class="site-footer bg-light">
    <div class="container">
        <?php if(is_active_sidebar( 'sidebar-footer' )){ ?>

            <aside class="widget-area" aria-label="<?php esc_attr_e( 'Footer', 'increase' ); ?>">
                <div class="row pt-3">
                    <?php dynamic_sidebar('sidebar-footer'); ?>
                </div>
            </aside><!-- .widget-area -->

        <?php } ?>
        <div class="copyright text-center py-3">
            <?php echo date('Y'); ?> © <?php echo get_bloginfo('name'); ?>. <?php _e('All rights reserved', 'increase'); ?>.
        </div>
    </div>
</footer><!-- #colophon -->

<script type="text/javascript">
jQuery(document).ready(function($) {
    $( ".fn-primary-nav-trigger " ).on( "click", function() {
      $(".cn-fa-icon > a").toggleClass("menu-hover");
    });
});


</script>


<?php wp_footer(); ?>
</body>
</html>
