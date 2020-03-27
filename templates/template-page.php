<?php /* Template Name: Custom Page*/ ?>
<?php get_header(); ?>

<div class="keep-it-essential" style="display:none;"> <h1>Keep it essential</h1> </div>
<div class="absolute-top-custom">
    <img src="<?php echo the_field('custom_bread'); ?>" alt="">
</div>
<div class="row row-fullheight">
    <div class="col-12 col-xl-2 align-self-center tablet-center">
        <img class="mb-4 fixed-mobile-middle" src="<?php echo the_field('fixed_mobile_middle'); ?>" alt="">
    </div>

    <div class="col-12 col-xl-1 align-self-center">

    </div>



    <div class="col-12 col-xl-9 align-self-center padding-top-200">


        <div class="paine1" style="position:absolute; bottom: -10px; left: 50%;">
            <img src="<?php echo the_field('paine_1'); ?>" alt="">
        </div>

        <div class="paine2" style="position:absolute; top:0; right: 5%;">
            <img src="<?php echo the_field('paine_2'); ?>" alt="">
        </div>



        <div class="row">


            <div style="
            position: fixed;
            right: 0;
            top: 50%;
            z-index: 9;" class="col-md-2 mb-3 d-none d-lg-block">

            <div  class="scroll-downs">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
        </div>


        <div style="
        position: fixed;
        right: 0;
        top: 50%;
        z-index: 9;" class="col-md-2 mb-3 d-none d-lg-block">



        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
            <li class="nav-item nav-item-1">
                <a class="nav-link active small text-light float-right nav-1" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span class="visibility-hidden">Declaratie nutritionala</span>   <span class="ml-2 dot"></span></a>
            </li>
            <li class="nav-item nav-item-2">
                <a class="nav-link small text-light float-right nav-2 " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="visibility-hidden">Ingrediente</span> <span class="ml-2 dot"></span></a>
            </li>
            <li class="nav-item nav-item-3">
                <a class="nav-link small text-light float-right nav-3" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span class="visibility-hidden">Nutritie</span><span class="ml-2 dot "></span></a>
            </li>
        </ul>
    </div>

    <!-- /.col-md-4 -->
    <div class="col top-margin-mobile" >
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active hide-mobile " id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="absolute-content">
                    <p class="h2 ">Savoria</p>
                    <p class="display-3 text-light "><?php echo the_title();?></p>
                    <p class="text-light h6 mb-0"><?php echo the_field('main_text'); ?></p>
                </div>
                <div class="d-block d-sm-none small text-primary mt-4">
                    <div class="d-inline-block mr-4">Declaratie nutritionala </div><div class="d-inline-block mr-4"> Ingrediente</div><div class="d-inline-block"> Nutritie</div>


                </div>


                <div class="svg-row padding-top-60">

                    <div class="center-relative col p-0 mx-1">

                        <span class="vertical-top text-primary" ><?php echo the_field ('paine_grame'); ?></span>

                    </div>

                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj1'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub1'); ?>
                        </div>
                    </div>


                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj2'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub2'); ?>

                        </div>
                    </div>

                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div style="margin-top:15px;" class="centered small">

                            <?php echo the_field ('paine_gramaj3'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub3'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj4'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub4'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj6'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub6'); ?>

                        </div>

                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj7'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub7'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj8'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub8'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj9'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub9'); ?>

                        </div>
                    </div>
                </div>
                <div class="svg-row mt-4">
                    <div style="width:66px;" class="center-relative col p-0 mx-1 d-inline-block">
                        <p class="text-primary d-inline-block" >% CR*<br/>per 100g</p>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj10'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub10'); ?>

                        </div>
                    </div>
                    <div class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj11'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub11'); ?>

                        </div>
                    </div>

                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj12'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub12'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj13'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub13'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj14'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub14'); ?>

                        </div>

                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj15'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub15'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj16'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub16'); ?>

                        </div>
                    </div>
                    <div  class="center-relative col p-0 mx-1">
                        <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                        <div class="centered small">
                            <?php echo the_field ('paine_gramaj17'); ?>

                        </div>
                        <div class="small text-primary centered centered-bottom">
                            <?php echo the_field ('paine_gramaj_sub17'); ?>

                        </div>
                    </div>




                </div>


                <p class="text-primary small pt-4"><?php echo the_field ('paine_gramaj_subtitle'); ?></p>


            </div>



            <div class="tab-pane fade hide-mobile" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="absolute-content">
                    <p class="h2">Savoria</p>
                    <p class="display-3 text-light "><?php echo the_title();?></p>
                    <div class="row">
                        <div class="col-5">
                            <?php echo the_field ('tab_list'); ?>
                        </div>
                        <div class="col-5">
                            <?php echo the_field ('tab_list2'); ?>
                            <img src="<?php echo the_field ('tab_list_img'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade hide-mobile" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                <div class="paine3" style="position:absolute;     top: -30%;
                right: 0;">
                <img src="<?php echo the_field ('paine_3'); ?>" alt="">
            </div>



            <div class="absolute-content">
                <p class="h2">Savoria</p>
                <p class="display-3 text-light"><?php echo the_title();?></p>
                <p class="h5 text-light">Pentru o dietă echilibrată, nutriționiștii ne recomandă:</p>
                <div class="row pt-4 text-primary">
                    <div class="col-3">

                        <?php echo the_field ('tab3col-text1'); ?>

                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <?php echo the_field ('tab3col-text2'); ?>

                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <?php echo the_field ('tab3col-text3'); ?>

                    </div>
                    <div class="col-1"></div>
                </div>

                <p class="h5 text-light pt-4"><?php echo the_field ('tab3subtitle-text1'); ?></p>
                <div class="row pt-4 text-primary">
                    <div class="col-3">
                        <?php //echo the_field ('tab3col2-text1'); ?>
                        Pâinea ajută la menținerea greutății sub control
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <?php // echo the_field ('tab3col2-text2'); ?>
                        Pâinea ajută și susține funcționarea normală a tranzitului intestinal

                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <?php //echo the_field ('tab3col2-text3'); ?>
                        Pâinea stimulează creierului și susține sănătatea funcțiilor cognitive

                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row pt-4 text-light small">
                    <div class="col-4">
                        <?php //echo the_field ('tab3col3-text1'); ?>
                        Carbohidrații și proteinele provenite din pâine contribuie la restabilirea dezechilibrului organismului, ținând sub control, prin acțiunea lor, fluctuațiile de greutate. Compoziția de pâine care combină fibrele și glucidele complexe, oferă o senzație de sațietate îndelungată care previne nevoia gustărilor dintre mese, reducând astfel senzația de foame. Acesta este un avantaj real pentru persoanele care aspiră la un stil de viață sănătos sau care urmează diete alimentare stricte.
                    </div>

                    <div class="col-4">
                        <?php // echo the_field ('tab3col3-text2'); ?>
                        Prin conținutul ridicat de minerale și fibre, pâinea este o sursă indispensabilă pentru buna sănătate a sistemului digestiv al organismului, contribuind la funcționarea tranzitului intestinal. Pâinea Savoria conține atât fibre solubile, care au rol în modularea absorbției de glucide și lipide, cât și fibre insolubile, care facilitează tranzitul intestinal și contribuie la sănătatea colonului.
                    </div>

                    <div class="col-4">
                        <?php //echo the_field ('tab3col3-text3'); ?>
                        Cu toate că reprezintă doar 2% din greutatea corporală, creierul folosește aproximativ 20% din energia totală a organismului, atunci când se află în repaus. Glucidele complexe ale pâinii sunt principala sursă de energie în metabolizarea și buna funcționare a creierului, cât și a sistemului nervos central, ajutând totodată și la stocarea energiei de către creier și susținând performanța acestuia.
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.col-md-8 -->
</div>



