@extends('layouts.base')

@section('encabezado')
    @include('layouts.header')
@endsection

@section('content')
    	<!--==================================================-->
	<!----- Start Techno Slider Area ----->
	<!--==================================================-->
	<div class="slider_area d-flex align-items-center slider12" id="home">
		<div class="container">
			<div class="row d-flex align-items-center">
				<!--Start Single Portfolio -->
				<div class="col-md-6 col-lg-6">
					<div class="single_slider wow fadeInUp" data-wow-delay=".4">
						<div class="slider_content">
							<div class="slider_text">
								<div class="slider_text_inner">
									<h5> SERVICIOS GARANTIZADOS </h5>
									<h1> Servicios y productos </h1>
									<h1> de calidad </h1>
									<p>Ayudamos a las empresas a crecer utilizando tecnologías del futuro.</p>
								</div>
								<div class="slider_button pt-3 d-flex">
									<div class="button">
										<a href="#"> Inicia un proyecto <i class="bi bi-arrow-right"></i> </a>
									</div>
								</div>
								<div class="hero-call-icon">
									<div class="call-icon">
										<i class="bi bi-telephone-plus"></i>
									</div>
									<div class="call-title">
										<p style="color: white">Llamadas</p>
										<h6 style="color: white">+51 980 534 198 </h6>
									</div>
								</div>
							</div>
						</div>
						<div class="em-hero-inner-shape rotateme">
							<img src="assets/images/slider/box.png" alt="">
						</div>
						<div class="em-hero-inner-shape1">
							<img src="assets/images/slider/line.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6"> 
					<div class="hero_section_thumb wow fadeInDown" data-wow-delay=".5">
						<div class="hero-main-thumb">
							{{-- <img src="assets/images/slider/main-img.png" alt=""> --}}
							<img src="assets/images/slider/techno-seo.png" alt="">
						</div>
						<div class="em-hero-icon-thumb bounce-animate4">
							{{-- <img src="assets/images/slider/shape-img-1.png" alt=""> --}}
						</div>
						<div class="em-hero-inner-thumb2 bounce-animate">
							<img src="assets/images/slider/roket.png" alt="">
						</div>
						<div class="em-hero-inner-thumb3 bounce-animate4">
							<img src="assets/images/slider/shape-img-2.html" alt="">
						</div>
						<div class="em-hero-inner-thumb4 bounce-animate5">
							<img src="assets/images/slider/icon.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Slider Area ----->
	<!--==================================================-->
    
    <!--==================================================-->
	<!----- Start Techno Feature Area ----->
	<!--==================================================-->
	<div class="feature-area owl-nav3 style-two pt-85 pb-160">
		<div class="container">
			<div class="row feature-shape">
				<div class="col-lg-8">
					<div class="section_title style-two mb-30 pb-1 mt-3 wow fadeInDown" data-wow-delay=".4">
						<div class="section_sub_title">
							<h5> Nuestros Servicios</h5>
						</div>
						<div class="section_main_title pb-15">
							<h1> Servicios Destacados </h1>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="em-feature-button text-right mt-50">
						<a href="#">Todos los servicios <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
				<div class="feature-shape1">
					<img src="assets/images/border-f.png" alt="">
				</div>
				<div class="feature-shape2 bounce-animate3">
					<img src="assets/images/service-sp.png" alt="">
				</div>
			</div>
			<div class="row">
				<div class="team-list owl-carousel">
					<div class="col-lg-12">
						<div class="feature-extra-single-box">
							<div class="em-feature-single-box wow fadeInLeft" data-wow-delay=".5">
								<div class="feature-single-box-inner">
									<div class="feature-top-icon">
										<img src="assets/images/icon-2-1.png" alt="">
									</div>
									<div class="em-feature-title">
										<h2>Automatización de Procesos</h2>
										<p>Automatiza tus procesos y dale libertad a tu vida.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="feature-extra-single-box">
						<div class="em-feature-single-box wow fadeInLeft" data-wow-delay=".5">
							<div class="feature-single-box-inner2">
								<div class="feature-top-icon up">
									<img src="assets/images/icon-2-2.png" alt="">
								</div>
								<div class="em-feature-title">
									<h2>Desarrollo de Software</h2>
									<p>Desarrollamos tu software totalmente personalizado.</p>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="feature-extra-single-box">
						<div class="em-feature-single-box wow fadeInLeft" data-wow-delay=".5">
							<div class="feature-single-box-inner">
								<div class="feature-top-icon">
									<img src="assets/images/icon-2-3.png" alt="">
								</div>
								<div class="em-feature-title">
									<h2>Diseño de Páginas</h2>
									<p> Elegantes plantillas y diseños personalizados.</p>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="feature-extra-single-box">
						<div class="em-feature-single-box wow fadeInLeft" data-wow-delay=".5">
							<div class="feature-single-box-inner2">
								<div class="feature-top-icon">
									<img src="assets/images/icon-2-4.png" alt="">
								</div>
								<div class="em-feature-title">
									<h2>Máquinas Valorizadoras</h2>
									<p>Contadoras de billetes y monedas, con soporte continuo.</p>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="feature-extra-single-box">
						<div class="em-feature-single-box wow fadeInLeft" data-wow-delay=".5">
							<div class="feature-single-box-inner">
								<div class="feature-top-icon">
									<img src="assets/images/icon-2-4.png" alt="">
								</div>
								<div class="em-feature-title">
									<h2>Asesoría y Consultoria</h2>
									<p>Seguridad Informática y servidores.</p>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno  Feature Area ----->
	<!--==================================================-->


@endsection

@section('pie')
  @include('layouts.footer')
@endsection