@extends('layout.master')

@section('content')
<main class="js-animsition-overlay" data-animsition-overlay="true">
    <!-- home slider start -->
			<section id="up" class="pos-rel section-bg-dark-1 js-home-slider fullscreen-slider">
				<!-- swiper-wrapper start -->
				<div class="swiper-wrapper">
					<!-- swiper-slide start -->
					<div class="swiper-slide">
						<!-- slide-bg -->
						<div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(assets/images/sfondi/digitalgun.jpg)"></div>
						<!-- bg-overlay -->
						<div class="bg-overlay-black"></div>

						<!-- content start -->
						<div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
							<div class="container small padding-top-bottom-120">
								<h2 class="headline-xl">
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-02">Diamo luce</span>
									</span>
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-03">a creatività</span>
									</span>
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-04">e innovazione</span>
									</span>
								</h2>
								<div class="margin-top-30 anim-fade tr-delay-08">
									<a href="#" class="border-btn js-pointer-large">
										<span class="border-btn__inner">Scopri di più</span>
										<span class="border-btn__lines-1"></span>
										<span class="border-btn__lines-2"></span>
									</a>
								</div>
							</div>
						</div><!-- content end -->
					</div><!-- swiper-slide end -->

					<!-- swiper-slide start -->
					<div class="swiper-slide">
						<!-- slide-bg -->
						<div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(assets/images/sfondi/rainbow.jpg)"></div>
						<!-- bg-overlay -->
						<div class="bg-overlay-black"></div>

						<!-- content start -->
						<div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
							<div class="container small text-center padding-top-bottom-120">
								<h2 class="headline-xl">
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-02">We’r Provided</span>
									</span>
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-03">
											<span class="text-color-red">Best</span> Digital
										</span>
									</span>
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-04 text-color-red">Services</span>
									</span>
								</h2>
								<div class="margin-top-30 anim-fade tr-delay-08">
									<a href="#" class="border-btn js-pointer-large">
										<span class="border-btn__inner">Read more</span>
										<span class="border-btn__lines-1"></span>
										<span class="border-btn__lines-2"></span>
									</a>
								</div>
							</div>
						</div><!-- content end -->
					</div><!-- swiper-slide end -->

					<!-- swiper-slide start -->
					<div class="swiper-slide">
						<!-- slide-bg -->
						<div class="js-parallax-slide-bg bg-img-cover" style="background-image:url(assets/images/sfondi/reddot.jpg)"></div>
						<!-- bg-overlay -->
						<div class="bg-overlay-black"></div>

						<!-- content start -->
						<div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
							<div class="container small padding-top-bottom-120">
								<h2 class="headline-xl">
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-02">Best Solutions</span>
									</span>
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-03">& Ideas for</span>
									</span>
									<span class="hidden-box d-block">
										<span class="anim-slide tr-delay-04">Your Business</span>
									</span>
								</h2>
								<div class="margin-top-30 anim-fade tr-delay-08">
									<a href="#" class="border-btn js-pointer-large">
										<span class="border-btn__inner">Read more</span>
										<span class="border-btn__lines-1"></span>
										<span class="border-btn__lines-2"></span>
									</a>
								</div>
							</div>
						</div><!-- content end -->
					</div><!-- swiper-slide end -->
				</div><!-- swiper-wrapper end -->

				<!-- swiper-button-prev start -->
				<div class="swiper-button-prev-box fullscreen-slider-arrow after-preloader-anim">
					<div class="anim-fade">
						<div class="swiper-button-prev"></div>
					</div>
				</div><!-- swiper-button-prev end -->
				<!-- swiper-button-next start -->
				<div class="swiper-button-next-box fullscreen-slider-arrow after-preloader-anim">
					<div class="anim-fade tr-delay-06">
						<div class="swiper-button-next"></div>
					</div>
				</div><!-- swiper-button-next end -->

				<!-- swiper-pagination start -->
				<div class="pagination-box fullscreen-slider-pagination after-preloader-anim">
					<div class="anim-fade tr-delay-03">
						<div class="swiper-pagination counter-pagination"></div>
					</div>
                </div><!-- swiper-pagination end -->
            </section>
            <!-- home slider end -->

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
					<div class="js-infinite-slider about-slider hidden-box">
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
						</div><!-- swiper-wrapper end -->
					</div><!-- js-infinite-slider end -->
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
			<div class="pos-rel bg-img-cover height-100vh" style="background-image:url(assets/images/projects/neon-lights/woman-wearing-beige-and-gray-hoodie-portrait-2272855.jpg)">
				<div class="bg-overlay-black"></div>
				<div class="pos-rel height-100perc">
					<a href="https://www.youtube.com/watch?v=hitNXU4PoRU" class="play-button js-popup-youtube js-pointer-large">
						<span class="play-button__inner"></span>
					</a>
				</div>
            </div>
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
						<button class="list__item js-filter-button anim-fade tr-delay-01 js-pointer-small" data-filter=".marketing">
							<span class="flip-btn text-color-black" data-text="Marketing">Marketing</span>
						</button>
						<button class="list__item js-filter-button anim-fade tr-delay-02 js-pointer-small" data-filter=".photoshoot">
							<span class="flip-btn text-color-black" data-text="Photoshoot">Photoshoot</span>
						</button>
						<button class="list__item js-filter-button anim-fade tr-delay-03 js-pointer-small" data-filter=".branding">
							<span class="flip-btn text-color-black" data-text="Branding">Branding</span>
						</button>
					</div><!-- filter-buttons end -->

					<!-- js-isotope-filter-grid-box start -->
					<div class="js-isotope-filter-grid-box container full">
						<!-- empty grid -->
						<div class="js-isotope-filter-grid-item empty-grid-1px-33-50-none"></div>
						<div class="js-isotope-filter-grid-item empty-grid-200px-33-none"></div>
						<div class="js-isotope-filter-grid-item empty-grid-100px-33-50-none"></div>

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item branding">
							<a href="project_beauty-lab.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/beauty-lab/beauty-beauty-product-cosmetics-makeup-2845213.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Branding</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Beauty lab</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/sneakers/person-holding-a-shoes-3194608.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Marketing</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Sneakers</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/knit-cap/man-wears-orange-knit-cap-and-shirt-2802601.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Marketing</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Knit cap</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/pexels/woman-in-black-sexy-top-2825034.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Pexels</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/drone/quadcopter-on-wooden-surface-1601217.jpg" alt="project">
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
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
							<a href="project_blue-ridge.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/blue-ridge/flat-lay-photography-of-several-product-bottles-on-withered-1667071.jpg" alt="project">
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
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/hoop-earrings/woman-with-gold-colored-hoop-earrings-2420555.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Hoop earrings</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/black-eyes/woman-in-black-tube-top-beside-woman-in-white-off-shoulder-3823424-2.jpg" alt="project">
								</div>
								<div class="margin-top-10 js-scrollanim">
									<span class="hidden-box d-block">
										<span class="subhead-xxs text-color-red anim-slide">Photoshoot</span>
									</span>
									<h3 class="hidden-box">
										<span class="headline-xxxs text-color-black anim-slide tr-delay-02">Black eyes</span>
									</h3>
								</div>
							</a>
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item branding">
							<a href="project_drone.html" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
								<div class="anim-img-scale anim-img-scale_hover js-img-scale">
									<img class="anim-img-scale__inner" src="assets/images/projects/the-ordinary/the-ordinary-product-line-3685530.jpg" alt="project">
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
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/chayhana.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/dongolok.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/eptep-septep.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/guldoyjan.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/jorgo.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/judoboy.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/kizil-jindi.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/meyman.png" alt="clients logo">
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide text-center">
									<img class="client-logo" src="assets/images/clients/olchobay.png" alt="clients logo">
								</div><!-- swiper-slide end -->
							</div><!-- swiper-wrapper end -->
                        </div><!-- js-infinite-slider end -->


						<!-- clients-lines start -->
						{{-- <div class="clients-lines padding-top-90">
							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/balancha.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/balancha-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/jorgo.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/jorgo-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/judoboy.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/judoboy-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/kizil-jindi.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/kizil-jindi-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/meyman.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/meyman-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/olchobay.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/olchobay-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/tamaktan.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/tamaktan-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/chayhana.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/chayhana-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/dongolok.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/dongolok-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/eptep-septep.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/eptep-septep-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<div class="clients-lines__column">
								<div class="clients-lines__inner hover-box pos-rel">
									<img class="client-logo client-hover-out pos-abs pos-center-center" src="assets/images/clients/guldoyjan.png" alt="clients logo">
									<img class="client-logo client-hover-in pos-abs pos-center-center" src="assets/images/clients/guldoyjan-red.png" alt="clients logo">
								</div>
							</div><!-- clients-lines__column end -->

							<!-- clients-lines__column start -->
							<a href="#" class="clients-lines__column js-pointer-large">
								<div class="clients-lines__inner hover-box pos-rel js-scrollanim">
									<div class="padding-left-right-20 subhead-xxs text-center pos-abs pos-center-center">
										<span class="anim-text-double-fill" data-text="This spot">This spot</span><br>
										<span class="anim-text-double-fill tr-delay-02" data-text="awaits">awaits</span><br>
										<span class="anim-text-double-fill tr-delay-04" data-text="You">You</span>
									</div>
								<div class="border-left-anim in-10px red"></div>
								<div class="border-top-anim in-10px red"></div>
								<div class="border-right-anim in-10px red"></div>
								<div class="border-bottom-anim in-10px red"></div>
								</div>
							</a><!-- clients-lines__column end -->
                        </div> --}}
                        <!-- clients-lines end -->
					</div><!-- container end -->
				</div><!-- pos-rel end -->
            </section>
            <!-- clients end -->





</main>
@endsection