<!------------- mobile ------------------>


<!-- mobile part 1 -->

<div class="d-block d-xl-none padding-top-200-mobile">
    <div class="absolute-content">
        <p class="h2 d-none d-lg-block">Savoria</p>
        <p class="display-3 text-light my-4"><?php echo the_title();?></p>
        <p class="text-light h6 mb-0"><?php echo the_field('main_text'); ?></p>
    </div>
    <div class="d-block d-xl-none small text-primary mt-4">
        <div class="d-inline-block mr-4"><a href="#declaratie">Declaratie nutritionala</a></div>
        <div class="d-inline-block mr-4"><a href="#ingrediente">Ingrediente</a></div>
        <div class="d-inline-block"><a href="#nutritie">Nutritie</a></div>
    </div>


    <div class="tab-content" id="myTabContent2">
        <div class="tab-pane fade show active" id="mobile_part1" role="tabpanel" aria-labelledby="mobile_part1-tab">


            <div id="declaratie" class="svg-row padding-top-60">

                <div class="">
                    <span class="vertical-top text-primary mr-4" >per 100g</span>
                    <span class="vertical-top text-primary ml-4" >% CR* Per 100 g</span>
                </div>




                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj1'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub1'); ?>
                    </div>
                </div>


                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj2'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub2'); ?>
                    </div>
                </div>

                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj3'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub3'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj4'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub4'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj6'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub6'); ?>
                    </div>

                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj7'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub7'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj8'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub8'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj9'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom ">
                        <?php echo the_field('paine_gramaj_sub9'); ?>
                    </div>
                </div>
            </div>

            <p class="text-primary small pt-4">*CR consumer de referent zilnic pentru un adult (8400kJ / 2000 kcal)</p>

        </div>
        <div class="tab-pane fade" id="mobile_part2" role="tabpanel" aria-labelledby="mobile_part2-tab">

            <div class="svg-row mt-4 padding-top-60">
                <div class="">
                    <span class="vertical-top text-primary mr-4" >per 100g</span>
                    <span class="vertical-top text-primary ml-4" >% CR* Per 100 g</span>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj10'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub10'); ?>
                    </div>
                </div>
                <div class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj11'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub11'); ?>
                    </div>
                </div>

                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj12'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub12'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj13'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub13'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj14'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub14'); ?>
                    </div>

                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj15'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub15'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj16'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub16'); ?>
                    </div>
                </div>
                <div  class="center-relative col p-0 mx-1">
                    <img src="/wp-content/uploads/2019/08/paine-outline.svg" height="100" width="100" alt="">
                    <div class="centered small">
                        <?php echo the_field('paine_gramaj17'); ?>
                    </div>
                    <div class="small text-primary centered centered-bottom">
                        <?php echo the_field('paine_gramaj_sub17'); ?>
                    </div>
                </div>
            </div>
            <p class="text-primary small"><?php echo the_field('paine_gramaj_subtitle'); ?></p>
        </div>
    </div>

