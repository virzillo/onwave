@extends('layout.master')

@section('content')
@push('style')


@endpush
<main class="js-animsition-overlay" data-animsition-overlay="true">


    <section id="up" class="pos-rel bg-img-cover" style="background-image:url(assets/images/sfondi/sfondo-colorato.jpg); ">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <div class="padding-top-bottom-120 container small">
                <!-- title start -->
                <h2 class="headline-l after-preloader-anim">
                    <span class="anim-text-fill" data-text="Onwave, ">Onwave, </span>
                    <span class="anim-text-fill tr-delay-01" data-text="we create">we create</span><br>
                    <span id="js-typewriter1" class="text-color-red"></span><br>
                    <span class="anim-text-fill tr-delay-02" data-text="the future">the future</span>
                </h2><!-- title end -->
            </div>
        </div><!-- pos-rel end -->


	</section>


            	<!-- about us start -->
			<section id="down" class="pos-rel section-bg-dark-2">
				<!-- pos-rel start -->
				<div class="pos-rel padding-top-bottom-120">
					<!-- flex-container start -->
					<div class="container flex-container padding-bottom-70">
						<!-- column start -->
						<div class="six-columns padding-bottom-20">
							<!-- title start -->
							<h2 class="column-l-r-margin-10 headline-m js-scrollanim">
								<span class="hidden-box d-block">
									<span class="anim-slide">
										We Are <span class="text-color-red">Creative</span>
									</span>
								</span>
								<span class="hidden-box d-block">
									<span class="anim-slide tr-delay-01 text-color-red">People</span>
								</span>
							</h2><!-- title end -->
						</div><!-- column end -->

						<!-- column start -->
						<div class="six-columns padding-bottom-20">
							<div class="column-l-r-margin-10">
								<p class="body-text-s anim-text-reveal js-scrollanim">Non uno studio ma bensì uno spazio creativo dove liberare l’immaginazione e creare contenuti personalizzati.Creatività, Strategia e Sviluppo sono le parole chiavi che caratterizzano il nostro lavoro.
                                    Grazie al lavoro di squadra di un team di giovani, con una lunga esperienza, siamo in grado di offrire consulenza e sviluppo per professionisti, start-up, società, organizzazioni, enti pubblici e privati.</p>

								<!-- list start -->
								{{-- <ul class="list text-color-dadada margin-top-30 js-scrollanim">
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide">Advertising</div>
									</li>
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide tr-delay-01">Developement</div>
									</li>
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide tr-delay-02">Content Creator</div>
									</li>
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide tr-delay-03">Web Communication</div>
									</li>
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide tr-delay-04">Brand Identity</div>
									</li>
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide tr-delay-05">Social Management</div>
									</li>
									<li class="list__item red dot hidden-box">
										<div class="subhead-xxs anim-slide tr-delay-06">Label Design</div>
									</li>
                                </ul> --}}
                                <!-- list end -->
							</div>
						</div><!-- column end -->
					</div><!-- flex-container end -->

					<!-- js-infinite-slider start -->
					{{-- <div class="js-infinite-slider about-slider hidden-box">
						<!-- swiper-wrapper start -->
						<div class="swiper-wrapper">
							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/people-holding-their-phones-3184435.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/fashion-people-woman-girl-3979213.jpg" alt="About us">
								<img class="padding-top-20" src="assets/images/about/about_slider/men-writing-on-board-3184633.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/man-people-desk-laptop-3931391.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/photo-of-man-using-smartphone-3183191.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/fashion-woman-girl-cute-3979116.jpg" alt="About us">
								<img class="padding-top-20" src="assets/images/about/about_slider/fashion-man-people-school-3799830.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/women-using-computers-3184348.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/man-wearing-purple-long-sleeved-shirt-looking-at-the-ipad-3184326.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/women-s-white-framed-sunglasses-2690323.jpg" alt="About us">
								<img class="padding-top-20" src="assets/images/about/about_slider/fashion-man-sunglasses-people-3965233.jpg" alt="About us">
							</div><!-- swiper-slide end -->

							<!-- swiper-slide start -->
							<div class="swiper-slide">
								<img src="assets/images/about/about_slider/fashion-woman-girl-cute-3979104.jpg" alt="About us">
                            </div><!-- swiper-slide end -->

                        </div>
                        <!-- swiper-wrapper end -->
                    </div> --}}
                    <!-- js-infinite-slider end -->
				</div><!-- pos-rel end -->
            </section>
            <!-- about us end -->

           	<!-- what we do start -->
			<section class="pos-rel section-bg-light-1" data-midnight="black" id="servizi">
				<!-- pos-rel start -->
				<div class="pos-rel flex-min-height-100vh">
					<!-- container start -->
					<div class="container padding-top-bottom-120">
						<h2 class="headline-l text-color-red hidden-box" >
							<span class="anim-slide js-scrollanim">What We Do</span>
						</h2>

						<!-- flex-container start -->
						<div class="flex-container">
							<!-- column start -->
							<div class="six-columns column-100-100 padding-top-60">
								<div class="column-r-margin-40-999 js-scrollanim">
									<h2 class="subhead-l text-color-black anim-text-reveal margin-bottom-30" >Le competenze digitali per sostenere il brand nel raggiungimento di un determinato target.</h2>
                                    <h2 class="subhead-l text-color-black anim-text-reveal" style="font-size:18px !important;"> I nostri servizi sono rivolti a tutti coloro che desiderano dare un tono diverso alla propria immagine, accrescere il proprio business, comunicare nel modo più appropriato ed efficace, rafforzare e diffondere la propria brand awareness fuori e dentro la rete.</h2>
									<div class="margin-top-30 anim-fade tr-delay-05">
										<a href="#servizi" class="skew-btn js-pointer-large">
											<span class="skew-btn__box">
												<span class="skew-btn__content text-color-black">Servizi</span>
												<span class="skew-btn__arrow black"></span>
											</span>
										</a>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="six-columns column-100-100 padding-top-60">
								<!-- accordion start -->
								<div class="accordion accordion_black-underline js-accordion js-accordion-first-active">
									<!-- accordion__tab start -->
									<div class="accordion__tab js-accordion-tab">
										<div class="accordion__btn js-accordion-btn js-pointer-large">
											<h6 class="accordion__btn-title black-plus-icon headline-xxxs text-color-black margin-top-bottom-20">Web Communication</h6>
										</div>
										<div class="accordion__content js-accordion-content">
											<p class="body-text-xs text-color-black">Website, E-Commerce, Web Design, SEO, Web Marketing</p>
										</div>
									</div><!-- accordion__tab end -->

									<!-- accordion__tab start -->
									<div class="accordion__tab js-accordion-tab">
										<div class="accordion__btn js-accordion-btn js-pointer-large">
											<h6 class="accordion__btn-title black-plus-icon headline-xxxs text-color-black margin-top-bottom-20">Advertising</h6>
										</div>
										<div class="accordion__content js-accordion-content">
											<p class="body-text-xs text-color-black">Google ADs, Social Media ADV, Affissioni</p>
										</div>
									</div><!-- accordion__tab end -->

									<!-- accordion__tab start -->
									<div class="accordion__tab js-accordion-tab">
										<div class="accordion__btn js-accordion-btn js-pointer-large">
											<h6 class="accordion__btn-title black-plus-icon headline-xxxs text-color-black margin-top-bottom-20">Developement</h6>
										</div>
										<div class="accordion__content js-accordion-content">
											<p class="body-text-xs text-color-black">Sviluppo software, Gestionali aziendali, App</p>
										</div>
									</div><!-- accordion__tab end -->

									<!-- accordion__tab start -->
									<div class="accordion__tab js-accordion-tab">
										<div class="accordion__btn js-accordion-btn js-pointer-large">
											<h6 class="accordion__btn-title black-plus-icon headline-xxxs text-color-black margin-top-bottom-20">Content Creator</h6>
										</div>
										<div class="accordion__content js-accordion-content">
											<p class="body-text-xs text-color-black">Fotografia, Videomaking, Graphic Design, IG Stories Effects</p>
										</div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
									<div class="accordion__tab js-accordion-tab">
										<div class="accordion__btn js-accordion-btn js-pointer-large">
											<h6 class="accordion__btn-title black-plus-icon headline-xxxs text-color-black margin-top-bottom-20">Brand Identity</h6>
										</div>
										<div class="accordion__content js-accordion-content">
											<p class="body-text-xs text-color-black">Logo Creator, Storytelling, Obiettivi e Visione aziendale</p>
										</div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
									<div class="accordion__tab js-accordion-tab">
										<div class="accordion__btn js-accordion-btn js-pointer-large">
											<h6 class="accordion__btn-title black-plus-icon headline-xxxs text-color-black margin-top-bottom-20">Social Management</h6>
										</div>
										<div class="accordion__content js-accordion-content">
											<p class="body-text-xs text-color-black">Gestione account aziendali, Pubblicazione post e stories</p>
										</div>
									</div><!-- accordion__tab end -->
								</div><!-- accordion end -->
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- pos-rel end -->
			</section><!-- what we do end -->

            <!-- video content start -->
            {{-- <div class="pos-rel bg-img-cover height-100vh" style="background-image:url(assets/images/projects/neon-lights/woman-wearing-beige-and-gray-hoodie-portrait-2272855.jpg)">
                <video src="/assets/dj.mp4" class="video-bg" muted loop autoplay playsinline></video>

            </div> --}}
            <!-- video content end -->


			<!-- portfolio start -->
			<section class="pos-rel section-bg-light-2" data-midnight="black">
				<!-- pos-rel start -->
				<div class="pos-rel padding-top-bottom-120">
					<!-- title start -->
					<h2 class="headline-xxxl text-color-black text-center hidden-box js-scrollanim">
						<span class="anim-slide">
							Recent <span class="text-color-red">Works</span>
						</span>
					</h2><!-- title end -->

					<!-- filter-buttons start -->
					<div class="list list_row list_center list_margin-30px padding-top-90 js-filter-button-box js-scrollanim">

						<button class="list__item js-filter-button anim-fade js-pointer-small js-filter-button-active" data-filter="*">
							<span class="flip-btn text-color-black" data-text="Everything">Everything</span>
                        </button>
                        <button class="list__item js-filter-button anim-fade tr-delay-03 js-pointer-small" data-filter=".website">
							<span class="flip-btn text-color-black" data-text="Website">Website</span>
						</button>
						<button class="list__item js-filter-button anim-fade tr-delay-01 js-pointer-small" data-filter=".marketing">
							<span class="flip-btn text-color-black" data-text="Marketing">Marketing</span>
						</button>
						<button class="list__item js-filter-button anim-fade tr-delay-02 js-pointer-small" data-filter=".photoshoot">
							<span class="flip-btn text-color-black" data-text="Photoshoot">Photoshoot</span>
						</button>

					</div><!-- filter-buttons end -->

					<!-- js-isotope-filter-grid-box start -->
					<div class="js-isotope-filter-grid-box container full" >
						<!-- empty grid -->
						<div class="js-isotope-filter-grid-item empty-grid-1px-33-50-none"></div>
						<div class="js-isotope-filter-grid-item empty-grid-200px-33-none"></div>
						<div class="js-isotope-filter-grid-item empty-grid-100px-33-50-none"></div>

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item website">
							<a href="{{route('portfolio')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/Urban_ring_1.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Website</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Urban Ring</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

                        <!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
							<a href="{{route('portfolio')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/portfolio/portfolio2.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Marketing</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Drone</span>
									</h3>
								</div>
							</a>
                        </div><!-- grid-item end -->

                        <!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item website">
							<a href="{{route('portfolio')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/portfolio/portfolio1.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Branding</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">The ordinary</span>
									</h3>
								</div>
							</a>
                        </div><!-- grid-item end -->



						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
							<a href="{{route('portfolio')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/portfolio/portfolio3.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Marketing</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Blue ridge</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot" >
							<a href="{{route('portfolio')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/portfolio/portfolio4.jpg" alt="Urban Ring">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Urban Ring</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
							<a href="{{route('portfolio')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/CRBRS.jpg" alt="CRBRS">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">CRBRS</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->


					</div><!-- js-isotope-filter-grid-box end -->
				</div><!-- pos-rel end -->
            </section>
            <!-- portfolio end -->


			<!-- clients start -->
			<section class="pos-rel section-bg-dark-1">
				<!-- pos-rel start -->
				<div class="pos-rel flex-min-height-100vh">
					<!-- container start -->
					<div class="padding-top-bottom-120 container">
						<!-- title start -->
						<h2 class="headline-l js-scrollanim">
							<span class="hidden-box d-block">
								<span class="anim-slide">
									<span class="text-color-red">I Clienti</span>
								</span>
							</span>
							<span class="hidden-box d-block">
								<span class="anim-slide tr-delay-01">con cui abbiamo lavorato</span>
							</span>
							{{-- <span class="hidden-box d-block">
								<span class="anim-slide tr-delay-02">lavorato</span>
							</span> --}}
						</h2><!-- title end -->

                        <!-- js-infinite-slider start -->
						<div class="js-infinite-slider hidden-box padding-top-120">
							<!-- swiper-wrapper start -->
							<div class="swiper-wrapper">
								<!-- swiper-slide start -->
								{{-- <div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Spotimedia.png" alt="spotimedia">
                                </div> --}}
                                <!-- swiper-slide end -->

								<!-- swiper-slide start -->
								{{-- <div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Liberoshopping.png" alt="liberoshopping">
                                </div> --}}
                                <!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Oltremare.png" alt="oltremare">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								{{-- <div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Bazaria.png" alt="bazaria">
                                </div> --}}
                                <!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Mod_à.png" alt="moda">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								{{-- <div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Shiibui.png" alt="shiibui">
                                </div> --}}
                                <!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Velisti.png" alt="Vif">
                                </div>
                                <!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/loghi/Ademia.png" alt="ademia">
								</div><!-- swiper-slide end -->


							</div><!-- swiper-wrapper end -->
                        </div><!-- js-infinite-slider end -->



					</div><!-- container end -->
				</div><!-- pos-rel end -->
            </section>
            <!-- clients end -->





</main>
@endsection


@push('script')
<script src="assets/js/typewriter.js"></script>
<script src="assets/js/typewriter_init.js"></script>

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

{{--
<script src="assets/js/jquery.ripples-min.js"></script>
<script>
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
            var strength = 0.01 + Math.random() * 0.01;

            $el.ripples('drop', x, y, dropRadius, strength);
        }, 400);
    });
</script> --}}
@endpush
