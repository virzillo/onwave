@extends('layout.master')

@section('content')

<main class="js-animsition-overlay" data-animsition-overlay="true">

    {{-- <section id="up" class="pos-rel bg-img-cover" style="background-image:url(assets/images/sfondi/sfondo-colorato.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <div class="padding-top-bottom-120 container small">
                <!-- title start -->
                <h2 class="headline-l after-preloader-anim">
                    <span class="anim-text-fill" data-text="Hi, i'm">Hi, i'm</span>
                    <span class="anim-text-fill tr-delay-01" data-text="Harry Rocha">Harry Rocha</span><br>
                    <span id="js-typewriter" class="text-color-red"></span><br>
                    <span class="anim-text-fill tr-delay-02" data-text="Based in">Based in</span>
                    <span class="anim-text-fill tr-delay-03" data-text="London.">London.</span>
                </h2><!-- title end -->
            </div>
        </div><!-- pos-rel end -->
    </section> --}}


    <section id="up" class=" pos-rel anim-lines bg-img-cover" style="background-image:url(assets/images/sfondi/sfondo-colorato.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- lines-container start -->
        <div class="lines-container pos-rel anim-lines flex-min-height-100vh border-box-bottom">
            <div class="padding-top-bottom-120 container">
                <!-- title start -->
                <h2 class="headline-l after-preloader-anim ">
                    <span class="anim-text-fill" data-text="Sviluppiamo">Sviluppiamo</span>
                    <span class="anim-text-fill tr-delay-01" data-text="filtri">filtri</span><br>
                    <span id="js-typewriter" class="text-color-red"></span><br>
                    <span class="anim-text-fill tr-delay-02" data-text="personalizzati">personalizzati</span>
                    {{-- <span class="anim-text-fill tr-delay-03" data-text="Business">Business</span> --}}
                </h2>
                <!-- title end -->
            </div>
        </div><!-- lines-container end -->
        <!-- particles -->
        <div id="js-particles"></div>
    </section>
    <!-- page head end -->


    <!-- page head start -->

    <!-- page head end -->


    <section id="whatwedo" class="lines-section pos-rel  section-bg-light-1" data-midnight="black">
        <!-- lines-container start -->
        <div class="lines-container pos-rel  flex-min-height-100vh">
            <!-- width-100perc start -->
            <div class="width-100perc padding-top-bottom-120">
                <h2 class="headline-xxl text-center js-scrollanim text-color-black">
                    <span class="anim-text-fill text-color-black" data-text="Tipologie">Tipologie </span>
                    <span class="text-color-red anim-text-fill tr-delay-02" data-text="Filtri">Filtri</span>
                </h2>


                <!-- flex-container start -->
                <div class="flex-container padding-top-30">
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <div class="anim-overlay">
                                <img src="assets/images/services/barber/man-in-white-and-black-stripe-dress-shirt-3998424.jpg" alt="Barbershop">
                            </div>
                            <div class="margin-top-20 anim-text-reveal tr-delay-02">
                                <h4 class="headline-xxxs text-color-black">
                                    Filtro <span class="text-color-red">Basic</span>
                                    {{-- <span class="text-color-red">godard</span> gochujang --}}
                                </h4>
                                <p class="body-text-xs text-color-black margin-top-20">descrizione...</p>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <div class="anim-overlay">
                                <img src="assets/images/services/barber/man-taking-beard-shave-897262.jpg" alt="Barbershop">
                            </div>
                            <div class="margin-top-20 anim-text-reveal tr-delay-02">
                                <h4 class="headline-xxxs text-color-black">
                                    Filtro <span class="text-color-red">Face</span>
                                </h4>
                                <p class="body-text-xs text-color-black margin-top-20">descrizione...</p>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <div class="anim-overlay">
                                <img src="assets/images/services/barber/mirror-reflection-of-man-shaving-man-s-beard-2035308.jpg" alt="Barbershop">
                            </div>
                            <div class="margin-top-20 anim-text-reveal tr-delay-02">
                                <h4 class="headline-xxxs text-color-black">
                                   Filtro
                                    <span class="text-color-red">Element</span>
                                </h4>
                                <p class="body-text-xs text-color-black margin-top-20">descrizione...</p>
                            </div>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- width-100perc end -->
        </div><!-- lines-container end -->
    </section>

	<!-- albums start -->
    <section class="pos-rel section-bg-dark-1">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-bottom-120">
            <!-- title start -->
            <h2 class="headline-xxl text-center js-scrollanim">
                <span class="anim-text-fill" data-text="Riconoscimento">Riconoscimento </span>
                <span class="text-color-red anim-text-fill tr-delay-02" data-text="Logo">Logo</span>
            </h2><!-- title end -->

            <!-- js-3-view-slider start -->
            <div class="js-3-view-slider padding-top-bottom-90 hidden-box pos-rel">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper js-slider-scroll-anim">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <a href="project_drone.html" class="anim-img-scale d-block js-pointer-large js-animsition-link">
                            <img class="anim-img-scale__inner" src="assets/images/projects/under-water/person-underwater-3405555.jpg" alt="album">
                        </a><!-- anim-img-scale end -->
                        <!-- content start -->
                        <div class="margin-top-20 margin-left-right-20 text-center">
                            <h3 class="d-inline-block hidden-box">
                                <span class="headline-xxxs anim-reveal red tr-delay-01">Under Water</span>
                            </h3><br>
                            <span class="d-inline-block hidden-box">
                                <span class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">Trap/Hip-hop</span>
                            </span>
                        </div><!-- content end -->
                    </div><!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <a href="project_drone.html" class="anim-img-scale d-block js-pointer-large js-animsition-link">
                            <img class="anim-img-scale__inner" src="assets/images/projects/phantom/woman-s-face-3319333.jpg" alt="album">
                        </a><!-- anim-img-scale end -->
                        <!-- content start -->
                        <div class="margin-top-20 margin-left-right-20 text-center">
                            <h3 class="d-inline-block hidden-box">
                                <span class="headline-xxxs anim-reveal red tr-delay-01">Phantom</span>
                            </h3><br>
                            <span class="d-inline-block hidden-box">
                                <span class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">Experimental</span>
                            </span>
                        </div><!-- content end -->
                    </div><!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <a href="project_drone.html" class="anim-img-scale d-block js-pointer-large js-animsition-link">
                            <img class="anim-img-scale__inner" src="assets/images/projects/red-led-light/red-led-light-with-silhouette-of-a-man-3094799.jpg" alt="album">
                        </a><!-- anim-img-scale end -->
                        <!-- content start -->
                        <div class="margin-top-20 margin-left-right-20 text-center">
                            <h3 class="d-inline-block hidden-box">
                                <span class="headline-xxxs anim-reveal red tr-delay-01">Red Led Light</span>
                            </h3><br>
                            <span class="d-inline-block hidden-box">
                                <span class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">R'n'B/Glitch</span>
                            </span>
                        </div><!-- content end -->
                    </div><!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <a href="project_drone.html" class="anim-img-scale d-block js-pointer-large js-animsition-link">
                            <img class="anim-img-scale__inner" src="assets/images/projects/the-doors/person-standing-on-opened-doorway-2276051.jpg" alt="album">
                        </a><!-- anim-img-scale end -->
                        <!-- content start -->
                        <div class="margin-top-20 margin-left-right-20 text-center">
                            <h3 class="d-inline-block hidden-box">
                                <span class="headline-xxxs anim-reveal red tr-delay-01">The Doors</span>
                            </h3><br>
                            <span class="d-inline-block hidden-box">
                                <span class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">Electronic</span>
                            </span>
                        </div><!-- content end -->
                    </div><!-- swiper-slide end -->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide">
                        <!-- anim-img-scale start -->
                        <a href="project_drone.html" class="anim-img-scale d-block js-pointer-large js-animsition-link">
                            <img class="anim-img-scale__inner" src="assets/images/projects/corona/mona-lisa-with-face-mask-3957982.jpg" alt="album">
                        </a><!-- anim-img-scale end -->
                        <!-- content start -->
                        <div class="margin-top-20 margin-left-right-20 text-center">
                            <h3 class="d-inline-block hidden-box">
                                <span class="headline-xxxs anim-reveal red tr-delay-01">Corona</span>
                            </h3><br>
                            <span class="d-inline-block hidden-box">
                                <span class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">Indie Pop</span>
                            </span>
                        </div><!-- content end -->
                    </div><!-- swiper-slide end -->
                </div><!-- swiper-wrapper end -->

                <!-- swiper-button-prev start -->
                <div class="swiper-button-prev-box">
                    <div class="swiper-button-prev"></div>
                </div><!-- swiper-button-prev end -->
                <!-- swiper-button-next start -->
                <div class="swiper-button-next-box">
                    <div class="swiper-button-next"></div>
                </div><!-- swiper-button-next end -->

                <!-- swiper-pagination start -->
                <div class="pagination-box">
                    <div class="swiper-pagination counter-pagination"></div>
                </div><!-- swiper-pagination end -->
            </div><!-- js-3-view-slider end -->
        </div><!-- pos-rel end -->
    </section>
    <!-- albums end -->

</main>


@endsection

@push('script')
<script src="assets/js/particles.js"></script>
<script src="assets/js/particles_init.js"></script>
<script src="assets/js/typewriter.js"></script>
<script src="assets/js/typewriter_init.js"></script>
@endpush