</div>

<ul class="nav nav-tabs d-flex d-lg-none" id="myTab" role="tablist" style="
display: flex;
justify-content: center;
">
<li class="nav-item" style="display:inline; width:20px;">
    <a class="nav-link active" id="mobile_part1-tab" data-toggle="tab" href="#mobile_part1" role="tab" aria-controls="mobile_part1" aria-selected="true"><span class=" dot p-2"></span></a>
</li>
<li class="nav-item" style="display:inline; width:20px;">
    <a class="nav-link" id="mobile_part2-tab" data-toggle="tab" href="#mobile_part2" role="tab" aria-controls="mobile_part2" aria-selected="false"><span class="ml-3 dot p-2 "></span></a>
</li>
</ul>


<!-- mobile end part 1-->

<!-- mobile part 2 -->
<div id="ingrediente" class="mt-4 mb-2 d-block d-xl-none">
    <div class="text-light position-relative mb-4">
        Ingrediente

        <div>
            <img class="tablet-abs" style="
            position: absolute;
            top: -200px;
            right: -70%;
            z-index:-1;" src="/wp-content/uploads/2019/08/Top-bread.png" alt="">
        </div>

    </div>

    <ul class="text-light h6 d-block d-xl-none ">
        <li>Bogată în fibre si Magneziu,</li>
        <li>făină albă de grâu 650,</li>
        <li>făină neagră de grâu 1350,</li>
        <li>apă,</li>
        <li>tarate de grâu,</li>
        <li>făină graham,</li>
        <li>gluten din grâu,</li>
        <li>făină de secară,</li>
        <li>făină de soia,</li>
        <li>făină de malț din orz,</li>
        <li>făină de malț din secară,</li>
        <li>sirop de glucoză,</li>
        <li>maia pudra de secara,</li>
        <li>fibre de citrice,</li>
        <li>enzime,</li>
        <li>ulei vegetal,</li>
        <li>drojdie,</li>
        <li>sare iodată.</li>
        <li>Conține: gluten și soia.</li>
    </ul>

    <div class="row show-tablet">
        <div class="col-6">

            <ul class="text-light h6  ">
                <li>Bogată în fibre si Magneziu,</li>
                <li>făină albă de grâu 650,</li>
                <li>făină neagră de grâu 1350,</li>
                <li>apă,</li>
                <li>tarate de grâu,</li>
                <li>făină graham,</li>
                <li>gluten din grâu,</li>
                <li>făină de secară,</li>
                <li>făină de soia,</li>
                <li>făină de malț din orz,</li>

            </ul>
        </div>
        <div class="col-6">
            <ul class="text-light h6  ">

                <li>făină de malț din secară,</li>
                <li>sirop de glucoză,</li>
                <li>maia pudra de secara,</li>
                <li>fibre de citrice,</li>
                <li>enzime,</li>
                <li>ulei vegetal,</li>
                <li>drojdie,</li>
                <li>sare iodată.</li>
                <li>Conține: gluten și soia.</li>
            </ul>
        </div>
    </div>

    <img class="tablet-width" style="
    width: 250px;
    position: absolute;
    right: -77px;
    " src="/wp-content/uploads/2019/08/grau.png" alt="">

