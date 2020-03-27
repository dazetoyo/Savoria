<?php /* Template Name: Front */ ?>
<?php get_header(); ?>

</div><!-- .container -->

<div class="keep-it-essential" style="display:none;"> <h1>Keep it essential</h1> </div>

<div class="increase-gallery increase-gallery-slick-slider">


    <?php
    /**
    * Setup query to show the ‘services’ post type with ‘8’ posts.
    * Output is title with excerpt.
    */

    $args = array(
        'post_type' => 'increase_slider',
        'post_status' => 'publish',
        'posts_per_page' => 8,
        // ‘orderby’ => ‘title’,
        // ‘order’ => ‘ASC’,
    );




    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();


    $title = get_the_title();

    ?>

    <!-- Slide -->
    <div id="slickid-<?php echo the_field('id_slick') ?>" class="increase-gallery-item thumb-bg">
        <?php /*
        <img class="fixed-middle d-none d-sm-block"
        srcset="<?php echo the_field('fixed_middle_image'); ?> 1200w,
        <?php echo the_field('fixed_middle_image'); ?> 1800w,
        <?php echo the_field('fixed_middle_image'); ?> 1900w"
        src="<?php echo the_field('fixed_middle_image'); ?>"
        alt="Image description"> */ ?>

        <div class="d-none d-sm-block fix-middle-image" style="
        background-image: url('<?php echo the_field('fixed_middle_image'); ?>');
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 260px auto;
        background-attachment: fixed;
        z-index:1;">
    </div>


    <?php /* <img class="fixed-middle d-none d-sm-block" src="<?php echo the_field('fixed_middle_image'); ?>"> */ ?>
    <div class="row no-gutters">


        <div class="col-12 col-sm-6 background-style" style="
        background-image:url(<?php echo the_field('left_image'); ?>)
        ">

        <?php if( get_field('slider_video') ) { ?>
            <div class="about-video-container ">
                <video autoplay="" muted="" loop="" id="myVideo" class="dynamic-height" >
                    <source src="<?php echo the_field('slider_video'); ?>" type="video/mp4">
                    </video>
                </div>
            <?php }  else { echo "<div class='dynamic-padding'></div>"; }  ?>
            <div class="dynamic-desktop-padding"
            ></div>


        </div>

        <div class="col-12 col-sm-6 background-style backgroud-style-dynamic-padding"

        style="<?php /*background-image:url(<?php echo the_field('right_image') ?>*/ ?>)
        min-height: 100%;
        background: <?php echo the_field('gradient_center_color'); ?>;
        background: -webkit-radial-gradient(left, <?php echo the_field('gradient_center_color'); ?>, <?php echo the_field('gradient_side_color'); ?>);
        background: -moz-radial-gradient(left, <?php echo the_field('gradient_center_color'); ?>, <?php echo the_field('gradient_side_color'); ?>);
        background: radial-gradient(to right, <?php echo the_field('gradient_center_color'); ?>, <?php echo the_field('gradient_side_color'); ?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        ">

        <img class="fixed-middle d-block d-sm-none" src="<?php echo the_field('fixed_middle_image'); ?>">

        <div class="absolute-content">
            <p class="h2"><?php echo the_field('main_title'); ?></p>
            <p class="display-3 text-light"><?php echo the_field('subtitle'); ?></p>
            <p class="text-primary h6 max-500"><?php echo the_field('subtitle_description'); ?></p>


            <nav class="small mt-4 hover-homepage d-none d-sm-block sub">
                <ul style="d-inline-flex" >
                    <a style="text-decoration:none;" class=" text-light mr-3" href="<?php echo the_field('vezi_produsul') ?>" >
                        <li>
                            Vezi produsul
                            <span></span><span></span><span></span><span></span>
                        </li>
                    </a>
                    <a style="text-decoration:none; " class=" text-light mr-3  declaratie" href="<?php echo the_field('vezi_produsul') ?>" >
                        <li style="width:17em !important;">
                            Declaratie nutritionala
                            <span></span><span></span><span></span><span></span>
                        </li>
                    </a>
                    <a style="text-decoration:none;" class=" text-light mr-3 beneficii" href="<?php echo the_field('vezi_produsul') ?>" >
                        <li  style="width:120px !important;">
                            Beneficii
                            <span></span><span></span><span></span><span></span>
                        </li>
                    </a>
                </ul>
            </nav>

            <div class="d-block d-sm-none small mt-4 hover-homepage">
                <p>
                    <a class=" text-light mr-3" href="<?php echo the_field('vezi_produsul') ?>" ><span>Vezi produsul</span></a>
                    <a class=" text-light mx-3 declaratie" href="<?php echo the_field('vezi_produsul') ?>" ><span>Declaratie nutritionala</span></a>
                    <a class=" text-light ml-3 beneficii" href="<?php echo the_field('vezi_produsul') ?>"><span>Beneficii</span></a>
                </p>
            </div>

        </div>

    </div>
</div>
</div>

<!--  Slide -->

<?

endwhile;

?>



<?
wp_reset_postdata();
?>
</div>

<progress-ring class="d-none d-sm-block" stroke="1" radius="8" progress="0"></progress-ring>

<div class="d-block d-sm-none fixed-dots" >
    <div class="row">
        <div class="col">
            <div class="d-inline-flex justify-content-start pt-2 mt-1 pl-3 small">
                <?php echo do_shortcode( '[cn-social-icon display="horizontal"]' )?>
            </div>
        </div>
        <div class="col-7">
            <div class="d-inline-flex justify-content-end pt-2 mt-1 pr-3 small">
                Copyright © 2011-2019 Savoria
            </div>
        </div>
    </div>
</div>




<div class="container">
    <?php /* <div class="wrap">
    <div id="primary" class="content-area  <?php
    if(get_field('increase_page_remove_padding_top')){echo ' pt-0 ';}
    if(get_field('increase_page_remove_padding_bottom')){echo ' pb-0 ';}
    ?>">
    <main id="main" class="site-main" role="main">
    <?php if (have_posts()) { ?>
    <div class="post-wrap">
    <?php while ( have_posts() ) :  the_post();	 ?>

    <?php //  get_template_part( 'template-parts/page/content', 'page' ); ?>

    <?php endwhile; ?>
    </div>
    <?php }; ?>
    </main>
    </div>
    </div> */ ?>

    <style media="screen">
    body {
        min-height: 100%;
        webkit-overflow-scrolling: touch;
        /* overflow:hidden; */
        margin: 0;
        padding: 0;
        /* background: url(/wp-content/uploads/2019/08/background-green.jpg) no-repeat center center fixed; */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    html {
        height: 100%;
    }
    #site-footer{
        display:none;
    }
    .fixed-dots{
        position:fixed;
        bottom:0;
        width:100%;
        border-top:1px solid white;
        height:50px;
        color:white;
    }
    img.fixed-middle {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 311px;
        height: 650px;
        margin-top: -300px;
        margin-left: -155px;
        z-index: 999;
    }
    .background-style{
        background-size:cover;
        background-repeat:no-repeat;
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

    .hover-homepage > a  {
        padding:10px 15px;
        border:1px solid white;
        border-radius: 25px;
        -webkit-transition: all ease 0.8s;
        -moz-transition: all ease 0.8s;
        transition: all ease 0.8s;
        text-decoration:none;
    }

    .hover-homepage > a:hover  {
        box-shadow: inset 250px 0 0 0 #fff;
        color:black !important;
    }

    .hover-homepage > a > span:hover {
        z-index:999;
    }

    ul.cnss-social-icon li.cn-fa-icon a{
        background-color:transparent !important;
    }
    .slick-dots{
        bottom: 50px;
    }
    .slick-dotted.slick-slider{
        margin-bottom:0;
    }
    .center-vertical{
        /* margin: auto;
        width: 50%;
        padding: 10px;
        margin-top: -25px; */
    }
    .slick-dots{
        display:flex;
        width: 420px;
        margin: auto;
        position:relative;
        background:#002443;
        border-radius:25px;
        border:1px solid #B49B66;
        padding: 13px 10px 13px 10px;
    }
    .slick-dots li.slick-active button:before{
        background:white;
        border:1px solid #B49B66;
        opacity:1;
        color:transparent;
    }
    .slick-dots li button:before{
        font-size:12px !important;
        border:1px solid #B49B66;
        border-radius:50%
    }
    .slick-dots li button:before{
        color:transparent;
        opacity:1;
    }
    .slick-dots li,
    .slick-dots li button,
    .slick-dots li button:before{
        width:12px !important;
        height:12px !important;
    }
    .slick-dots{
        position: absolute;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 420px; /* Need a specific value to work */
    }
    /* Extra extra extra large devices (large desktops, 1200px and up) */

    /* progress bar */
    .slider-progress {
        display:none;
        opacity:0;
    }

    progress-ring{
        position:absolute;
        right:25px;
        top:11px;

    }

    .slider-progress .progress {
        width: 0%;
        height: 3px;
        border:1px solid red;
    }

    .absolute-content{
        position: absolute;
        top: 35%;
        left: 25%;
    }


    /* video */
    /* .about-video-container {
    position: inherit;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #000;
    } */

    /* video-end */
    p.small > a  {
        display:inline-block;
    }

    /* media querry */

    @media (min-width: 1800px) {

    }
    @media (max-width: 1400px) {
        /* body{
        overflow:hidden;
        } */
        img.fixed-middle{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 251px;
            height: 524px;
            margin-top: -203px;
            margin-left: -128px;
            z-index: 999;
        }
    }
    @media (max-width: 500px) {
        body {
            overflow:hidden;
        }
        p.small > a  {
            display:table-cell !important;
        }
        img.fixed-middle {
            position: absolute;
            top: 0% !important;
            left: 95%;
            width: 31%;
            height: auto;
            /*margin-top: -290px;*/
            margin-left: -125px;
            z-index: 999;
        }
        .absolute-content{
            position: relative !important;
            top: 25px  !important;
            left: 25px  !important;
        }
        .slick-dots{
            display: flex;
            justify-content: center;
            width: 100%;
            margin: auto;
            position: fixed;
            background: transparent;
            border-radius: 25px;
            border: none;
            padding: 13px 10px 13px 10px;
            bottom: 50px;
        }
        .slick-dots li button:before{
            border: 1px solid black;
        }
        .slide-title,
        .slider-progress{
            display:none;
        }
        .absolute-content > p.h2{
            font-size:24px;
        }
        .absolute-content > p.display-3.text-light{
            font-size:32px;
        }
        .absolute-content > p.text-light.h4{
            font-size:18px;
            /* padding-right:50px; */
        }
        p.small.mt-5.hover-homepage {
            margin-top: 20px !important;
        }
        a.text-light.mx-3{
            margin:0 !important;
        }
    }

    @media (min-width: 700px) {
        #myVideo {
            position:absolute;
            width: 100%;
            height: 110vh;
            object-fit: cover;
        }
    }
    @media (min-width:500px) and (max-width:590px)  {
        img.fixed-middle{
            top:-50px !important;;
            /* margin-top:100px; */
        }
    }

    @media (max-width:1200px) and (min-width:700px)  {
        p.small > a {
            display: table-cell !important;
        }
        img.fixed-middle{
            /* width: 178px;
            height: 430px;
            margin-left: -92px; */

        }

        .absolute-content > p.h4{
            font-size: 18px;
        }
    }

    @media (min-width:600px) and (max-width:1200px)  {
        .fix-middle-image{
            background-position: 10% !important;
        }
        .absolute-content {
            top: 20%;
            left: 5%;
        }
    }

    @media (max-height:800px)  {
        .fix-middle-image{
            background-size: 220px auto !important;
        }
    }

    @media (max-height:780px)  {
        .fix-middle-image{
            background-size: 180px auto !important;
        }
        .absolute-content {
            top: 25%;
            left: 20%;
        }
    }

    @media (min-width:2200px) and (min-height: 1100px )  {
        .fix-middle-image{
            background-size: 300px auto !important;
        }
    }


    @media (max-width: 360px) {
        img.fixed-middle {
            top: 6% !important;
        }

    }

    @media (max-width: 320px) {
        img.fixed-middle {
            top: 15% !important;
            width: 26%;
        }

    }



    /* media- querry-end */


    .background-style.backgroud-style-dynamic-padding:before {
        content: ' ';
        width: 100%;
        position: fixed;
        height: 800%;
        background: url("/wp-content/uploads/2019/09/noisy-texture-100x100-o7.000000000000001-d19-c-f34379-t1.png") repeat center center fixed;
    }


    /* hover-buttons */

    nav.sub ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav.sub ul li {
        --c: white;
        color: white;
        font-size: 12px;
        border: 1px solid var(--c);
        border-radius: 1.5rem;
        width: 12em;
        height: 3em;
        letter-spacing: 0.1em;
        text-align: center;
        line-height: 3em;
        position: relative;
        overflow: hidden;
        z-index: 1;
        transition: 0.5s;
        margin: 1em 1em 1em 0;
        display:inline-flex;
        justify-content:center;
    }
    .declaratie > li{
        width: 15em !important;
    }


    nav.sub ul li span {
        position: absolute;
        width: 25%;
        height: 100%;
        background-color: var(--c);
        transform: translateY(150%);
        border-radius: 50%;
        left: calc((var(--n) - 1) * 25%);
        transition: 0.5s;
        transition-delay: calc((var(--n) - 1) * 0.1s);
        z-index: -1;
    }

    nav.sub ul li:hover {
        color: black;
    }

    nav.sub ul li:hover span {
        transform: translateY(0) scale(2);
    }

    nav.sub ul li span:nth-child(1) {
        --n: 1;
    }

    nav.sub ul li span:nth-child(2) {
        --n: 2;
    }

    nav.sub ul li span:nth-child(3) {
        --n: 3;
    }

    nav.sub ul li span:nth-child(4) {
        --n: 4;
    }

    /* hover-buttons-end */




</style>

<script type="text/javascript">
jQuery(window).on('resize',function() {
    var slick_slider = jQuery('.increase-gallery-slick-slider').slick({
        dots: true,
        infinite: true,
        speed: 800,
        fade: true,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        accessibility: false,
        arrows:  false,
        lazyLoad: 'ondemand',
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplay: false,
        autoplaySpeed: 8000,
        touchMove: true,
        swipe: true,
        swipeToSlide: true,
    });

    var scrollCount = null
    var scroll = null

    slick_slider.on('afterChange', function(event, slick, currentSlide, nextSlide, lazyInstance){
        jQuery('.lazy').Lazy();
    });

    var windowH = window.innerHeight;
    var headerH = document.getElementById("masthead").clientHeight;
    var contentH = document.getElementById("content").clientHeight;
    var dynamicPx = windowH - headerH - contentH;

    if (jQuery(window).width() > 700) {
        jQuery(".dynamic-desktop-padding").css("padding-bottom", dynamicPx + 27);
        jQuery(".dynamic-height").css("height", dynamicPx + 27 +  "px");


    }

    else if (jQuery(window).width() < 900 && jQuery(window).width() > 600) {
        jQuery(".dynamic-height").css("height", "100%");
        jQuery(".dynamic-padding").css("padding-bottom", dynamicPx  + -200 +   "px");
        jQuery(".backgroud-style-dynamic-padding").css("padding-bottom", dynamicPx + 200 + "px");
        jQuery("img.fixed-middle").css("left", 25 + '%');

    }

    else if (jQuery(window).width() < 600 && jQuery(window).width() > 500) {
        jQuery(".dynamic-height").css("height", "100%");
        jQuery(".dynamic-padding").css("padding-bottom", dynamicPx  + -400 +   "px");
        jQuery(".backgroud-style-dynamic-padding").css("padding-bottom", + 800  + "px");
        jQuery("img.fixed-middle").css("top", 0);
    }




    else if (jQuery(window).width() <= 500 && jQuery(window).width() > 400) {
        jQuery(".dynamic-height").css("height", "100%");
        jQuery(".dynamic-padding").css("padding-bottom", dynamicPx + -100 +  "px");
        jQuery(".backgroud-style-dynamic-padding").css("padding-bottom", dynamicPx + 100 + "px");
    }

    else if (jQuery(window).width() <= 400) {
        jQuery(".dynamic-height").css("height", "100%");
        jQuery(".dynamic-padding").css("padding-bottom", dynamicPx  + -100 +  "px");
        jQuery(".backgroud-style-dynamic-padding").css("padding-bottom", dynamicPx + 100 + "px");
    }



    jQuery("ul > li:last-child").eq(0).after('<div class="slide-title" style="position: absolute; right: 70px; bottom: 7px; color:white;">Toast Fin</div>');

    jQuery("div.slide-title").eq(0).after('<div class="slider-progress"><div class="progress"></div></div>');


    const mq = window.matchMedia( "(min-width: 1200px)" );

    if (mq.matches) {


        slick_slider.on('wheel', (function(e) {
            e.preventDefault();

            clearTimeout(scroll)
            scroll = setTimeout(function(){scrollCount=0;}, 800);

            if(scrollCount) return 0;
            scrollCount=1;

            if (e.originalEvent.deltaY > 0) {

                jQuery(this).slick('slickNext');
            } else {

                jQuery(this).slick('slickPrev');
            }
        }));


    }

    slick_slider.on("beforeChange", function(){

        startProgressbar();

    });

    slick_slider.on("afterChange", function(){


        if (jQuery("#slickid-1").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast Fin");
        }

        if (jQuery("#slickid-2").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast ACTIV+");
        }

        if (jQuery("#slickid-3").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast cu secară");
        }

        if (jQuery("#slickid-4").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast Fibre");
        }

        if (jQuery("#slickid-5").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast cu porumb");
        }

        if (jQuery("#slickid-6").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast Bio");
        }

        if (jQuery("#slickid-7").hasClass("slick-active")){
            jQuery('.slide-title').text("Painea copiilor");
        }

        if (jQuery("#slickid-8").hasClass("slick-active")){
            jQuery('.slide-title').text("Toast Integral");
        }

    })

    /* progress bar */


    var time = 8;
    var $bar,
    $circ,
    $slick,
    isPause,
    tick,
    percentTime;

    $slick =  jQuery('.increase-gallery-slick-slider');

    $bar = jQuery('.slider-progress .progress');

    $circ = jQuery('progress-ring')

    percentTime = 0;


    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);
    }

    function interval() {

        if(isPause === false) {
            percentTime += 1 / (time+0.1);
            $bar.css({
                width: percentTime+"%"
            });

            $circ.attr('progress', percentTime);

            if(percentTime >= 100)
            {
                $slick.slick('slickNext');
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {

        $bar.css({
            width: 0+'%'

        });

        clearTimeout(tick);

    }

    startProgressbar();

    jQuery("progress-ring").appendTo(".slick-dots");





});


class ProgressRing extends HTMLElement {
    constructor() {
        super();
        const stroke = this.getAttribute('stroke');
        const radius = this.getAttribute('radius');
        const normalizedRadius = radius - stroke * 2;
        this._circumference = normalizedRadius * 2 * Math.PI;

        this._root = this.attachShadow({mode: 'open'});


        this._root.innerHTML = `
        <svg
        height="${radius * 2}"
        width="${radius * 2}"
        >
        <circle
        stroke="#B49B66"
        stroke-dasharray="${this._circumference} ${this._circumference}"
        style="stroke-dashoffset:${this._circumference}"
        stroke-width="${stroke}"
        fill="transparent"
        r="${normalizedRadius}"
        cx="${radius}"
        cy="${radius}"
        />
        </svg>

        <style>
        circle {
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
        </style>
        `;
    }

    setProgress(percent) {
        const offset = this._circumference - (percent / 100 * this._circumference);
        const circle = this._root.querySelector('circle');
        circle.style.strokeDashoffset = offset;
    }

    static get observedAttributes() {
        return ['progress'];
    }

    attributeChangedCallback(name, oldValue, newValue) {
        if (name === 'progress') {
            this.setProgress(newValue);
        }

    }



}




/* function callback */
jQuery(document).ready(function($){


    $( ".declaratie" ).on( "click", function() {
        sessionStorage.setItem("Declaratie", "true");
    });

    $( ".beneficii" ).on( "click", function() {
        sessionStorage.setItem("Beneficii", "true");
    });

    $(window).trigger('resize');
    jQuery(window).resize(function(){location.reload();});


    window.customElements.define('progress-ring', ProgressRing);
    //document.registerElement('progress-ring');
    //window.CustomElementRegistry.define('progress-ring', ProgressRing);
    //window.customElements.define('progress-ring', class extends HTMLElement {...});

});


</script>



<?php get_footer(); ?>
