<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/dropzone/dropzone.min.css'); ?>">


<style type="text/css">
	.dropzone {
		border: 2px dashed rgba(0, 0, 0, 0.3);
		margin: 16px;
	}

	.dropzone .dz-preview .dz-error-message::after {
		border-bottom: 6px solid #ec2e51;
	}

	.dropzone .dz-preview .dz-error-message {
		opacity: 1;
		top: 93px;
		left: -10px;
		width: 140px;
		background: #be2626;
		border-radius: 4px;
		background: linear-gradient(to bottom, #f7587d, #5b0707);
		text-align: center;
	}

	.dropzone .dz-preview .dz-image {
		border-radius: 4px;
		border: 1px solid;
	}

	* {
		margin: 0;
		padding: 0
	}

	.form-card {
		text-align: left;
	}

	#msform fieldset:not(:first-of-type) {
		display: none;
	}

	#msform input:focus,
	#msform textarea:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		border: 1px solid #6EC284;
		outline-width: 0
	}

	#msform .action-button {
		width: 100px;
		background: #6EC284;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 5px;
		cursor: pointer;
		padding: 10px 5px;
		margin: 10% 10% 10px 5px;
		float: right
	}

	.search-button {
		width: 100px;
		background: #6EC284;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 5px;
		cursor: pointer;
		padding: 0px 5px;
		height: 40px;
		margin: 3% 0% 0% 2%;
		float: right !important;
	}

	#msform .action-button:hover,
	#msform .action-button:focus {
		background-color: #6EC2AF
	}

	#msform .action-button-previous {
		width: 100px;
		background: #616161;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 5px;
		cursor: pointer;
		padding: 10px 5px;
		margin: 10% 5px 10px 0px;
		float: right
	}

	#msform .action-button-previous:hover,
	#msform .action-button-previous:focus {
		background-color: #000000
	}

	.card {
		z-index: 0;
		border: none;
		position: relative
	}

	.fs-title {
		font-size: 20px;
		color: #6EC284;
		margin-bottom: 15px;
		font-weight: normal;
		text-align: left
	}

	.purple-text {
		color: #6EC284;
		font-weight: normal
	}

	.steps {
		font-size: 25px;
		color: gray;
		margin-bottom: 10px;
		font-weight: normal;
		text-align: right
	}

	.fieldlabels {
		color: gray;
		text-align: left
	}

	#progressbar {
		margin-bottom: 20px;
		overflow: hidden;
		color: lightgrey
	}

	#progressbar .active {
		color: #6EC284
	}

	#progressbar li {
		list-style-type: none;
		font-size: 15px;
		width: 25%;
		float: left;
		position: relative;
		font-weight: 400
	}

	#progressbar #payment:before {
		font-family: FontAwesome;
		content: "\f02b"
	}

	#progressbar #personal:before {
		font-family: FontAwesome;
		content: "\f007"
	}

	#progressbar #complete:before {
		font-family: FontAwesome;
		content: "\f0d6"
	}

	#progressbar #confirm:before {
		font-family: FontAwesome;
		content: "\f00c"
	}

	#copmplete {
		font-family: FontAwesome;
		content: "\f00c"
	}

	#progressbar li:before {
		width: 50px;
		height: 50px;
		line-height: 45px;
		display: block;
		font-size: 20px;
		color: #ffffff;
		background: lightgray;
		border-radius: 50%;
		margin: 0 auto 10px auto;
		padding: 2px
	}

	#progressbar li:after {
		content: '';
		width: 100%;
		height: 2px;
		background: lightgray;
		position: absolute;
		left: 0;
		top: 25px;
		z-index: -1
	}

	#progressbar li.active:before,
	#progressbar li.active:after {
		background: #6EC284
	}

	.progress {
		height: 20px
	}

	.progress-bar {
		background-color: #6EC284
	}

	.fit-image {
		width: 100%;
		object-fit: cover
	}

	.progress-card {
		margin-left: 8%;
		margin-top: 5%;
	}

	.pay {
		width: 80px;
	}

	.payment_pending p {
		padding: 20px;
		background: #F8F4BF;
		border: 2px solid #E6B11D;
		border-radius: 10px;
	}

	.confirmPay p {
		padding: 20px;
		background: #BCF0C6;
		border: 2px solid #5EDC77;
		border-radius: 10px;
	}

	.failedPay p {
		padding: 20px;
		background: #FFEDEF;
		border: 2px solid #FF2442;
		border-radius: 10px;
	}

	#pending {
		display: none;
	}

	#confirmPay {
		display: none;
	}


	/* Toast stylings */

	/* Entire toast container */
	.toast-container {
		position: fixed;
		z-index: 999999999;
		max-width: 300px;
		/*min-width: 300px;*/
	}

	/* Each toast gets this style */
	.toast {
		/*width: 300px;*/
		font-family: "helvetica neue";
		font-weight: 200;
		letter-spacing: 2px;
		opacity: 1;
		position: relative;
		right: 0;
		color: white;
		background: rgba(50, 50, 50, .9);
		padding: 20px;
		margin-bottom: 8px;
		border-radius: 3px;
		transition: .3s all ease;
	}

	.toast.toast-exit {
		transition: .4s all ease;
		transform: translate3d(0, 0, 0);
		right: -300px;
		opacity: 0;
	}

	/* Successful toast class */
	.toast-success {
		background: rgba(126, 211, 33, .9);
		box-shadow: 0 5px 15px rgba(126, 211, 33, .5);
	}

	.toast-info {
		background: rgba(0, 50, 250, .9);
		box-shadow: 0px 5px 15px rgba(0, 50, 250, .5);
	}

	/* Error toast class */
	.toast-error {
		background: rgba(191, 36, 58, .9);
		box-shadow: 0 5px 15px rgba(191, 36, 58, .5);
	}

	/* Warn toast class */
	.toast-warn {
		background: rgba(245, 166, 35, .9);
		box-shadow: 0 5px 15px rgba(245, 166, 35, .5);
	}
	.sticky-wrapper {
		background-color: #144857;
	}
