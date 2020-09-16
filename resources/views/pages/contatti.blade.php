@extends('layout.master')

@section('content')

<main class="js-animsition-overlay" data-animsition-overlay="true">


    <section id="up" class=" pos-rel  bg-img-cover" >
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- lines-container start -->
        <div class=" pos-rel  flex-min-height-100vh border-box-bottom">
            <div class="padding-top-bottom-120 container">
                <!-- title start -->
                <h2 class="headline-xl after-preloader-anim">
                    <span class="hidden-box d-block">
                        <span class="anim-slide">We Generate</span>
                    </span>
                    <span class="hidden-box d-block">
                        <span class="anim-slide tr-delay-01">
                            <span class="text-color-red">Creative</span> &
                        </span>
                    </span>
                    <span class="hidden-box d-block">
                        <span class="anim-slide tr-delay-02">
                            Novation <span class="text-color-red">Ideas</span>
                        </span>
                    </span>
                </h2><!-- title end -->
            </div>
        </div><!-- lines-container end -->
        <!-- particles -->
        {{-- <div id="js-particles"></div> --}}
    </section><!-- page head end -->

    <!-- contact us start -->
    <section id="down" class="pos-rel section-bg-dark-1">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- container start -->
            <div class="padding-top-bottom-120 container">
                <!-- content start -->
                <div class="js-scrollanim">
                    <h2 class="headline-l">
                        <span class="anim-text-double-fill" data-text="I nostri">I nostri</span>
                        <span class="anim-text-double-fill tr-delay-02" data-text="contatti">contatti</span>
                    </h2>
                    <p class="body-text-s margin-top-20 anim-text-reveal tr-delay-04">Un responsabile marketing vi contatterà subito!

                    </p>
                </div><!-- content end -->

                <!-- flex-container start -->
                <div class="flex-container padding-top-30">
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="column-r-margin-20 js-scrollanim">
                            <p class="headline-xxxxs anim-text-double-fill invert" data-text="Email us">Email</p>
                            <div class="padding-top-20">
                                <h6 class="anim-fade tr-delay-01">
                                    <a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">info@onwave.it</a>
                                </h6><br>
                                <h6 class="anim-fade tr-delay-02">
                                    <a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">email@onwave.it</a>
                                </h6><br>
                                {{-- <h6 class="anim-fade tr-delay-03">
                                    <a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">email@umaya_agency.com</a>
                                </h6> --}}
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="column-r-margin-20 js-scrollanim">
                            <p class="headline-xxxxs anim-text-double-fill invert" data-text="Indirizzo">Indirizzo</p>
                            <h6 class="list list_margin-1px padding-top-20 text-color-b0b0b0">
                                {{-- <span class="list__item">
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs anim-reveal tr-delay-01">PO Box 223158</span>
                                    </span>
                                </span> --}}
                                <span class="list__item">
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs anim-reveal tr-delay-02">Via Lorenzo Bonomo 27/29</span>
                                    </span>
                                </span>
                                <span class="list__item">
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs anim-reveal tr-delay-03">76123 Andria (BT) </span>
                                    </span>
                                </span>
                            </h6>
                            <div class="padding-top-10 anim-fade tr-delay-04">
                                <a href="https://www.google.com/maps/place/Via+Lorenzo+Bonomo,+27,+76123+Andria+BT/data=!4m2!3m1!1s0x13381a8102c055d1:0x305a597a1341f6df?sa=X&ved=2ahUKEwj9m_Cy8anrAhUGwKQKHd9HAqIQ8gEwAHoECAsQAQ" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small" target="_blank">Apri in google maps</a>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="column-r-margin-20 js-scrollanim">
                            <p class="headline-xxxxs anim-text-double-fill invert" data-text="Telefono">Telefono</p>
                            <div class="padding-top-20">
                                <h6 class="anim-fade tr-delay-01">
                                    <a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">+23 8 8345 7346</a>
                                </h6><br>
                                <h6 class="anim-fade tr-delay-02">
                                    <a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">+23 8 8532 7834</a>
                                </h6>
                            </div>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->

                <!-- social btns start -->
                <div class="padding-top-90">
                    <ul class="list list_row list_margin-30px js-scrollanim">
                        <li class="list__item anim-fade">
                            <a href="#" class="fill-btn text-color-979797 js-pointer-small" data-text="Facebook">Facebook</a>
                        </li>
                        <li class="list__item anim-fade tr-delay-02">
                            <a href="#" class="fill-btn text-color-979797 js-pointer-small" data-text="Instagram">Instagram</a>
                        </li>
                    </ul>
                </div><!-- social btns end -->
            </div><!-- container end -->
        </div><!-- pos-rel end -->
    </section><!-- contact us end -->

    <!-- form section start -->
    <section class="pos-rel  section-bg-light-2" data-midnight="black" id="scrivici">
        <!-- bg-overlay -->
        {{-- <div class="bg-overlay-black"></div> --}}
        <!-- pos-rel start -->
        <div class="pos-rel  flex-min-height-100vh">
            <!-- container start -->
            <div class="container small padding-top-bottom-120 form-box text-color-black">
                <h4 class="headline-xxs text-center">Lets Get In Touch!</h4>
                <!-- flex-container start -->
                <form action="{{route('inviomail')}}" method="post" name="formobrsv" id="send_form" class="flex-container padding-top-90">
                    @csrf
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-r-margin-10">
                            <input type="text" name="nome" placeholder="Nome" id="first_name" required class="form-input js-pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-l-r-margin-5">
                            <input type="text" name="cognome" placeholder="Cognome" id="last_name" required class="form-input js-pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-l-margin-10">
                            <input type="email" name="email" placeholder="Email" id="email" required class="form-input js-pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns">
                        <textarea name="messaggio" placeholder="scrivi il tuo messaggio" id="message" required class="form-input js-pointer-small"></textarea>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns text-center padding-top-90">
                        <button name="submit" id="send" class="border-btn js-pointer-large text-color-black">
                            <span class="border-btn__inner">invia</span>
                            <span class="btn-wait">Wait</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </button>
                    </div><!-- column end -->
                </form><!-- flex-container end -->
            </div><!-- container end -->

            <!-- alert start -->
            <div class="js-popup-fade" id="m_sent">
                <div class="js-popup">
                    <div class="popup-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="popup-alert headline-xs">
                        Grazie!<br>
                        La tua email<br>
                        è stata ricevuta!
                    </p>
                    <div class="js-popup-close js-pointer-large">
                        <div class="flip-btn" data-text="Chiudi">Chiudi</div>
                    </div>
                </div>
            </div><!-- alert end -->

            <!-- alert start -->
            <div class="js-popup-fade" id="m_err">
                <div class="js-popup">
                    <div class="popup-icon">
                        <i class="fas fa-times"></i>
                    </div>
                    <p class="popup-alert headline-xs">Errore</p>
                    <div class="js-popup-close js-pointer-large">
                        <div class="flip-btn" data-text="Chiudi">Chiudi</div>
                    </div>
                </div>
            </div><!-- alert end -->
        </div><!-- pos-rel end -->
    </section><!-- form section end -->
</main>

@endsection

@push('css')
<style>
    input[type='text']{
        color:black !important;
    }
    ::-webkit-input-placeholder { /* Edge */
  color: black;
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: black;
    }

    ::placeholder {
    color: black;
    }
    .form-input {

        border-bottom: 1px solid rgba(0, 0, 0, .2)!important;

        color: rgb(0, 0, 0) !important;

    }
    .border-btn__inner {

        color: black;

    }
    #send .btn-wait {

        color: black;

    }

    .border-btn:before, .border-btn:after, .border-btn__inner:before, .border-btn__inner:after {

        background-color: #020202;

    }
</style>
@endpush

@push('script')
{{-- <script src="assets/js/particles.js"></script>
<script src="assets/js/particles_init.js"></script> --}}

<script src="assets/js/three.r119.min.js"></script>
<script src="assets/js/vanta.waves.min.js"></script>
<script>
VANTA.WAVES({
  el: "#up",
  mouseControls: true,
  touchControls: true,
  gyroControls: true,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00
})
</script>

@endpush