</div>

<!-- mobile end part 2 -->



<!-- mobile part 3 -->


<div id="nutritie" class="d-block d-xl-none">


    <p class="h5 text-light" style="margin-top:250px;" >Pentru o dietă echilibrată, nutriționiștii ne recomandă:</p>
    <div class=" pt-4 text-primary">

        <p>50 – 55% din energia necesară să provină din carbohidrați, inclusiv zaharuri</p>


        <p>30 – 35% din energie să provină din lipide, inclusiv grasimi saturate</p>


        <p>10-15% din energie, din proteine</p>


    </div>

    <p class="h5 text-light pt-4">O dieta variată ne ajută să obținem acest echilibru. Orice aliment poate fi parte
        al unei diete sănătoase, echilibrate și plină de savoare.</p>
        <div class="pt-4 text-primary">

            <div class="tab-content" id="myTabContent2" >
                <div class="tab-pane fade show active" id="down_mobile_part1" role="tabpanel" aria-labelledby="down_mobile_part1-tab">

                    <p>Pâinea ajută la menținerea greutății sub control</p>

                    <div class="pt-4 text-light small">

                        <p class="h5 text-light">Carbohidrații și proteinele provenite din pâine contribuie la restabilirea dezechilibrului organismului, ținând sub control, prin acțiunea lor, fluctuațiile de greutate. Compoziția de pâine care combină fibrele și glucidele complexe, oferă o senzație de sațietate îndelungată care previne nevoia gustărilor dintre mese, reducând astfel senzația de foame. Acesta este un avantaj real pentru persoanele care aspiră la un stil de viață sănătos sau care urmează diete alimentare stricte.</p>

                    </div>
                </div>




                <div class="tab-pane fade" id="down_er_mobile_part2" role="tabpanel" aria-labelledby="down_er_mobile_part2-tab">

                    <p>Pâinea ajută și susține funcționarea normală a tranzitului intestinal</p>
                    <div class="pt-4 text-light small">
                        <p class="h5 text-light">Prin conținutul ridicat de minerale și fibre, pâinea este o sursă indispensabilă pentru buna sănătate a sistemului digestiv al organismului, contribuind la funcționarea tranzitului intestinal. Pâinea Savoria conține atât fibre solubile, care au rol în modularea absorbției de glucide și lipide, cât și fibre insolubile, care facilitează tranzitul intestinal și contribuie la sănătatea colonului.</p>
                    </div>
                </div>

                <div class="tab-pane fade" id="down_er_mobile_part3" role="tabpanel" aria-labelledby="down_er_mobile_part3-tab">

                    <p>Pâinea stimulează creierului și susține sănătatea funcțiilor cognitive</p>
                    <div class="pt-4 text-light small">

                        <p class="h5 text-light">Cu toate că reprezintă doar 2% din greutatea corporală, creierul folosește aproximativ 20% din energia totală a organismului, atunci când se află în repaus. Glucidele complexe ale pâinii sunt principala sursă de energie în metabolizarea și buna funcționare a creierului, cât și a sistemului nervos central, ajutând totodată și la stocarea energiei de către creier și susținând performanța acestuia.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="  d-flex d-lg-none justify-content-center mt-5 w-100 pb-5">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" style="display:inline; width:35px;">
            <a class="nav-link active" id="down_mobile_part1-tab" data-toggle="tab" href="#down_mobile_part1" role="tab" aria-controls="down_mobile_part1" aria-selected="true"><span class=" dot p-2"></span></a>
        </li>
        <li class="nav-item" style="display:inline; width:35px;">
            <a class="nav-link" id="down_er_mobile_part2-tab" data-toggle="tab" href="#down_er_mobile_part2" role="tab" aria-controls="down_er_mobile_part2" aria-selected="false"><span class=" dot p-2 "></span></a>
        </li>
        <li class="nav-item" style="display:inline; width:35px;">
            <a class="nav-link" id="down_er_mobile_part3-tab" data-toggle="tab" href="#down_er_mobile_part3" role="tab" aria-controls="down_er_mobile_part3" aria-selected="false"><span class=" dot p-2 "></span></a>
        </li>
    </ul>
