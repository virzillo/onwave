<footer class="fixed-footer pos-rel bg-img-cover js-fixed-footer" style="background-image:url(assets/images/sfondi/sfondo-colorato.jpg)">
    <!-- bg-overlay -->
    <div class="bg-overlay-black"></div>
    <!-- pos-rel start -->
    <div class="pos-rel flex-min-height-100vh">
        <!-- container start -->
        <div class="container padding-top-bottom-120">
            <!-- footer-logo start -->
            <div class="footer-logo footer-logo-desktop-hidden padding-bottom-90">
                <img class="footer-logo__img" src="assets/images/logo/onwave-white.png" alt="logo">
            </div><!-- footer-logo end -->

            <!-- flex-container start -->
            <div class="flex-container flex-align-center">
                <!-- column start -->
                <div class="eight-columns">
                    <h4 class="column-l-r-margin-10 headline-l footer-title">
                        La <span class="text-color-red">migliore<br>Agenzia</span> per<br>il tuo Businnes
                    </h4>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns footer-nav-mobile-padding">
                    <ul class="column-l-r-margin-10 footer-nav-list js-footer-hover-box">
                        <li>
                            <a href="{{route('home')}}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Home</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('portfolio')}}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Portfolio</a>
                        </li> --}}
                        <li>
                            <a href="{{route('filtri.social')}}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Filtri Social</a>
                        </li>
                        <li>
                            <a href="{{route('contatti')}}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Contatti</a>
                        </li>
                    </ul>
                </div><!-- column end -->
            </div><!-- flex-container end -->

            <!-- flex-container start -->
            <div class="flex-container flex-justify-center padding-top-30">
                <!-- column start -->
                <div class="four-columns column-50-100 padding-top-60 footer-email">
                    <div class="column-l-r-margin-10">
                        <div class="headline-xxxxs">Email</div>
                        <div class="margin-top-10">
                            <a href="mailto:info@onwave.it" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">info@onwave.it</a><br>
                            {{-- <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">email@onwave.it</a> --}}
                        </div>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns column-50-100 padding-top-60 footer-address">
                    <div class="column-l-r-margin-10">
                        <div class="headline-xxxxs">Indirizzo</div>
                        <div class="margin-top-10">
                            <a href="https://www.google.com/maps/place/Via+Lorenzo+Bonomo,+27,+76123+Andria+BT/data=!4m2!3m1!1s0x13381a8102c055d1:0x305a597a1341f6df?sa=X&ved=2ahUKEwj9m_Cy8anrAhUGwKQKHd9HAqIQ8gEwAHoECAsQAQ" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">
                                Via Lorenzo Bonomo 27/29<br>
                                76123 Andria(BT)
                            </a>
                        </div>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns column-50-100 padding-top-60 footer-phone">
                    <div class="column-l-r-margin-10">
                        <div class="headline-xxxxs">Telefono</div>
                        <div class="margin-top-10">
                            <a href="tel:+390883950375" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+39 0883 950375</a><br>
                            {{-- <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 9635 7335</a> --}}
                        </div>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->

            <!-- footer-social start -->
            <ul class="footer-social-desktop-hidden list list_center padding-top-90">
                <li class="list__item">
                    <a href="https://www.facebook.com/onwave.it" class="flip-btn js-pointer-small" data-text="Facebook">Facebook</a>
                </li>

                <li class="list__item">
                    <a href="https://www.instagram.com/onwaveagency/" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
                </li>

            </ul><!-- footer-social end -->

            <!-- footer-copyright start -->
            <div class="footer-copyright text-center pos-abs pos-bottom-center">
                <p class="copyright-style">
                    &copy; Copyright 2020 ONWAVE
                </p>
            </div><!-- footer-copyright end -->
        </div><!-- container end -->
    </div><!-- pos-rel end -->
</footer>
