@extends('master')
@include('sections.indexbanner')
@section('content')

<!-- Video Area 
<div id="video-area" class="video-area bg-image-7 bg-fixed" data-black-overlay="6">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                <div class="video-area-inner text-center">
                    <a class="video-popup-trigger" href="https://vimeo.com/104509732">
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!--// Video Area -->

<!-- Blogs Area -->
<section id="blogs-area" class="blogs-area ptb-130 bg-grey">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-10 col-12 offset-0">
                            <div class="section-title text-left">
                                <h2>Noticias <span class="secondary-theme-color">  </span> </h2>
                                <!--<p>Información de interes para la comunidad educativa del <br/> Instituto Superior de Educación Normal del estado de Colima</p>-->
                            </div>
                        </div>
					</div>
					<div class="row justify-content-center">
                        <!-- Single Blog 
                    IMPRTANTE : hacer un for para jalar la información directo de base de datos -->
						<div class="col-lg-6 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<a href="blog-details.html">
										<img src="{{ asset('dist/images/blog/layout-1/blog-thumbnail-4.jpg') }}" alt="blog thumb">
									</a>
								</div>
								<div class="blog-content">
									<h5><a href="blog-details.html">POLICY OF BUSINESS</a></h5>
									<h3>For any company, Policy is more important for future</h3>
									<a href="blog-details.html" class="cr-readmore">Read More</a>
								</div>
							</article>
						</div>
						<!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-6 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<a href="blog-details.html">
										<img src="{{ asset('dist/images/blog/layout-1/blog-thumbnail-1.jpg') }}" alt="blog thumb">
									</a>
								</div>
								<div class="blog-content">
									<h5><a href="blog-details.html">ADVISORY AD PLAN</a></h5>
									<h3>Colombia Gets Counting the Cost of Delay & Disruption</h3>
									<a href="blog-details.html" class="cr-readmore">Read More</a>
								</div>
							</article>
						</div>
						<!--// Single Blog -->
					</div>
				</div>
			</section>
			<!--// Blogs Area -->

@endsection