</div>


<!-- mobile footer -->
<div class="d-block d-xl-none w-100" style="
border-top:1px solid white;
height:50px;
color:white">
<div class="row">
    <div class="col">
        <div class="d-inline-flex justify-content-start pt-2 mt-1 pl-3 small">
            <?php echo do_shortcode( '[cn-social-icon display="horizontal"]' )?>
        </div>
    </div>
    <div class="col-7 text-right">
        <div class="d-inline-flex justify-content-end pt-2 mt-1 pr-3 small">
            Copyright © 2011-2019 Savoria
        </div>
    </div>
</div>
</div>
<!-- mobile footer end -->



<!-- mobile part 3 end -->



<!------------- mobileend --------------->






<style media="screen">
body {
    min-height: 100%;
    margin: 0;
    padding: 0;
    background: <?php echo the_field('gradient_center_color'); ?>;
    background: -webkit-radial-gradient(center, <?php echo the_field('gradient_center_color'); ?>, <?php echo the_field('gradient_side_color'); ?>);
    background: -moz-radial-gradient(center, <?php echo the_field('gradient_center_color'); ?>, <?php echo the_field('gradient_side_color'); ?>);
    background: radial-gradient(ellipse at center, <?php echo the_field('gradient_center_color'); ?>, <?php echo the_field('gradient_side_color'); ?>);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

body:before {
    content: ' ';
    width: 100%;
    position: fixed;
    height: 800%;
    z-index: -1;
    background: url("/wp-content/uploads/2019/09/noisy-texture-100x100-o7.000000000000001-d19-c-f34379-t1.png") repeat center center fixed;
}

html {
    height: 100%;
}

.row-fullheight{
    height:100vh !important;
}

#site-footer{
    display:none;
}

img.fixed-middle {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 252px;
    height: 586px;
    margin-top: -270px;
    margin-left: -125px;
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
    margin-top: 25px;
    margin-left: -47px;
    z-index: 999999999999999999999;
}

.svg-row > img {
    margin: 5px 5px ;
}

.padding-top-60{
    padding-top:60px;
}

.center-relative{
    position: relative;
    text-align: center;
    color: white;
    width:100px;
    display:inline;
}

.centered {
    position: absolute;
    top: -10%;
    left: 50%;
    transform: translate(-50%, -100%);
}

.centered-bottom{
    transform: translate(-50%, 0);
    top:70%;
    left: 50%;
    white-space: nowrap
}
.vertical-top{
    vertical-align: top;
    line-height: 65px;
}
/* .line-0{
line-height: 0;
vertical-align:middle;
} */
.padding-top-200{
    padding-top:200px;
}

.absolute-top-custom{
    position: absolute;
    top: -116px;
    z-index: -1;
    left: -341px;
}

/*tabs-start */
/*tabs-end */

