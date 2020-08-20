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
                <a href="{{route('about')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="About us">About us</span>
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
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@umaya_agency.com</a><br>
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@umaya_job.com</a>
                </div>
            </div><!-- nav-email end -->

            <!-- nav-address start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Indirizzo</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
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
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 8532 7834</a><br>
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 9635 7335</a>
                </div>
            </div><!-- nav-phone end -->
        </div><!-- nav-information end -->

        <!-- nav-copyright start -->
        <div class="nav-copyright text-right">
            <p class="copyright-style nav-fade-anim js-nav-anim">
                &copy; Copyright 2020 ONWAVE powered by <a href="https://shareservice.it" target="_blank" class="text-weight-700 js-pointer-small">SHARESERVICE</a>
            </p>
        </div><!-- nav-copyright end -->
    </div><!-- pos-rel end -->
</nav>
