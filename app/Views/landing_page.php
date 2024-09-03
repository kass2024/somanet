<!doctype html>
<html lang="en">
<head>
	<title>Somanet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/owl.theme.default.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/aos.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/style.css">
	<!-- Favicon -->
	<link rel="favorite icon" href="<?= base_url(); ?>assets/landing/images/favicon.jpeg">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>
		#serv1:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv2:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv3:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv4:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv5:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv6:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv7:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv8:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#serv9:hover {
			box-shadow: 0em 0em 0.2em 0.2em #8c0000;
			border-radius: 0.4em;
		}

		#mobi_bg {
			background-image: url('<?=base_url();?>assets/landing/soma_pics/mobi_bg2.jpg');
			background-size: 35em;
			border-radius: 2em;
		}

		#opac {
			background-color: skyblue;
			opacity: 0.8;
			height: 10em;
			border-radius: 2em;
			width: 103%;
			margin-left: -1.5%;
		}

		#down:hover {
			/*width: 8em;*/
			/*box-shadow: 0 0 0.4em 0.4em #8c0000;*/
			background-color: blue;
		}
		.sticky-wrapper.is-sticky .site-navbar .lang_switcher{
			color: #333 !important;
		}
	</style>
	<style>
		html {
			box-sizing: border-box;
			font-family: 'Arial', sans-serif;
			font-size: 100%;
		}
		*, *:before, *:after {
			box-sizing: inherit;
			margin:0;
			padding:0;
		}
		.mid {
			display: flex;
			align-items: center;
			justify-content: center;
			padding-top:1em;
		}


		/* Switch starts here */
		.rocker {
			display: inline-block;
			position: relative;
			/*
			SIZE OF SWITCH
			==============
			All sizes are in em - therefore
			changing the font-size here
			will change the size of the switch.
			See .rocker-small below as example.
			*/
			font-size: 2em;
			font-weight: bold;
			text-align: center;
			text-transform: uppercase;
			color: #888;
			width: 7em;
			height: 4em;
			overflow: hidden;
			border-bottom: 0.5em solid #eee;
		}

		.rocker-small {
			font-size: 0.75em; /* Sizes the switch */
			margin: 1em;
		}

		.rocker::before {
			content: "";
			position: absolute;
			top: 0.5em;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #999;
			border: 0.5em solid #eee;
			border-bottom: 0;
		}

		.rocker input {
			opacity: 0;
			width: 0;
			height: 0;
		}

		.switch-left,
		.switch-right {
			cursor: pointer;
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 2.5em;
			width: 3em;
			transition: 0.2s;
		}

		.switch-left {
			height: 2.4em;
			width: 2.75em;
			left: 0.85em;
			bottom: 0.4em;
			background-color: #ddd;
			transform: rotate(15deg) skewX(15deg);
		}

		.switch-right {
			right: 0.5em;
			bottom: 0;
			background-color: #bd5757;
			color: #fff;
		}

		.switch-left::before,
		.switch-right::before {
			content: "";
			position: absolute;
			width: 0.4em;
			height: 2.45em;
			bottom: -0.45em;
			background-color: #ccc;
			transform: skewY(-65deg);
		}

		.switch-left::before {
			left: -0.4em;
		}

		.switch-right::before {
			right: -0.375em;
			background-color: transparent;
			transform: skewY(65deg);
		}

		input:checked + .switch-left {
			background-color: #0084d0;
			color: #fff;
			bottom: 0px;
			left: 0.5em;
			height: 2.5em;
			width: 3em;
			transform: rotate(0deg) skewX(0deg);
		}

		input:checked + .switch-left::before {
			background-color: transparent;
			width: 3.0833em;
		}

		input:checked + .switch-left + .switch-right {
			background-color: #ddd;
			color: #888;
			bottom: 0.4em;
			right: 0.8em;
			height: 2.4em;
			width: 2.75em;
			transform: rotate(-15deg) skewX(-15deg);
		}

		input:checked + .switch-left + .switch-right::before {
			background-color: #ccc;
		}

		/* Keyboard Users */
		input:focus + .switch-left {
			color: #333;
		}

		input:checked:focus + .switch-left {
			color: #fff;
		}

		input:focus + .switch-left + .switch-right {
			color: #fff;
		}

		input:checked:focus + .switch-left + .switch-right {
			color: #333;
		}

		.important1 {
			font-weight: bold;
			font-size: xx-large;
			color: #0084d0;
		}

		.important2 {
			font-weight: bold;
			font-size: xx-large;
			color: #bd5757;
		}
		</style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer" style="<?=empty($type)?'':'display: none';?>"></div>
<div class="loader" style="<?=empty($type)?'':'display: none';?>">
	<div class="spinner-border text-primary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>