.dot {
    height: 7px;
    width: 7px;
    background-color: white;
    border-radius: 50%;
    display: inline-block;
}
li.nav-item{
    width: 200px;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
    background: transparent;
}
.visibility-hidden{
    opacity:0;

}
a.active > .visibility-hidden {
    opacity:1;

}
a.active > .dot{
    background:#002443;
}
a.nav-link{
    padding:0;
}

.show-tablet{
    display:none;
}

@media (max-width: 1200px) {

    .paine1{
        display:none;
    }

}

@media (max-width: 1000px) {
    .center-relative {
        display: inline-flex;
    }

    .centered-bottom,
    .centered{
        top: 50%;
    }

}



@media (min-width: 1400px) {
    .container {
        max-width: 1400px;
    }

    body{
        overflow:hidden;
    }

    .fixed-mobile-middle{
        position:absolute;
        height:550px;
        z-index:9;
        top: -250px;
        left: 30%;
    }
}

@media (max-width: 575px) {

    .center-relative{
        margin:15px;
    }

    .padding-top-200-mobile{
        padding-top:200px;
    }

    body{
        overflow-x:hidden;
    }
    .fixed-mobile-middle{
        position:absolute;
        height:400px;
        z-index:9;
        top:100px;
        left: 31%;

    }
    .top-margin-mobile{
        margin-top:250px;
    }
    p.display-3.text-light{
        font-size:32px;
    }
    p.text-light.h6.mb-0{
        font-size:14px;
    }
    .absolute-top-custom {
        position: absolute;
        top: -169px;
        z-index: -1;
        left: -135px;
    }
    .absolute-top-custom > img {
        height: 401px;
    }
    .paine2{
        display:none;
    }
    .paine1 {
        position: absolute;
        top: 619px;
        left: 65%;
        z-index: -1;
    }




}

@media (max-width: 1200px) {
    .hide-mobile{
        display:none !important;
    }
}

.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link{
    color:none;
    background-color:transparent;
    border:none;
}
.nav-tabs{
    border-bottom:none;
}

@media screen and (max-height:850px)  {
    .padding-top-200{
        padding-top:65px;

    }
    .navbar-brand > img{
        margin-top:15px;
    }
    div.col-md-2.mb-3.d-none.d-lg-block{
        top: 35% !important;
        right: 5% !important;
    }
    /* body{
    overflow-y:hidden;
    } */

}

@media (max-width:1400px) and (min-width:1100px) {


    div.col-md-2.mb-3.d-none.d-lg-block{
        top: 35% !important;
        right: 5% !important;
    }

    div#home{
        width: 120%;
    }
    .col.top-margin-mobile{
        margin-left: -120px;
    }
    .absolute-top-custom{
        position: absolute;
        top: -250px;
        z-index: -1;
        left: -500px;

    }
}


@media (min-width: 575px) and (max-width: 700px) {
    .fixed-mobile-middle {
        position: absolute;
        height: 400px;
        z-index: 9;
        top: 100px;
        left: 33%;
        margin-top:87px;
    }
    .padding-top-200{
        padding-top:600px;
    }
    body{
        overflow-x: hidden;
    }
    .paine1{
        display:none;
    }
}



@media (max-width:1200px) and (min-width:900px){
    .tablet-center > img {
        width: 200px !important;
    }
    .tablet-center {
        display: flex;
        justify-content: center;
        margin-top: 121px;
    }
    .padding-top-200{
        padding:0;
    }
    body{
        overflow-x: hidden;
    }
    .col-md-2.mb-3.d-none.d-lg-block{
        display:none !important;
    }
}


@media (max-width:1200px) and (min-width:700px) {
    .center-relative > img{
        /* margin-left:1.5rem;
        margin-right:1.5rem; */
    }
    .tablet-abs{
        top: 63px !important;
        left: -80% !important;
    }

    div.show-tablet{
        display:flex !important;
    }

    .tablet-center{
        display: flex;
        justify-content: center;
        margin-top: 121px;

    }

    .tablet-center > img {
        width: 200px !important;
    }

    .tablet-width{
        width: 345px !important;
    }

    .navbar-brand > img {
        position: absolute;
        top: 65px;
        left: 9%;
        width: 90px;
        height: 98px;
        margin-top: 0;
        margin-left: -47px;
        z-index: 999999999999999999999;
    }

    .absolute-top-custom {
        position: absolute;
        top: -333px;
        z-index: -1;
        left: -401px;
    }

    .padding-top-200{
        padding-top:30px;
    }

    .paine2,
    .paine1{
        display:none;
    }

    p.text-light.h6.mb-0{
        font-size:24px;
    }

    div.d-inline-block > a {
        font-size:18px;
    }

    body{
        overflow-x:hidden;
    }
}


