<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/forms-advanced-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 04:56:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Advanced Inputs | AppStack - Bootstrap 5 Admin &amp; Dashboard Template</title>

	<link rel="canonical" href="forms-advanced-inputs.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
		<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
		
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Advanced Inputs</h1>
					<div class="row">
						<div class="col-12 col-lg-5 col-xxl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title">Select2</h5>
									<h6 class="card-subtitle text-muted">The jQuery replacement for select boxes.</h6>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<select class="form-control select2" data-toggle="select2">
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select>
									</div>

									<div class="mb-3">
										<select class="form-control select2" data-toggle="select2" multiple>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
          </select>
									</div>

									<div>
										<select class="form-control select2" data-toggle="select2" multiple>
            <option value="one">First</option>
            <option value="two" disabled="disabled">Second (disabled)</option>
            <option value="three">Third</option>
          </select>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-7 col-xxl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title">Date Range Picker</h5>
									<h6 class="card-subtitle text-muted">Component for choosing date ranges, dates and times.</h6>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-xl-4">
											<div class="mb-3">
												<label class="form-label">Date Range</label>
												<input class="form-control" type="text" name="daterange" value="01/01/2022 - 01/15/2022" />
											</div>
										</div>

										<div class="col-12 col-xl-8">
											<div class="mb-3">
												<label class="form-label">Date Range with Times</label>
												<input class="form-control" type="text" name="datetimes" />
											</div>
										</div>

										<div class="col-12 col-xl-4">
											<div class="mb-3 mb-xl-0">
												<label class="form-label">Single Date Picker</label>
												<input class="form-control" type="text" name="datesingle" />
											</div>
										</div>

										<div class="col-12 col-xl-8">
											<div class="mb-3 mb-xl-0">
												<label class="form-label">Predefined Date Ranges</label>
												<div id="reportrange" class="overflow-hidden form-control">
													<i class="far fa-calendar"></i>&nbsp;
													<span></span> <i class="fas fa-caret-down"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Input Masks</h5>
									<h6 class="card-subtitle text-muted">jQuery Plugin to make masks on form fields.</h6>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-lg-6">
											<div class="mb-3">
												<label>Date</label>
												<input type="text" class="form-control" data-mask="00/00/0000">
												<span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
											</div>
											<div class="mb-3">
												<label>Hour</label>
												<input type="text" class="form-control" data-mask="00:00:00">
												<span class="font-13 text-muted">e.g "HH:MM:SS"</span>
											</div>
											<div class="mb-3">
												<label>Date & Hour</label>
												<input type="text" class="form-control" data-mask="00/00/0000 00:00:00">
												<span class="font-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
											</div>
											<div class="mb-3">
												<label>ZIP Code</label>
												<input type="text" class="form-control" data-mask="00000-000">
												<span class="font-13 text-muted">e.g "xxxxx-xxx"</span>
											</div>
											<div class="mb-3">
												<label>Crazy Zip Code</label>
												<input type="text" class="form-control" data-mask="0-00-00-00">
												<span class="font-13 text-muted">e.g "x-xx-xx-xx"</span>
											</div>
											<div class="mb-3">
												<label>Money</label>
												<input type="text" class="form-control" data-mask="000.000.000.000.000,00" data-reverse="true">
												<span class="font-13 text-muted">e.g "Your money"</span>
											</div>
											<div class="mb-3">
												<label>Money 2</label>
												<input type="text" class="form-control" data-mask="#.##0,00" data-reverse="true">
												<span class="font-13 text-muted">e.g "#.##0,00"</span>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="mb-3">
												<label>Telephone</label>
												<input type="text" class="form-control" data-mask="0000-0000">
												<span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
											</div>
											<div class="mb-3">
												<label>Telephone with Code Area</label>
												<input type="text" class="form-control" data-mask="(00) 0000-0000">
												<span class="font-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
											</div>
											<div class="mb-3">
												<label>US Telephone</label>
												<input type="text" class="form-control" data-mask="(000) 000-0000">
												<span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
											</div>
											<div class="mb-3">
												<label>São Paulo Celphones</label>
												<input type="text" class="form-control" data-mask="(00) 00000-0000">
												<span class="font-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
											</div>
											<div class="mb-3">
												<label>CPF</label>
												<input type="text" class="form-control" data-mask="000.000.000-00" data-reverse="true">
												<span class="font-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
											</div>
											<div class="mb-3">
												<label>CNPJ</label>
												<input type="text" class="form-control" data-mask="00.000.000/0000-00" data-reverse="true">
												<span class="font-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
											</div>
											<div class="mb-3">
												<label>IP Address</label>
												<input type="text" class="form-control" data-mask="099.099.099.099" data-reverse="true">
												<span class="font-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-end">
							<p class="mb-0">
								&copy; 2023 - <a href="index.html" class="text-muted">AppStack</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Select2
			$(".select2").each(function() {
				$(this)
					.wrap("<div class=\"position-relative\"></div>")
					.select2({
						placeholder: "Select value",
						dropdownParent: $(this).parent()
					});
			})
			// Daterangepicker
			$("input[name=\"daterange\"]").daterangepicker({
				opens: "left"
			});
			$("input[name=\"datetimes\"]").daterangepicker({
				timePicker: true,
				opens: "left",
				startDate: moment().startOf("hour"),
				endDate: moment().startOf("hour").add(32, "hour"),
				locale: {
					format: "M/DD hh:mm A"
				}
			});
			$("input[name=\"datesingle\"]").daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			});
			var start = moment().subtract(29, "days");
			var end = moment();

			function cb(start, end) {
				$("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
			}
			$("#reportrange").daterangepicker({
				startDate: start,
				endDate: end,
				ranges: {
					"Today": [moment(), moment()],
					"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
					"Last 7 Days": [moment().subtract(6, "days"), moment()],
					"Last 30 Days": [moment().subtract(29, "days"), moment()],
					"This Month": [moment().startOf("month"), moment().endOf("month")],
					"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
				}
			}, cb);
			cb(start, end);
			// Datetimepicker
			$('#datetimepicker-minimum').datetimepicker();
			$('#datetimepicker-view-mode').datetimepicker({
				viewMode: 'years'
			});
			$('#datetimepicker-time').datetimepicker({
				format: 'LT'
			});
			$('#datetimepicker-date').datetimepicker({
				format: 'L'
			});
		});
	</script>
</body>


<!-- Mirrored from appstack.bootlab.io/forms-advanced-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 04:56:52 GMT -->
</html><?php /**PATH C:\xampp\htdocs\Internship2023\ecommerce_marwadi\bootstraptemp3\resources\views/admin/form1.blade.php ENDPATH**/ ?>