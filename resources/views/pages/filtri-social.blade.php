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


    <section id="up" class=" pos-rel  bg-img-cover" style="background-image:url(assets/images/sfondi/sfondo-colorato.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- lines-container start -->
        <div class=" pos-rel  flex-min-height-100vh border-box-bottom">
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
        {{-- <div id="js-particles"></div> --}}
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
                <h4 class="headline-xxxs text-center text-color-black margin-top-20">
                    Duis arcu tortor suscipit <span class="text-color-red"> Duis arcu tortor suscipit</span>
                </h4>

                <!-- flex-container start -->
                <div class="flex-container padding-top-30">
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <div class="anim-overlay">
                                <img src="assets/images/Filtro_Basic.png" alt="FiltroARBasic">
                            </div>
                            <div class="margin-top-20 anim-text-reveal tr-delay-02">
                                <h4 class="headline-xxxs text-color-black text-center">
                                    Filtro <span class="text-color-red">Basic</span>
                                    {{-- <span class="text-color-red">godard</span> gochujang --}}
                                </h4>
                                <p class="body-text-xs text-color-black margin-top-20"></p>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <div class="anim-overlay">
                                <img src="assets/images/Filtro_Face.png" alt="Face">
                            </div>
                            <div class="margin-top-20 anim-text-reveal tr-delay-02 text-center">
                                <h4 class="headline-xxxs text-color-black">
                                    Filtro <span class="text-color-red">Face</span>
                                </h4>
                                <p class="body-text-xs text-color-black margin-top-20"></p>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="line-col-l-r-margin-20 js-scrollanim">
                            <div class="anim-overlay">
                                <img src="assets/images/Filtro_Element.png" alt="Element">
                            </div>
                            <div class="margin-top-20 anim-text-reveal tr-delay-02 text-center">
                                <h4 class="headline-xxxs text-color-black">
                                   Filtro
                                    <span class="text-color-red">Element</span>
                                </h4>
                                <p class="body-text-xs text-color-black margin-top-20"></p>
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
{{-- <script src="assets/js/jquery.ripples-min.js"></script> --}}

{{-- <script src="assets/js/particles.js"></script>
<script src="assets/js/particles_init.js"></script> --}}
<script src="assets/js/typewriter.js"></script>
<script src="assets/js/typewriter_init.js"></script>

<script src="assets/js/three.r119.min.js"></script>
<script src="assets/js/vanta.halo.min.js"></script>
<script>
VANTA.HALO({
  el: "#up",
  mouseControls: true,
  touchControls: true,
  gyroControls: true,
  minHeight: 200.00,
  minWidth: 200.00,
  backgroundColor: 0x4656b6,
  amplitudeFactor: 1.80,
  size: 1.30
})
</script>

{{-- <script>
    $(document).ready(function() {
        try {
            $('#up').ripples({
                resolution: 512,
                dropRadius: 20, //px
                perturbance: 0.04,
            });
            // $('main').ripples({
            //     resolution: 128,
            //     dropRadius: 10, //px
            //     perturbance: 0.04,
            //     interactive: false
            // });
        }
        catch (e) {
            $('.error').show().text(e);
        }

        $('.js-ripples-disable').on('click', function() {
            $('#up, main').ripples('destroy');
            $(this).hide();
        });

        $('.js-ripples-play').on('click', function() {
            $('#up, main').ripples('play');
        });

        $('.js-ripples-pause').on('click', function() {
            $('#up, main').ripples('pause');
        });

        // Automatic drops
        setInterval(function() {
            var $el = $('#up');
            var x = Math.random() * $el.outerWidth();
            var y = Math.random() * $el.outerHeight();
            var dropRadius = 20;
            var strength = 0.04 + Math.random() * 0.04;

            $el.ripples('drop', x, y, dropRadius, strength);
        }, 400);
    });
</script> --}}


@endpush