</style>
<section class="section swiper-container swiper-slider swiper-slider-2" id="home" data-loop="true" data-autoplay="50000"
		 data-simulate-touch="false" data-slide-effect="fade" style="<?=empty($type)?'padding-top: 100px':'';?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-11 col-sm-9 col-md-9 col-lg-6 col-xl-6 text-center p-0 mt-3 mb-2 progress-card">
				<div class="card">
					<?php
					if (isset($error)) {
						?>
						<div  class="failedPay">
							<div class="row row justify-content-center">
								<div class="col-10">
									<p><?=$error;?></p>
								</div>
							</div>
						</div>
							<?php
					} else {
						?>
						<div id="msform">
							<!-- progressbar -->
							<ul id="progressbar">
								<li id="personal" class="active"><strong>Personal</strong></li>
								<li id="payment" class="<?= isset($applicationId) ? 'active' : ''; ?>"><strong>Parent
										information</strong></li>
								<li id="complete" class="<?= isset($applicationId) ? 'active' : ''; ?>">
									<strong>Payment</strong></li>
								<li id="confirm" class="<?= isset($applicationId) ? 'active' : ''; ?>">
									<strong>Finish</strong></li>
							</ul><!-- fieldsets -->
							<?php
							if (!isset($applicationId)) {
								?>
								<form method="post" id="autoSave"
									  action="<?= base_url('manipulateStudentSelfRegistration'); ?>"
									  class="validates">
									<fieldset>
										<div class="form-card ">
											<div class="row">
												<div class="col-7">
													<h6 class="fs-title">Student self application.
												</div>
											</div>
											<div class="row">
												<div class="col-11">
													<div class="form-check">
														<input type="checkbox" class="form-check-input" id="confirmBox">
														<label class="form-check-label" for="confirmBox">Have you
															paid
															and
															have
															registration code ?</label>
													</div>
													<div class="row" id="currentApplicant" style="display: none">
														<div class="col-sm-12 col-md-9 col-lg-9">
															<div class="form-group">
																<label for="cc-payment" class="control-label mb-1">Fill
																	out
																	your
																	code to complete your registration</label>
																<input name="code" type="text" class="form-control"
																	   placeholder="Enter your code">
															</div>
														</div>
														<input type="button" name="search" id="searchBtn"
															   class="search-button"
															   value="Search"/>
													</div>
													<br>
													<h6 class="newApplicant">Fill this form to start new
														Application</h6>
													<hr class="newApplicant">
													<div class="newApplicant">
														<div class="form-group">
															<label for="cc-payment" class="control-label mb-1">School
																program</label>
															<select class="form-control" name="schoolProgram"
																	id="schoolProgram">
																<option disabled selected>-- Choose program --</option>
																<option value="2">REB</option>
																<option value="1">WDA</option>
																<option value="3">Cambridge</option>
															</select>
														</div>
														<div class="form-group">
															<label for="schoolOptions"
																   class="control-label mb-1">Schools</label>
															<select class="form-control" name="school"
																	id="schoolOptions">
																<option disabled selected>-- Choose school --</option>
															</select>
														</div>


														<div class="requirement-doc" style="display: none;
														border: 1px dashed orangered;padding: 10px;color: orangered;margin: 5px 0;">
															<h5 style="text-align: center"><a target="_blank"><i class="fa fa-exclamation-triangle"></i> Requirement document <i class="fa fa-exclamation-triangle"></i></a></h5>
															<p class="text-desc" style="text-align: center">Please make sure you read all requirement before continue </p>
														</div>
														<div  class="failedPay registration-error" style="display: none">
															<div class="row row justify-content-center">
																<div class="col-10">
																	<p></p>
																</div>
															</div>
														</div>
														<div class="registration-data" style="display: none">
															<div class="form-group">
																<label for="facultyOptions"
																	   class="control-label mb-1">Faculty</label>
																<select class="form-control" name="faculty"
																		id="facultyOptions">
																	<option disabled selected>-- Choose faculty --</option>
																</select>
															</div>
															<div class="form-group">
																<label for="departmentOptions" class="control-label mb-1">Department</label>
																<select class="form-control" name="department"
																		id="departmentOptions">
																	<option disabled selected>-- Choose department --
																	</option>
																</select>
															</div>
															<div class="form-group has-success">
																<label for="levelOptions"
																	   class="control-label mb-1">Level</label>
																<select class="form-control" name="level" required
																		id="levelOptions">
																	<option disabled selected>-- Choose Level --</option>
																</select>
															</div>
															<div class="form-group">
																<label for="cc-payment" class="control-label mb-1">First
																	name</label>
																<input required name="firstName" type="text"
																	   class="form-control" placeholder="First name">
															</div>
															<div class="form-group">
																<label for="cc-payment" class="control-label mb-1">Last
																	name</label>
																<input required name="lastName" type="text"
																	   class="form-control" placeholder="Last name">
															</div>
															<div class="form-group">
																<label for="cc-payment"
																	   class="control-label mb-1">Gender</label>
																<select class="form-control" name="gender" required>
																	<option disabled selected>-- Choose Gender --</option>
																	<option value="M">Male</option>
																	<option value="F">Female</option>
																</select>
															</div>
															<div class="form-group has-success">
																<label for="cc-name" class="control-label mb-1">Phone number
																	(Enter
																	parent's
																	phone if you don't have phone)</label>
																<input id="cc-name" name="phoneNumber"
																	   placeholder="Phone number"
																	   type="text"
																	   required
																	   class="form-control">
															</div>

															<div class="form-group has-success">
															<label for="cc-payment" class="control-label mb-1">Studying
																mode</label>
															<select class="form-control" name="studingMode">
																<option disabled selected>-- Choose mode --</option>
																<option value="0">Boarding</option>
																<option value="1">Day</option>
															</select>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<input type="button" name="next" class="next action-button newApplicant"
											   value="Next" style="display:none;"/>
									</fieldset>
									<fieldset>
										<div class="form-card">

											<div class="form-group">
												<label for="cc-payment" class="control-label mb-1">Parent
													relationship</label>
												<select class="form-control" name="relationship" id="relationship"
														required>
													<option disabled selected>-- Choose relationship --</option>
													<option value="1">Father</option>
													<option value="2">Mother</option>
													<option value="3">Guardian</option>
												</select>
											</div>
											<div class="form-group">
												<label for="cc-payment" class="control-label mb-1">Names</label>
												<input id="cc-payment" name="parentNames" type="text"
													   class="form-control"
													   required>
											</div>
											<div class="form-group has-success">
												<label for="cc-name" class="control-label mb-1">Phone number</label>
												<input name="parentPhone" type="text" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="cc-number" class="control-label mb-1">Email</label>
												<input name="email" type="email" class="form-control">
											</div>
										</div>
										<input type="button" name="next" class="next action-button" value="Next"/>
										<input
												type="button" name="previous" class="previous action-button-previous"
												value="Previous"/>
									</fieldset>
									<fieldset>
										<div class="form-card">
											<div class="row">
												<div class="col-7">
													<h5 class="fs-title" style="font-size: 16px">Total amount due is <strong id="registration_due">10,600 Rwf</strong></h5>
													<h6>Registration: <strong id="registration_amount">10,000 Rwf</strong></h6>
													<h6>Charges: <strong>600 Rwf</strong></h6>
												</div>
												<input type="hidden" name="applicationId">
												<input type="hidden" name="applicationSettings">
											</div>
											<div class="form-group has-success">
												<label for="cc-name" class="control-label mb-1">Phone number <span
															style="font-size: 10px;color: red !important;">*Phone number that will be used to pay using MTN MOMO</span></label>
												<input id="cc-name" name="momoPhoneNumber" required type="number"
													   class="form-control">
												<div class="form-check">
													<input type="checkbox" class="form-check-input" name="confirm"
														   id="exampleCheck1" onchange="agreeTerms()">
													<label class="form-check-label" for="exampleCheck1">I agree to the
														<a
																href="#">terms
															& conditions</a></label>
												</div>
												<div class="row justify-content-center">
													<button type="submit" class="btn btn-md btn-info" id="btn-pay" disabled>Pay</button>
												</div>
												<div id="pending" class="payment_pending">
													<div class="row row justify-content-center">
														<div class="col-10">
															<p>Complete payment on your phone and continue with your
																application, if you didn't receive payment popup dial
																*182*7*1#</p>
															<img src="<?=base_url('');?>assets/images/loading.gif" alt="Pending">
														</div>
													</div>
												</div>

											</div>
										</div>
										<input type="button" name="previous"
											   class="previous action-button-previous finalPrev"
											   value="Previous"/>
									</fieldset>
								</form>
								<?php
							} else if (isset($applicationId) && $applicationDocument == false) {
								?>
								<fieldset>
									<h5>UPLOAD ACADEMIC REPORT IN PDF FORMAT FOR YOUR LAST PREVIOUS ACADEMIC YEAR </h5>
									<ul>
										<li style="font-size: 10pt;text-align: left;border-bottom: 1px solid #cdcdcd;padding: 10px;">
											EXAMPLE 1 . For student of O'LEVEL upload all previous academic years of
											class
											you finish O'level
										</li>
										<li style="font-size: 10pt;text-align: left;border-bottom: 1px solid #cdcdcd;padding: 10px;">
											EXAMPLE 2 . For student of A'LEVEL upload all previous academic years of
											class
											you finish A'level and upload nation examination sleep PDF format BUT IF YOU
											NEED S4 only upload
											nation examination sleep PDF format
										</li>
									</ul>
									<form action="<?= base_url('upload_application_docs'); ?>" class="dropzone"
										  id="myDropzone">
										<input name="applicationId" type="hidden" value="<?= $applicationId; ?>"/>
										<div class="fallback">
											<input name="file" type="file" multiple/>
										</div>
									</form>
									<button class="btn btn-primary" onclick="finishRegistration()">Finish registration
									</button>
								</fieldset>
								<?php
							} else {
								?>
								<fieldset>
									<div class="form-card">
										<div class="row justify-content-center">
											<h2 class="purple-text text-center" style="width: 100%;"><strong>SUCCESS
													!</strong></h2> <br>
											<div class="row justify-content-center">
												<div class="col-3"><img src="https://i.imgur.com/GwStPmg.png"
																		class="fit-image">
												</div>
											</div>
											<br><br>
											<div class="row justify-content-center">
												<div class="col-10 text-center">
													<h5 class="purple-text text-center">Your application is successfully
														received. <br>If you don't get sms in 24 hours call this number:
														0788319169</h5>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
								<?php
							}
							?>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
	if (isset($applicationId) && $applicationDocument == false) {
		?>
		<script src="<?= base_url('assets/plugins/dropzone/dropzone.min.js'); ?>"></script>
		<script>
			Dropzone.autoDiscover = false;
			var myDropzone = new Dropzone("#myDropzone", { // Make the whole body a dropzone
				dictDefaultMessage: '<i class="fa fa-mouse-pointer"></i> Select or drag documents you want to upload ' +
					'<strong>Remember to rename it accordingly</strong>',
			});

		</script>
		<?php
	}
	?>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/toast.js"></script>
	<script type="application/javascript" src="<?= base_url('assets/js/parsley.min.js'); ?>"></script>
	<script type="text/javascript">
		let checkInterval
		$(document).ready(function () {
			$("[name='phoneNumber']").change(function () {
				$("[name='momoPhoneNumber']").val($(this).val());
			});
			$('#autoSave').on('submit', (function (e) {
				e.preventDefault();
				let btn = $(this).find("[type='submit']")
				$(".finalPrev").hide()
				btn.text("Please wait...").prop("disabled", true)
				let formData = new FormData(this);
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					success: function (res) {
						if (res.hasOwnProperty('success')) {
							$("#pending").show()
							btn.hide()
							$("[name='applicationId']").val(res.applicationId)
							setTimeout(function () {
								$("#loading").hide()
								toastada.error("Payment failed, timeout")
								btn.text("Pay").prop("disabled", false).show()
								$("#pending").hide()
								clearInterval(checkInterval)
							}, 1000 * 60 * 5)

							checkInterval = setInterval(function () {
								checkPendingPayment(res.applicationId, btn)
							}, 3000)
						}
						if (res.hasOwnProperty('error')) {
							toastada.error("Registration failed, " + res.error)
							btn.text("Pay").prop("disabled", false).show()
							$("#loading").hide()
						}
					},
					error: function (e) {
						toastada.error("Payment failed, system error")
						btn.text("Pay").prop("disabled", false).show()
						$("#loading").hide()
					}
				})
			}))
			// $(".validates").parsley()
			$("#schoolProgram").on("change", e => {
				let options = ''
				let program = $("#schoolProgram").val()
				$("#schoolOptions").html("")
				$.getJSON("<?=base_url();?>getSchoolsHavingSelectedProgram/" + program, function (data) {
					options += "<option disabled selected>-- Choose school --</option>"
					$.each(data, function (index, obj) {
						options += "<option value='" + obj.id + "'>" + obj.name + "</option>"
					})
					$("#schoolOptions").append(options)
				})
			})
			$("#schoolOptions").on("change", e => {
				let options = ''
				$("#facultyOptions").html("")
				const id = $("#schoolOptions").val()
				$.getJSON("<?=base_url();?>getFacultyBySchool/" + id, function (data) {
					if (data.hasOwnProperty('success')) {
						$(".requirement-doc").slideDown(300);
						$(".requirement-doc a").prop('href', '<?=base_url("assets/documents/");?>' + data.requirement_document);
						$("[name='applicationSettings']").val(data.settings_id)
						$("#registration_amount").val(data.settings_fees)
						$("#registration_due").val(data.settings_charges)
						options += "<option disabled selected>-- Choose faculty --</option>"
						$.each(data.faculties, function (index, obj) {
							options += "<option value='" + obj.id + "'>" + obj.name + "</option>"
						})
						$("#facultyOptions").append(options)
						$(".action-button.newApplicant").show();
						$(".registration-data").slideDown(300);
						$(".registration-error").hide();
					} else if (data.hasOwnProperty('error')) {
						$(".requirement-doc").hide();
						$(".action-button.newApplicant").hide();
						$(".registration-data").hide();
						$(".registration-error").slideDown(300);
						$(".registration-error p").text(data.error);
					}
				})
			})
			$("#facultyOptions").on("change", e => {
				let options = ''
				$("#departmentOptions").html("")
				const id = $("#facultyOptions").val()
				const school_id = $("#schoolOptions").val()
				$.getJSON("<?=base_url();?>getDepartmentBySchool/" + id + "/" + school_id, function (data) {
					options += "<option disabled selected>-- Choose department --</option>"
					$.each(data, function (index, obj) {
						options += "<option value='" + obj.id + "'>" + obj.name + "</option>"
					})
					$("#departmentOptions").append(options)
				})
			})
			$("#departmentOptions").on("change", e => {
				let options = ''
				$("#levelOptions").html("")
				const id = $("#facultyOptions").val()
				const programId = $("#schoolProgram").val()
				$.getJSON("<?=base_url();?>getLevelByFaculty/" + id + "/" + programId, function (data) {
					options += "<option disabled selected>-- Choose level --</option>"
					$.each(data, function (index, obj) {
						options += "<option value='" + obj.id + "'>" + obj.name + "</option>"
					})
					$("#levelOptions").append(options)
				})
			})
			$('#confirmBox').click(function () {
				if ($(this).is(":checked")) {
					$("#currentApplicant").show()
					$(".newApplicant").hide()
				} else if ($(this).is(":not(:checked)")) {
					$(".newApplicant").show()
					$("#currentApplicant").hide()
				}
			})

			let current_fs, next_fs, previous_fs; //fieldsets
			let opacity;
			let current = 1;
			let steps = $("fieldset").length;

			setProgressBar(current);

			// $("#pay").click(function () {
			// 	$(this).hide();
			//
			// 	$("#pending").css({
			// 		'display': 'block',
			// 		'position': 'relative'
			// 	});
			// });

			$("#searchBtn").click(function () {
				const code = $('input[name=code]').val();
				if (code.length > 5)
					window.location.href="<?=base_url('application/');?>"+encodeURIComponent(code)
				else{
					toastada.error("Invalid registration code")
				}

			});


			$(document).on('submit', '#completeForm', function (event) {
				current_fs = $(this).parent().parent();
				next_fs = current_fs.next()

				event.preventDefault();
				$.ajax({
					url: "<?php echo base_url('completeStudentApplication') ?>",
					method: 'POST',
					data: new FormData(this),
					contentType: false,
					processData: false,
					cache: false,
					async: false,
					success: function (data) {
						var json = null;
						console.log(data);
						try {
							json = JSON.parse(data);
							if (json.hasOwnProperty("error")) {
								console.log("json.error");
							} else {
								alert("json.success");
								$('#completeForm')[0].reset();
								$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

								next_fs.show();
								//hide the current fieldset with style
								current_fs.animate({opacity: 0}, {
									step: function (now) {
										// for making fielset appear animation
										opacity = 1 - now;

										current_fs.css({
											'display': 'none',
											'position': 'relative'
										});
										next_fs.css({'opacity': opacity});
									},
									duration: 500
								});
								setProgressBar(4);
							}
						} catch (e) {
							console.log(e);
						}

					}
				});
			});

			$(".next").click(function () {

				current_fs = $(this).parent();
				next_fs = $(this).parent().next();

				window.scrollTo(0, 0);
				if (current == 1) {
					var names = $('input[name=studentNames]').val();
					var gender = $('select[name=gender]').val();
					var phone = $('input[name=phoneNumber]').val();
					var parentPhone = $('input[name=parentPhoneNumber]').val();
					var level = $('select[name=level]').val();

					const data = {
						'names': names,
						'gender': gender,
						'phone': phone,
						'parentPhone': parentPhone,
						'level': level
					};
					localStorage.setItem('data', JSON.stringify(data));
				} else if (current == 2) {
					// $.ajax({
					//     type: "POST",
					//     url: "<?=base_url('saveStudentApplication');?>",
					//     dataType: "JSON",
					//     data: localStorage.getItem('data'),
					//     success: function(data) {
					//         localStorage.remove('data');
					//         console.log(data);
					//     }
					// });
				} else if (current == 3) {
					$(".custom-file-input").on("change", function () {
						var fileName = $(this).val().split("\\").pop();
					});
				}


				//Add Class Active
				$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

				//show the next fieldset
				next_fs.show();
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function (now) {
						// for making fielset appear animation
						opacity = 1 - now;

						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						next_fs.css({'opacity': opacity});
					},
					duration: 500
				});
				setProgressBar(++current);
			});

			$(".previous").click(function () {

				current_fs = $(this).parent();
				previous_fs = $(this).parent().prev();

				//Remove class active
				$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

				//show the previous fieldset
				previous_fs.show();

				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function (now) {
						// for making fielset appear animation
						opacity = 1 - now;

						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						previous_fs.css({'opacity': opacity});
					},
					duration: 500
				});
				setProgressBar(--current);
			});

			function setProgressBar(curStep) {
				var percent = parseFloat(100 / steps) * curStep;
				percent = percent.toFixed();
				$(".progress-bar")
					.css("width", percent + "%")
			}

			$(".submit").click(function () {
				return false;
			})

		});

		function checkPendingPayment(applicationId, btn) {
			$.getJSON('<?= base_url('get_registration_status'); ?>', 'applicationId=' + applicationId, function (data) {
				if (data.hasOwnProperty('success')) {
					clearInterval(checkInterval)
					window.location.href = "<?=base_url('application/');?>" + data.code
				}
				if (data.hasOwnProperty('error')) {
					$("#loading").hide()
					toastada.error("Payment failed, timeout")
					btn.text("Pay").prop("disabled", false).show()
					$("#pending").hide()
					clearInterval(checkInterval)
					toastada.error(data.error)
				}
			})
		}

		function finishRegistration() {
			if (confirm("Confirm registration completion, make sure you didn't miss any document"))
				window.location.reload()
		}
		function agreeTerms(){
			if($("#exampleCheck1").is(":checked")){
				$("#btn-pay").prop("disabled",false);
			} else {
				$("#btn-pay").prop("disabled",true);
			}
		}
	</script>
</section>
