<!DOCTYPE HTML>
<html>
	<head>
		<title>Home | IASIG</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick-theme.css')}}"/>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
		<!-- Scripts -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/skel.min.js')}}"></script>
		<script src="{{asset('assets/js/util.js')}}"></script>
		<script src="{{asset('assets/js/main.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/slick/slick.min.js')}}"></script>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<img src="{{asset('assets/img/IASIG_logo_white.png')}}" class="iasigLogo" alt="logo">
                                <p>Interactive Audio Special Interest Group</p>
								@include('errors.error')
                                @include('errors.success')
								<p>An organization that brings together experts to share their knowledge and help improve<br /> the state of the art in audio for games, websites, VR content, and other interactive performances.</p>
								<a href="register" style="text-decoration:none;"><button class="widget_btn btn-lg btn-primary">Register Today</button></a>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#about">About</a></li>
								<li><a href="#courses">Courses</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="/login">Login</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
						<div id="courses" style="width: 80%; padding-top: 100px;">
								<h1>IASIG Courses</h1>
								<hr>
								<div class="row">
									<div class="col-lg-12 col-12">
										<div class="left_align_img">
											<div class="row">
												@foreach ($category as $categories)
													<div class="col-md-4 col-sm-12">
														<div class="m-t-15 text-center">
															<a href="#{{ $categories->id }}"><button class="widget_btn btn btn-block btn-outline-primary">{{ $categories->name }}</button></a><br>
														</div>
													</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>

								@foreach ($category as $categories)
									<div class="row" id="{{ $categories->id }}">
										<div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
											<div>
												<h2 class="major">{{ $categories->name }} Courses</h2>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 m-t-35">
											<div class="p-b-20 card{{ $categories->id }}">
												@foreach ($course as $courses)
													@if($courses->category == $categories->name)
														@include('components.slider.courses.index')
													@endif
												@endforeach
											</div>
										</div>
										<script type="text/javascript">
											$(document).ready(function(){
												$('.card{{ $categories->id }}').slick({
													slidesToShow: 3,
													slidesToScroll: 3,
													autoplay: true,
													autoplaySpeed: 3000,
													arrows: false,
													responsive: [
													{
													breakpoint: 1024,
														settings: {
															slidesToShow: 3,
															slidesToScroll: 3,
														}
													},
													{
													breakpoint: 600,
														settings: {
															slidesToShow: 2,
															slidesToScroll: 2,
														}
													},
													{
													breakpoint: 480,
														settings: {
															slidesToShow: 1,
															slidesToScroll: 1,
														}
													}
													]
												});
											});
										</script>
										<div class="col-12 m-t-35 spaceCategory text-center" style="margin:50px 0;">
											<a href="register" style="text-decoration:none;"><button class="widget_btn btn-lg btn-primary">Register Today</button></a>
										</div>
									</div>
								@endforeach
							</div>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- About -->
							<article id="about">
								<h2 class="major">About IASIG</h2>
								<span class="image main"><img src="{{asset('assets/img/iasig-soundboard.jpg')}}" alt="" /></span>
								<p>Game Audio’ encompasses a diverse set of skills and concepts: from recording a tank, to hardcore DSP programming; from writing a tune for a mobile phone, to writing out string parts for a recording session with the London Symphony Orchestra... so defining a "game audio curriculum" is no simple task. Universities and Colleges around the world are interested in developing courses in this area, so the aim of the EDU Working Group is to provide guidance for course developers, which students may also use to understand what courses may be available to them.
								</p>
								<div class="m-t-35">
									<h3>The EDUWG goals include:</h3>
								</div>
								<div>
									<ul>
										<li class="list-group-item" style="background-color:transparent;border:solid white 1px">Shortening the learning curve of new audio personnel in game audio by providing resources that people can learn from.</li>
										<li class="list-group-item" style="background-color:transparent;border:solid white 1px">Creating a clear reference for terminology and creation methods in the world of game audio.</li>
										<li class="list-group-item" style="background-color:transparent;border:solid white 1px">Supplying schools with information to integrate game audio education into their curricula.</li>
									</ul>
								</div>
								<p class="m-t-35">
								The EDUWG also maintains the industry's only dedicated, online game audio resource for educators and students - The IASIG Interactive Audio Wiki --- <a href="http://www.iasig.org/wiki/">http://www.iasig.org/wiki/</a>
								</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact IASIG</h2>
								<!--<span class="image main"><img src="{{asset('assets/img/pic03.jpg')}}" alt="" /></span>-->
								<div class="image_text">
									<h4>Have a question or comment?</h4>
									<p>Fill out the form below and an IASIG Representative will contact you within the next 1-2 business days.</p>
									<form id="commentForm" method="GET" action="/contact/send" class="validate" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="tab-content">
											<div class="form-group">
												<label for="email" class="control-label">Email *</label>
												<input id="email" name="email" type="text" @if(Auth::user() ) value="{{ Auth::user()->email }}" @else placeholder="Email" @endif class="form-control required">
											</div>
											<div class="form-group">
												<label for="message" class="control-label">Message *</label>
												<textarea style="background-color:transparent;" id="message" name="message" type="text" placeholder="Type Message..." class="form-control required" minlength="200"></textarea>
											</div>
											<button type="submit" class="buttonSpacing widget_btn btn btn-primary">SEND MESSAGE</button>
										</div>
									</form>
								</div>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; {{ date("Y") }} <a href="https://www.iasig.org/" target="_blank">IASIG</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

	</body>
</html>