.scroll-downs {
    /* position: absolute;
    top: -100px;
    right: 63px;
    margin: auto;
    width: 34px;
    height: 55px; */
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    justify-content: flex-end;
    list-style: none;
    margin-top: -100px;
    width: 214px;
}
.mousey {
    width: 3px;
    padding: 10px 15px;
    height: 35px;
    border: 2px solid #fff;
    border-radius: 25px;
    opacity: 0.75;
    box-sizing: content-box;
}
.scroller {
    width: 3px;
    height: 10px;
    border-radius: 25%;
    background-color: #fff;
    animation-name: scroll;
    animation-duration: 2.2s;
    animation-timing-function: cubic-bezier(.15,.41,.69,.94);
    animation-iteration-count: infinite;
}
@keyframes scroll {
    0% { opacity: 0; }
    10% { transform: translateY(0); opacity: 1; }
    100% { transform: translateY(15px); opacity: 0;}
}


</style>
<script type="text/javascript">

jQuery(window).on('resize',function() {



    var result_tab1 = jQuery("div#home").height();
    // console.log(result_tab1);
    var result_tab2 = jQuery("div#profile").height();
    // console.log(result_tab2);
    var result_tab3 = jQuery("div#contact").height();
    // console.log(result_tab3);
    var media = Math.max(result_tab1,result_tab2,result_tab3)
    // console.log(media);

    jQuery("div#home").css("height", media);
    jQuery("div#profile").css("height", media);
    jQuery("div#contact").css("height", media);


    // jQuery( " a#profile-tab " ).on( "click", function() {
    //     jQuery(".paine2").animate({
    //         top: media;
    //     }), 3000, function() {
    //         // Animation complete.
    //     });
    // });


    /* tab 1 */
    jQuery( "a#home-tab " ).click(function() {
        jQuery( ".paine1" ).animate({
            bottom: "-10px",
        }, 500, function() {
            // Animation complete.
        });
    });

    jQuery( "a#home-tab " ).click(function() {
        jQuery( ".paine2" ).animate({
            top: "0",
        }, 500, function() {
            // Animation complete.
        });
    });


    /* tab 2*/

    jQuery( "a#profile-tab " ).click(function() {
        jQuery( ".paine2" ).animate({
            top: media,
            right: "5%"
        }, 500, function() {
            // Animation complete.
        });
    });

    jQuery( "a#profile-tab " ).click(function() {
        jQuery( ".paine1" ).animate({
            bottom: media,
            left: "50%",
        }, 500, function() {
            // Animation complete.
        });
    });

    /* tab3 */

    jQuery( "a#contact-tab " ).click(function() {
        jQuery( ".paine1" ).animate({
            bottom: media,
            left: "25%"
        }, 500, function() {
            // Animation complete.
        });
    });

    jQuery( "a#contact-tab " ).click(function() {
        jQuery( ".paine2" ).animate({
            top: media,
            right: "-20%",
        }, 500, function() {
            // Animation complete.
        });
    });

    /* implementat la scroll */


    /* Slide on scroll */

    //var active_tab = jQuery("li.nav-item > a.nav-link.active");

    // var item1 = jQuery( "li.nav-item" );




    //document.addEventListener("mousewheel", this.mousewheel.bind(this), { passive: false });

    // window.addEventListener('scroll', _.throttle(callback, 1000));


    var scrollPixels = 0; // variable to store scroll delta


    // jQuery(window).bind('mousewheel', function(e){
    //     // increment/decrement scroll delta
    //     scrollPixels += e.originalEvent.wheelDelta;
    //     console.log(scrollPixels);
    //
    //     if (scrollPixels < -400) {
    //
    //
    //         scrollPixels = 0; // clear scroll delta
    //         if(jQuery('.nav-item-1 ').find('a.nav-link.active').length !== 0){
    //             jQuery( "a.nav-2" ).click();
    //         }
    //
    //         else if (jQuery('.nav-item-2 ').find('a.nav-link.active').length !== 0){
    //             jQuery( "a.nav-3" ).click();
    //         }
    //     }
    //     else if (scrollPixels > 400){
    //         scrollPixels = 0; // clear scroll delta
    //
    //         if(jQuery('.nav-item-3 ').find('a.nav-link.active').length !== 0){
    //             jQuery( "a.nav-2" ).click();
    //         }
    //
    //         else if (jQuery('.nav-item-2 ').find('a.nav-link.active').length !== 0){
    //             jQuery( " a.nav-1" ).click();
    //         }
    //
    //     }
    // });



    if (jQuery(window).width() > 850) {


        jQuery(window).on('wheel', (function(e) {
            e.preventDefault();

            clearTimeout(scroll)
            scroll = setTimeout(function(){scrollCount=0;}, 200);

            if(scrollCount) return 0;
            scrollCount=1;

            if (e.originalEvent.deltaY > 0) {


                if(jQuery('.nav-item-1 ').find('a.nav-link.active').length !== 0){
                    jQuery( "a.nav-2" ).click();
                }

                else if (jQuery('.nav-item-2 ').find('a.nav-link.active').length !== 0){
                    jQuery( "a.nav-3" ).click();
                }

            } else {

                if(jQuery('.nav-item-3 ').find('a.nav-link.active').length !== 0){
                    jQuery( "a.nav-2" ).click();
                }

                else if (jQuery('.nav-item-2 ').find('a.nav-link.active').length !== 0){
                    jQuery( " a.nav-1" ).click();
                }
            }
        }));
    }


    else if (jQuery(window).width() < 600) {

        document.addEventListener('touchstart', handleTouchStart, false);
        document.addEventListener('touchmove', handleTouchMove, false);

        var xDown = null;
        var yDown = null;

        function getTouches(evt) {
            return evt.touches ||             // browser API
            evt.originalEvent.touches; // jQuery
        }

        function handleTouchStart(evt) {
            const firstTouch = getTouches(evt)[0];
            xDown = firstTouch.clientX;
            yDown = firstTouch.clientY;
        };

        function handleTouchMove(evt) {
            if ( ! xDown || ! yDown ) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
                if ( xDiff > 0 ) {
                    /* left swipe */
                    jQuery( "#mobile_part2-tab" ).click();

                    if (jQuery( "#down_mobile_part1" ).hasClass("active")) {
                        jQuery( "#down_er_mobile_part2-tab" ).click();
                    }

                    if (jQuery( "#down_er_mobile_part2" ).hasClass("active")) {
                        jQuery( "#down_er_mobile_part3-tab" ).click();
                    }

                    if (jQuery( "#down_er_mobile_part3" ).hasClass("active")) {
                        jQuery( "#down_mobile_part1-tab" ).click();
                    }

                } else {
                    jQuery( "#mobile_part1-tab" ).click();

                    if (jQuery( "#down_mobile_part1" ).hasClass("active")) {
                        jQuery( "#down_er_mobile_part3-tab" ).click();
                    }

                    if (jQuery( "#down_er_mobile_part2" ).hasClass("active")) {
                        jQuery( "#down_mobile_part1-tab" ).click();
                    }

                    if (jQuery( "#down_er_mobile_part3" ).hasClass("active")) {
                        jQuery( "#down_er_mobile_part2-tab" ).click();
                    }

                }
            } else {
                if ( yDiff > 0 ) {
                    /* up swipe */
                } else {
                    /* down swipe */
                }
            }
            /* reset values */
            xDown = null;
            yDown = null;
        };

    }





});


jQuery(document).ready(function($) {
    $(window).trigger('resize');

    if ("Declaratie" in sessionStorage) {
        $("#profile-tab").click();
        sessionStorage.clear();
    }

    if ("Beneficii" in sessionStorage) {
        $("#contact-tab").click();
        sessionStorage.clear();
    }

});




</script>




<?php get_footer(); ?>
