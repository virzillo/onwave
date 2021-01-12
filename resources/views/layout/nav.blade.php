<nav class="nav-container pos-rel js-dropdown-active-box">
    <!-- pos-rel start -->
    <div class="pos-rel height-100perc">
        <!-- dropdown close btn start -->
        <div class="dropdown-close">
            <div class="dropdown-close__inner js-dropdown-close js-pointer-large">
                <span class="dropdown-close__arrow"></span>
            </div>
        </div><!-- dropdown close btn end -->



        <!-- menu-box start -->
        <ul class="menu-box">
            <!-- nav-btn-box start -->

            <li class="nav-btn-box">
                <a href="{{route('home')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Home">Home</span>
                </a>
            </li>
            {{-- <li class="nav-btn-box">
                <a href="{{route('portfolio')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Portfolio">Portfolio</span>
                </a>
            </li> --}}
            <li class="nav-btn-box">
                <a href="{{route('filtri.social')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Filtri Social">Filtri Social</span>
                </a>
            </li>
            <!-- nav-btn-box start -->
            <li class="nav-btn-box">
                <a href="{{route('contatti')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Contatti">Contatti</span>
                </a>
            </li><!-- nav-btn-box end -->
        </ul><!-- menu-box end -->

        <!-- nav-information start -->
        <div class="nav-information">
            <!-- nav-email start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Email</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="mailto:info@onwave.it" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">info@onwave.it</a><br>
                    {{-- <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@onwave.it</a> --}}
                </div>
            </div><!-- nav-email end -->

            <!-- nav-address start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Indirizzo</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="https://www.google.com/maps/place/Via+Lorenzo+Bonomo,+27,+76123+Andria+BT/data=!4m2!3m1!1s0x13381a8102c055d1:0x305a597a1341f6df?sa=X&ved=2ahUKEwj9m_Cy8anrAhUGwKQKHd9HAqIQ8gEwAHoECAsQAQ" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
                       Via Lorenzo Bonomo 27/29<br>
                        76123 Andria (BT)
                    </a>
                </div>
            </div><!-- nav-address end -->

            <!-- nav-phone start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Telefono</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="tel:+390883950375" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+39 0883 950375</a><br>
                    {{-- <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 9635 7335</a> --}}
                </div>
            </div><!-- nav-phone end -->
        </div><!-- nav-information end -->

        <!-- nav-copyright start -->
        <div class="nav-copyright text-right">
            <p class="copyright-style nav-fade-anim js-nav-anim">
                &copy; Copyright 2020 ONWAVE
            </p>
        </div><!-- nav-copyright end -->
    </div><!-- pos-rel end -->
</nav>
