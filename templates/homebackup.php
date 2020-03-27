
<?php get_header(); ?>

</div><!-- .container -->


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
        <img class="fixed-middle" src="<?php echo the_field('fixed_middle_image'); ?>">
        <div class="row no-gutters">


            <div class="col-12 col-sm-6 background-style" style="background-image:url(<?php echo the_field('left_image'); ?>)">

                <?php if( get_field('slider_video') ): ?>
                    <div class="about-video-container ">
                        <video autoplay="" muted="" loop="" id="myVideo" class="dynamic-height" >
                            <source src="<?php echo the_field('slider_video'); ?>" type="video/mp4">
                            </video>
                        </div>
                    <?php endif; ?>

                    <div class="dynamic-padding"></div>
                </div>

                <div class="col-12 col-sm-6 background-style" style="background-image:url(<?php echo the_field('right_image') ?>)">

                    <div class="absolute-content">
                        <p class="h2"><?php echo the_field('main_title'); ?></p>
                        <p class="display-3 text-light"><?php echo the_field('subtitle'); ?></p>
                        <p class="text-light h4"><?php echo the_field('subtitle_description'); ?></p>
                        <p class="small mt-5 hover-homepage">
                            <a class=" text-light mr-3" href="<?php echo the_field('vezi_produsul') ?>">Vezi produsul</a> <a class=" text-light mx-3" href="#">Declaratie nutritionala</a> <a class=" text-light mx-3" href="#">Beneficii</a>
                        </p>
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


<div class="d-block d-sm-none" style="
position:fixed;
bottom:0;
width:100%;
border-top:1px solid white;
height:50px;
color:white">
<div class="row">
    <div class="col">
        <div class="d-inline-flex justify-content-start pt-2 mt-1 pl-3 small">
            [social]
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
        background: url(/wp-content/uploads/2019/08/background-green.jpg) no-repeat center center fixed;
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

    img.fixed-middle {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 225px;
        height: 556px;
        margin-top: -256px;
        margin-left: -110px;
        z-index: 999999999999999999999;
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

    .hover-homepage > a {
        padding:10px 15px;
        border: 1px solid transparent;
        border-radius: 25px;
        transition:0.3s;
        text-decoration:none;
    }


    .hover-homepage > a:hover  {
        padding:10px 15px;
        border:1px solid #B49B66;
        border-radius: 25px;
        transition:0.3s;
        text-decoration:none;
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
        width: 380px;
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
        width: 380px; /* Need a specific value to work */
    }

    /* Extra extra extra large devices (large desktops, 1200px and up) */
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
            width: 205px;
            height: 477px;
            margin-top: -203px;
            margin-left: -102px;
            z-index: 999999999999999999999;
        }
    }


    @media (max-width: 500px) {

        p.small > a  {
            display:table-cell;
        }

        img.fixed-middle {
            position: absolute;
            top: 65% !important;
            left: 95%;
            width: 31%;
            height: auto;
            margin-top: -290px;
            margin-left: -125px;
            z-index: 999999999999999999999;

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

    /* @media (max-height: 1200px) {
    .absolute-content{
    position: absolute;
    top: 20%;
    left: 25%;
}
} */

/* video */

.about-video-container {
    position: inherit;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #000;
}


@media (min-width: 1024px) {
    #myVideo {
        position:absolute;
        width: 100%;
        height: 110vh;
        object-fit: cover;
    }
}

/* video */



p.small > a  {
    display:inline-block;
}


</style>

<script type="text/javascript">
jQuery(document).ready(function($){





    var slick_slider = jQuery('.increase-gallery-slick-slider').slick({
        dots: true,
        //     	customPaging : function(slider, i) {
        //     var slide = slider.$slides[i],
        //         pagination = $(slide).data('title');
        //     return '<div>' + pagination + '</div>';
        // },
        infinite: true,
        speed: 800,
        fade: true,
        cssEase: 'linear',
        accessibility: false,
        arrows:  false,
        lazyLoad: 'ondemand',
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplay: true,
        autoplaySpeed: 5000,
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
    // console.log("window height e", windowH);
    // console.log("masthead e", headerH);
    var dynamicPx = windowH - headerH - contentH ;

    if ($(window).width() > 500) {
        jQuery(".dynamic-padding").css("padding-bottom", dynamicPx + 27);
        jQuery(".dynamic-height").css("height", dynamicPx + 27 +  "px");
    } else if ($(window).width() < 500) {
        //    jQuery(".dynamic-height").css("height", dynamicPx + "px");
        jQuery(".dynamic-height").css("height", "100%");
        jQuery(".dynamic-padding").css("padding-bottom", dynamicPx / 1.2);
        jQuery(".absolute-content").css("padding-bottom", dynamicPx);
        jQuery("img.fixed-middle").css("top", dynamicPx);
    }


    $("ul > li:last-child").eq(0).after('<div class="slide-title" style="position: absolute; right: 70px; bottom: 7px; color:white;">Toast Fin</div>');

    $("div.slide-title").eq(0).after('<div class="slider-progress"><div class="progress"></div></div>');


    const mq = window.matchMedia( "(min-width: 1200px)" );

    if (mq.matches) {

        //
        // function wait(ms){
        //    var start = new Date().getTime();
        //    var end = start;
        //    while(end < start + ms) {
        //      end = new Date().getTime();
        //   }
        // }


        slick_slider.on('wheel', (function(e) {
            e.preventDefault();

            clearTimeout(scroll)
            scroll = setTimeout(function(){scrollCount=0;}, 200);

            if(scrollCount) return 0;
            scrollCount=1;

            if (e.originalEvent.deltaY > 0) {
                // wait(800);
                $(this).slick('slickNext');
            } else {
                // wait(800);
                $(this).slick('slickPrev');
            }
        }));


    }





    slick_slider.on("beforeChange", function(){
        startProgressbar();

        if ($("#slickid-1").hasClass("slick-active")){
            $('.slide-title').text("Toast Activ");
        }

        if ($("#slickid-2").hasClass("slick-active")){
            $('.slide-title').text("Toast Integral");
        }

        if ($("#slickid-3").hasClass("slick-active")){
            $('.slide-title').text("Toast Fin");
        }

    })



    //
    //  // On before slide change match active thumbnail to current slide
    //  $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    //  	var mySlideNumber = nextSlide;
    //  	$('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
    // });

    //UPDATED

    // $('.slider').on('afterChange', function(event, slick, currentSlide){
    //   $('.content').hide();
    //   $('.content[data-id=' + (currentSlide + 1) + ']').show();
    // });
    //


    /* progress bar */
    //var time = 999;

    var time = 5;
    var $bar,
    $circ,
    $slick,
    isPause,
    tick,
    percentTime;

    $slick =  jQuery('.increase-gallery-slick-slider');

    $bar = $('.slider-progress .progress');

    $circ = $('progress-ring')

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

        //$("div.slide-title").eq(0).after('<div class="slider-progress"><div class="progress"></div></div>');

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

window.customElements.define('progress-ring', ProgressRing);





</script>



<?php get_footer();
