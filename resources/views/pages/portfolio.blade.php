@extends('layout.master')

@section('content')

<main class="js-animsition-overlay" data-animsition-overlay="true">
    <!-- pos-rel start -->
    <section id="up" class="pos-rel bg-img-cover" style="background-image:url(assets/images/projects/drone/quadcopter-on-wooden-surface-1601217.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        {{-- <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <div class="padding-top-bottom-120 width-100perc after-preloader-anim">
                <!-- title start -->
                <h2 class="headline-xxxxl text-center hidden-box">
                    <span class="anim-slide">Portfolio</span>
                </h2><!-- title end -->

                <!-- description start -->
                <div class="flex-container description">
                    <div class="four-columns column-50-100 padding-top-1 text-center">
                        <span class="hidden-box d-inline-block">
                            <span class="subhead-xxs anim-reveal">Marketing</span>
                        </span>
                    </div>
                    <div class="four-columns column-50-100 padding-top-1 text-center">
                        <span class="hidden-box d-inline-block">
                            <span class="subhead-xxs anim-reveal tr-delay-02">Website</span>
                        </span>
                    </div>
                    <div class="four-columns column-50-100 padding-top-1 text-center">
                        <span class="hidden-box d-inline-block">
                            <span class="subhead-xxs anim-reveal tr-delay-04">Photoshoot</span>
                        </span>
                    </div>
                </div>
                <!-- description end -->
            </div>
        </div><!-- pos-rel end --> --}}

       <!-- lines-container start -->
       <div class=" pos-rel  flex-min-height-100vh border-box-bottom">
        <div class="padding-top-bottom-120 container">
            <!-- title start -->
            <h2 class="headline-xl after-preloader-anim">
                <span class="hidden-box d-block">
                    <span class="anim-slide">Portfolio</span>
                </span>
                <span class="hidden-box d-block">
                    <span class="anim-slide tr-delay-01">
                        <span class="text-color-red">Photoshoot</span> &
                    </span>
                </span>
                <span class="hidden-box d-block">
                    <span class="anim-slide tr-delay-02">
                        Marketing &<span class="text-color-red">Website</span>
                    </span>
                </span>
            </h2><!-- title end -->
        </div>
    </div><!-- lines-container end -->
    </section><!-- pos-rel end -->

    {{-- <!-- pos-rel start -->
    <div id="down" class="pos-rel section-bg-dark-1">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- flex-container start -->
            <div class="container small flex-container padding-top-60 padding-bottom-120">
                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-60">
                    <!-- list start -->
                    <ul class="list js-scrollanim">
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide">Graphic Design</div>
                        </li>
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide tr-delay-01">User Interface Design</div>
                        </li>
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide tr-delay-02">User Experience Design</div>
                        </li>
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide tr-delay-03">Web Design</div>
                        </li>
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide tr-delay-04">Motion Design</div>
                        </li>
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide tr-delay-05">Front-end Development</div>
                        </li>
                        <li class="list__item red dot hidden-box">
                            <div class="subhead-xxs anim-slide tr-delay-06">Back-end Development</div>
                        </li>
                    </ul><!-- list end -->
                </div><!-- column end -->

                <!-- column start -->
                <div class="eight-columns column-100-100 padding-top-60">
                    <div class="column-l-margin-40-999">
                        <p class="body-text-m anim-text-reveal js-scrollanim">Retro jean shorts cronut lumbersexual mixtape hella you probably haven't heard of them austin williamsburg af mustache pinterest. Mixtape kinfolk cray, wolf palo santo brunch iPhone. 3 wolf moon microdosing scenester, tilde roof party affogato typewriter celiac echo park craft beer bicycle rights man braid trust fund four dollar toast gentrify. IPhone humblebrag kale chips hell of. Brooklyn whatever chia deep v slow-carb lomo put a bird on. Austin fam chia cold-pressed raw denim.</p>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
        </div><!-- pos-rel end -->
    </div><!-- pos-rel end --> --}}

    <!-- pos-rel start -->
    <section class="pos-rel section-bg-light-1" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- flex-container start -->
            <div class="container flex-container padding-top-100 padding-bottom-120">
                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-20">
                    <div class="column-l-r-margin-10-999">
                        <h2 class="headline-xxs text-color-black js-scrollanim">
                            <span class="hidden-box d-block">
                                <span class="anim-slide">Austin fam chia</span>
                            </span>
                            <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-01">cold-pressed raw</span>
                            </span>
                        </h2>
                    </div>
                </div><!-- column end -->

                <!-- column start -->
                <div class="eight-columns column-100-100 padding-top-20">
                    <div class="column-l-r-margin-10-999">
                        <p class="body-text-s text-color-black anim-text-reveal js-scrollanim">3 wolf moon microdosing scenester, tilde roof party affogato typewriter celiac echo park craft beer bicycle rights man braid trust fund four dollar toast gentrify. Mixtape kinfolk cray, wolf palo santo brunch iPhone. Retro jean shorts cronut lumbersexual mixtape hella you probably haven't heard of them austin williamsburg af mustache pinterest. IPhone humblebrag kale chips hell of. Brooklyn whatever chia deep v slow-carb lomo put a bird on. Austin fam chia cold-pressed raw denim.</p>
                    </div>
                </div><!-- column end -->

                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-60">
                    <a href="assets/images/CRBRS.jpg" class="column-l-r-margin-10-999 d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/CRBRS.jpg" alt="project CRBRS">
                    </a>
                </div><!-- column end -->

                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-60">
                    <a href="assets/images/EC_Pyrex.jpg" class="column-l-r-margin-10-999 d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/EC_Pyrex.jpg" alt="project Pyrex">
                    </a>
                </div><!-- column end -->

                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-60">
                    <a href="assets/images/Berta_Filava.jpg" class="column-l-r-margin-10-999 d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/Berta_Filava.jpg" alt="project Berta Filava">
                    </a>
                </div><!-- column end -->

                 <!-- column start -->
                 <div class="four-columns column-100-100 padding-top-60">
                    <a href="assets/images/Berta_Filava.jpg" class="column-l-r-margin-10-999 d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/Urban_ring_1.jpg" alt="project Urban Ring">
                    </a>
                </div><!-- column end -->

            </div><!-- flex-container end -->
        </div><!-- pos-rel end -->
    </section><!-- pos-rel end -->

    {{-- <!-- pos-rel start -->
    <div class="pos-rel">
        <img src="assets/images/projects/drone/pexels-photo-257699.jpeg" alt="project image">
    </div><!-- pos-rel end -->

    <!-- pos-rel start -->
    <section class="pos-rel section-bg-light-1" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-100 padding-bottom-120">
            <!-- flex-container start -->
            <div class="container flex-container">
                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-20">
                    <div class="column-l-r-margin-10-999">
                        <h2 class="headline-xxs text-color-black js-scrollanim">
                            <span class="hidden-box d-block">
                                <span class="anim-slide">Beer bicycle rights</span>
                            </span>
                            <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-01">man braid trust</span>
                            </span>
                        </h2>
                    </div>
                </div><!-- column end -->

                <!-- column start -->
                <div class="eight-columns column-100-100 padding-top-20">
                    <div class="column-l-r-margin-10-999">
                        <p class="body-text-s text-color-black anim-text-reveal js-scrollanim">IPhone humblebrag kale chips hell of. Brooklyn whatever chia deep v slow-carb lomo put a bird on. Austin fam chia cold-pressed raw denim. 3 wolf moon microdosing scenester, tilde roof party affogato typewriter celiac echo park craft beer bicycle rights man braid trust fund four dollar toast gentrify. Mixtape kinfolk cray, wolf palo santo brunch iPhone. Retro jean shorts cronut lumbersexual mixtape hella you probably haven't heard of them austin williamsburg af mustache pinterest.</p>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->

            <!-- container start -->
            <div class="container small">
                <div class="padding-top-60">
                    <a href="assets/images/projects/drone/white-drone-2044044.jpg" class="d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/projects/drone/white-drone-2044044.jpg" alt="project image">
                    </a>
                </div>
                <div class="padding-top-60">
                    <a href="assets/images/projects/drone/white-and-black-dji-mavic-pro-1381541.jpg" class="d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/projects/drone/white-and-black-dji-mavic-pro-1381541.jpg" alt="project image">
                    </a>
                </div>
                <div class="padding-top-60">
                    <a href="assets/images/projects/drone/gray-dji-mavic-drone-1852984.jpg" class="d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/projects/drone/gray-dji-mavic-drone-1852984.jpg" alt="project image">
                    </a>
                </div>
                <div class="padding-top-60">
                    <a href="assets/images/projects/drone/black-drone-916015.jpg" class="d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/projects/drone/black-drone-916015.jpg" alt="project image">
                    </a>
                </div>
            </div><!-- container end -->
        </div><!-- pos-rel end -->
    </section><!-- pos-rel end -->

    <!-- pos-rel start -->
    <section class="pos-rel section-bg-light-2" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-60 padding-bottom-120">
            <!-- flex-container start -->
            <div class="container flex-container flex-align-end">
                <!-- columns start -->
                <div class="four-columns column-100-100 padding-top-60">
                    <div class="column-l-r-margin-10-999 js-scrollanim">
                        <h2 class="headline-xxs text-color-black">
                            <span class="hidden-box d-block">
                                <span class="anim-slide">3 wolf moon</span>
                            </span>
                            <span class="hidden-box d-block">
                                <span class="anim-slide tr-delay-01">microdosing scenester</span>
                            </span>
                        </h2>
                        <p class="body-text-xs text-color-black margin-top-20 anim-text-reveal tr-delay-02">Mixtape kinfolk cray, wolf palo santo brunch iPhone. Retro jean shorts cronut lumbersexual mixtape hella you probably haven't heard of them austin williamsburg af mustache pinterest. IPhone humblebrag kale chips hell of. Brooklyn whatever chia deep v slow-carb lomo put a bird on. Austin fam chia cold-pressed raw denim. 3 wolf moon microdosing scenester, tilde roof party affogato typewriter celiac echo park craft beer bicycle rights man braid trust fund four dollar toast gentrify.</p>
                    </div>
                </div><!-- columns end -->

                <!-- columns start -->
                <div class="eight-columns column-100-100 padding-top-60">
                    <a href="assets/images/projects/drone/two-assorted-quadcopter-drones-with-controllers-810493.jpg" class="column-l-r-margin-10-999 d-block js-pointer-zoom js-photo-popup">
                        <img src="assets/images/projects/drone/two-assorted-quadcopter-drones-with-controllers-810493.jpg" alt="project image">
                    </a>
                </div><!-- columns end -->
            </div><!-- flex-container end -->
        </div><!-- pos-rel end -->
    </section><!-- pos-rel end -->

    <!-- pos-rel start -->
    <div class="pos-rel">
        <img src="assets/images/projects/drone/aerial-aeroplane-blur-close-up-378268.jpg" alt="project image">
    </div><!-- pos-rel end -->

    <!-- pos-rel start -->
    <section class="pos-rel section-bg-dark-1">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- flex-container start -->
            <div class="container small flex-container reverse padding-top-100 padding-bottom-120">
                <!-- column start -->
                <div class="four-columns column-100-100 padding-top-20">
                    <h5 class="margin-left-50 js-scrollanim">
                        <span class="subhead-xs anim-text-double-fill" data-text="Jason Hardeman">Jason Hardeman</span><br>
                        <span class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-01" data-text="Creative director">Creative director</span><br>
                        <span class="headline-xxxxs anim-text-double-fill invert tr-delay-02" data-text="XOXO production LTD">XOXO production LTD</span>
                    </h5>
                </div><!-- column end -->

                <!-- column start -->
                <div class="eight-columns column-100-100 padding-top-20">
                    <div class="column-l-margin-40-999">
                        <blockquote class="quote body-text-s anim-text-reveal js-scrollanim">Synth keytar distillery offal man braid sartorial 90's blue bottle fanny pack kale chips craft beer pok pok chambray. Yuccie listicle bicycle rights put a bird on it lyft flexitarian direct trade meggings vape chicharrones green juice man bun. Organic craft beer chambray, migas vinyl chartreuse godard palo santo lomo readymade vexillologist. DIY occupy craft beer 3 wolf moon, VHS cornhole master cleanse irony paleo vaporware butcher chicharrones.</blockquote>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
        </div><!-- pos-rel end -->
    </section><!-- pos-rel end -->

    <!-- next project start -->
    <section class="pos-rel bg-img-cover" style="background-image:url(assets/images/projects/beauty-lab/beauty-beauty-product-cosmetics-makeup-2845213.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <div class="padding-top-bottom-120 width-100perc text-center">
                <div class="js-scrollanim">
                    <span class="subhead-s anim-fade">Next Project:</span>

                    <!-- title start -->
                    <div class="margin-top-10 margin-bottom-30">
                        <a href="project_beauty-lab.html" class="d-block hidden-box js-pointer-large js-animsition-link">
                            <h2 class="headline-xxxxl anim-slide">Beauty Lab</h2>
                        </a>
                    </div><!-- title end -->

                    <!-- button start -->
                    <a href="project_beauty-lab.html" class="skew-btn js-pointer-large js-animsition-link anim-fade tr-delay-04">
                        <span class="skew-btn__box">
                            <span class="skew-btn__content">See the case</span>
                            <span class="skew-btn__arrow"></span>
                        </span>
                    </a><!-- button end -->
                </div>
            </div>
        </div><!-- pos-rel end -->
    </section><!-- next project end --> --}}
</main>
@endsection

@push('script')

<script src="assets/js/three.r119.min.js"></script>
<script src="assets/js/vanta.cells.min.js"></script>
<script>
VANTA.CELLS({
  el: "#up",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  color1: 0x21eded,
  color2: 0x1d88c3,
  size: 2.70,
  speed: 3.30
})
</script>
@endpush