<div class="site-wrap">

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<?php
	if (empty($type)){
	?>
	<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

		<div class="container">
			<div class="row align-items-center">

				<div class="col-10 col-xl-2">
					<img src="<?=base_url('assets/images/somanet.png');?>" style="max-height: 54px" />


				</div>

				<!--navbar section starts-->

				<div class="col-10 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">

						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="#home-section" class="nav-link"><?= lang("app.home");?></a></li>
							<li><a href="<?=base_url('student-marks');?>" class="nav-link"><?= lang("app.studentMarks");?></a></li>
							<li><a href="<?=base_url('application');?>" class="nav-link"><?= lang("app.onlineRegistration");?></a></li>
							<li><a href="#about-section" class="nav-link"><?= lang("app.about");?></a></li>
							<li><a href="#services-section" class="nav-link"><?= lang("app.features");?></a></li>
							<li><a href="#contact-section" class="nav-link"><?= lang("app.contact");?></a></li>
							<li><a href="<?= base_url('login'); ?>" class="nav-link"><?= lang("app.login"); ?></a></li>
						</ul>
						<div class="lang" style="position: fixed;right: 20px;top: 20px;">
							<a style="color: #fefefe;" href="javascript:void" class="lang_switcher" data-target="en"><img src="<?=base_url('assets/images/en-flag.png');?>" width="20" height="20">En </a>
							<a style="color: #fefefe;" href="javascript:void" class="lang_switcher" data-target="fr"><img src="<?=base_url('assets/images/fr-flag.png');?>" width="25" height="25">Fr </a>
						</div>
					</nav>
				</div>

				<div class="col-12 d-inline-block d-xl-none ml-md-0 py-3" style="position: absolute;top: 0px;z-index:9999999;">
					<a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="fa fa-bars"></span></a>
				</div>

			</div>
		</div>

	</header>
	<?php
	}
	?>
	<!--navbar section ends-->
	<?=$content;?>
	<?php
	if (empty($type)){
	?>
	<footer class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-5">
							<h2 class="footer-heading mb-4"><?= lang("app.aboutUs");?></h2>
							<p><b>Somanet</b> is a platform for your school information management. It’s a complete
								packaged solution. It is flexible, you can still choose features you want to use and
								leave out what you don’t need.</p>
						</div>
						<div class="col-md-3 ml-auto">
							<h2 class="footer-heading mb-4"><?= lang("app.links");?></h2>
							<ul class="list-unstyled">
								<li><a href="#about-section" class="smoothscroll"><?= lang("app.aboutUs");?></a></li>
								<li><a href="#services-section" class="smoothscroll"><?= lang("app.features");?></a></li>
								<li><a href="#contact-section" class="smoothscroll"><?= lang("app.contactUs");?></a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-social">
							<h2 class="footer-heading mb-4"><?= lang("app.followUs");?></h2>
							<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
							<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
							<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
							<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
						</div>
					</div>
				</div>


			</div>
			<div class="row pt-5 mt-5 text-center">
				<div class="col-md-12">
					<div class="border-top pt-5">
						<p class="copyright"><small>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>
								All rights reserved | Powered by <a href="http://www.bbdigitech.com">Broadband Digi-tech
									Systems Ltd</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</small></p>

					</div>
				</div>

			</div>
		</div>
	</footer>

	<script src="<?= base_url(); ?>assets/landing/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/jquery-ui.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/jquery.countdown.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/aos.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/jquery.fancybox.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/jquery.sticky.js"></script>
	<script src="<?= base_url(); ?>assets/landing/js/isotope.pkgd.min.js"></script>


	<script src="<?= base_url(); ?>assets/landing/js/main.js"></script>
<script type="text/javascript">
	$(function () {
		var active_btn = null;
		$(document).on("click",".lang_switcher",function () {
			var lang = $(this).data("target");
			$.getJSON("<?=base_url('set_lang/');?>"+lang,function (json) {
				if (json.hasOwnProperty("success")){
					window.location.reload();
				}else{
					alert("Changing language failed");
				}
			});
		});
		$(document).on("click", "form [type='submit']", function () {
			active_btn = $(this);
		});
		$("form").parsley();
		$(".btnrecover").on("click",function () {
			$("#frm_reset").slideDown(300);
			$("#frm_login").slideUp(300);
		});
		$(".btnback").on("click",function () {
			$("#frm_reset").slideUp(300);
			$("#frm_login").slideDown(300);
		});
		$(".autoSubmit").on("submit", function (e) {
			e.preventDefault();
			var form = $(this);
			// var btn = $(this).find("[type='submit']");
			var btn = active_btn;
			var btn_txt = btn.text();
			btn.text("Please wait...").prop("disabled", true);
			$.post(form.prop("action"), $(this).serialize(), function (data) {
				btn.text(btn_txt).prop("disabled", false);
				if (data.hasOwnProperty("error")) {
					toastada.error(data.error);
					// alert(data.error);
				} else if (data.hasOwnProperty("success")) {
					if (btn.data("target")) {
						toastada.success(data.success);
						var target=btn.data("target");
						if (target.startsWith("#")){
							//try close modal
							$(target).modal('hide');
							return;
						}
						if (target == "reload"){
							setTimeout(function () {
								window.location.reload();
							}, 1500);
							return;
						}
						setTimeout(function () {
							window.location.href = btn.data("target");
						}, 1500);
					} else {
						toastada.success(data.success);
						form.trigger("reset");
					}
				} else {
					toastada.error("Fatal error occurred, if the problem persist please contact system admin");
				}
			}).fail(function () {
				//unknown error
				btn.text(btn_txt).prop("disabled", false);
				toastada.error("System server error, please try again later");
			});;
		});

		$('.toggle').click(function(e){
			e.preventDefault(); // The flicker is a codepen thing
			$(this).toggleClass('toggle-on');
		});

		})


	$(document).ready(function () {
		var ckbox = $('#priceChecked');
		$('input').on('click',function () {
			if (ckbox.is(':checked')) {
				$(".price").text('50,000 RWF');
				$(".price").removeClass("important2");
				$(".price").addClass("important1");
			}
			else {
				$(".price").text('400,000 RWF');
				$(".price").removeClass("important1");
				$(".price").addClass("important2");

			}
		});
	});
</script>

		<?php
	}
	?>
</body>
</html>
