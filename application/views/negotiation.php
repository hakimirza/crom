<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ThemeBucket">
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<title>Upload Negotiation</title>

	<!--Core CSS -->
	<link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-reset.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

	<link href="assets/js/mini-upload-form/assets/css/bucketmin.css" rel="stylesheet" />

	<!--editable table-->
	<link rel="stylesheet" href="assets/js/data-tables/DT_bootstrap.css" />

	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />

	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet" />
	<style type="text/css">

		.file {
			visibility: hidden;
			position: absolute;
		}

		.form-control {
			color: #555555;
		}
	</style>

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]>
	<script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<section id="container" >
		<!--header start-->
		<?php 
		$this->load->view('template/header');
		$this->load->view('template/sidebar_left');
		?>
		<!--sidebar end-->

		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<!-- page start-->

				<!-- batch upload start -->
				<div class="row">
					<div class="col-md-12">
						<section class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6 col-md-offset-2">
										<h3>Upload Negotiation</h3>
										<p>Tambah data dengan upload file excel sesuai <a href="#" title="Download file excel"><b>format</b></a>,</p>
										<br>
									</div>
								</div>
								<div class="row">
									<?= form_open(base_url('human/upload_batch'), 'class = "form"'); ?>
									<div class="col-md-6 col-md-offset-2">
										<input type="file" name="batchupload" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="file" />
										<div class="input-group">
											<span class="input-group-btn">
												<button class="browse btn btn-primary input-md" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
											</span>
											<input type="text" class="form-control input-md" disabled placeholder="Upload File Excel">
										</div>
									</div>
									<div class="col-md-2">
										<button class="btn btn-primary" type="submit" id="submitBatch"><i class="fa fa-check"></i> Submit</button>
									</div>
									<?= form_close()?> 
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-md-offset-2">
										<p>atau tambahkan data melalui <a role="button" data-toggle="collapse" href="#supplier-single-form" aria-expanded="false" title="Klik untuk menampilkan single form"><b>single form <i class="fa fa-caret-down"></i></b></a></p>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>			
				<!-- batch upload end -->

				<!-- single form start -->
				<?= form_open(base_url('supplier/upload'), array('class' => 'form-horizontal', 'id' => 'form-nego')); ?>
				<div class="row collapse" id="supplier-single-form">
					<div class="col-md-12" id="basic-panels"> <!-- top panels -->

						<section class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4">
										<a href="#basic-panels"><h3><i class="fa fa-book"> </i> Basic Data</h3></a>
									</div>
									<div class="col-md-1 col-md-offset-7">
										<div class="dropdown">
											<a data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
												<h3><i class="fa fa-bars"></i></h3>
											</a>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Upload</a></li>
												<li><a href="#">Export to Excel</a></li>
											</ul>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									
									<div class="col-md-6"> <!-- top left panel -->
										<div class="form-group">
											<label class="col-md-3 control-label">ID Supplier</label>
											<div class="col-md-5">
												<input type="text" class="form-control input-md" name="idSupplier" placeholder="ID Supplier">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Supplier Type</label>
											<div class="col-md-9">
												<select id="selSuppType" class="form-control" name="supp-type" style="width: initial;">
													<option value="C">C - Commercial</option>
													<option value="I">I - Internal</option>
													<option value="E">E - Expense</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">NPWP</label>
											<div class="col-md-5">
												<input type="text" class="form-control input-md" data-mask="99.999.999.9-999.999" name="npwp" placeholder="99.999.999.9-999.999">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Specific Supplier</label>
											<div class="col-md-9">
												<select id="selSuppSpec" class="form-control" name="supp-spec" style="width: initial;">
													<option value="1">Direct</option>
													<option value="2">Wholesale</option>
													<option value="3">Import</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Remit Supplier Code</label>
											<div class="col-md-2">
												<input type="text" maxlength="4" class="form-control input-md" name="remit" placeholder="1234">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">English Name</label>
											<div class="col-md-7">
												<input type="text" maxlength="35" class="form-control input-md" name="en-name" placeholder="Corporation Name Inc.">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Local Name</label>
											<div class="col-md-7">
												<input type="text" maxlength="35" class="form-control input-md" name="loc-name" placeholder="PT Nama Perusahaan">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Prefix of Name</label>
											<div class="col-md-9">
												<select id="selPrfxName" class="form-control" name="prfx-name" style="width: initial;">
													<option value="000">000</option>
													<option value="001">001</option>
													<option value="002">002</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Activity Location</label>
											<div class="col-md-7">
												<input type="text" class="form-control input-md" name="act-loc" maxlength="35" placeholder="Activity Loation">
											</div>
										</div>

									</div>

									<div class="col-md-6"> <!-- top right panel -->
										
										<div class="form-group">
											<label class="col-md-3 control-label">Address</label>
											<div class="col-md-5">
												<textarea class="form-control" rows="2" name="alamat-detil" maxlength="255">Jl Haji Yahya no. 13</textarea>
											</div>
											<div class="col-md-3">
												<input type="text" maxlength="5" class="form-control input-md" name="kodepos" placeholder="66212">
												<span class="help-block">Kodepos</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label"></label>
											<div class="col-md-4">
												<select id="selProvinsi" class="form-control" name="provinsi">
													<option value="11">DKI Jakarta</option>
													<option value="12">Banten</option>
													<option value="13">Jawa Barat</option>
												</select>
												<span class="help-block">Provinsi</span>
											</div>
											<div class="col-md-4">
												<select id="selKota" class="form-control" name="kota">
													<option value="1112">Bandung</option>
													<option value="1113">Serang</option>
													<option value="1114">Cirebon</option>
												</select>
												<span class="help-block">Kota</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label"></label>
											<div class="col-md-4">
												<select id="selKecamatan" class="form-control" name="kecamatan">
													<option value="111211">Manggarai</option>
													<option value="111212">Jatinegara</option>
													<option value="111213">Senen</option>
												</select>
												<span class="help-block">Kecamatan</span>
											</div>
											<div class="col-md-4">
												<select id="selKelurahan" class="form-control" name="kelurahan">
													<option value="1112120001">Kebon Sayur</option>
													<option value="1112120002">Bidaracina</option>
													<option value="1112120003">Senayan</option>
												</select>
												<span class="help-block">Kelurahan</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Contact</label>
											<div class="col-md-4">
												<input type="number" class="form-control input-md" name="phone" max="99999999999999999999" placeholder="999999999">
												<span class="help-block">Telephone</span>
											</div>
											<div class="col-md-4">
												<input type="number" class="form-control input-md" name="fax" max="99999999999999999999" placeholder="999999999">
												<span class="help-block">Fax</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Email</label>
											<div class="col-md-8">
												<input type="email" class="form-control input-md" name="email" maxlength="100" placeholder="email@email.com">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">CP</label>
											<div class="col-md-8">
												<input type="text" class="form-control input-md" name="cp" maxlength="100" placeholder="Contact Person's Name">
											</div>
										</div>

									</div>
									
								</div>
							</div>
						</section>

					</div>

					<div class="col-md-6" id="payment-panels"> <!-- mid left panels -->

						<section class="panel">
							<div class="panel-body">
								<a href="#payment-panels"><h3><i class="fa fa-credit-card"> </i> Payment Data</h3></a>
								<hr>
								<div class="row">
									<div class="col-md-12">
										
										<div class="form-group">
											<label class="col-md-3 control-label">Payment Days</label>
											<div class="col-md-3">
												<input type="number" class="form-control input-md" name="pay-day" size="2" max="99" placeholder="30">
												<span class="help-block">Payment Days</span>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control input-md" name="scc-pay-day" size="3" max="999" placeholder="100">
												<span class="help-block">SCC Payment Days</span>
											</div>
											<div class="col-md-3">
												<select id="selEndMonth" class="form-control" name="end-month">
													<option value="0">NO</option>
													<option value="1">YES</option>
												</select>
												<span class="help-block">End of Month</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Penalty</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="service-penalty" size="100" placeholder="Service Level Penalty">
												<span class="help-block">Service Level</span>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="delivery-penalty" size="100" placeholder="Late Delivery Penalty">
												<span class="help-block">Late Delivery</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Payment Mode</label>
											<div class="col-md-3">
												<select id="selPayMode" class="form-control" name="pay-mode" style="width: initial;">
													<option value="1">Cheque</option>
													<option value="2">Bank Transfer</option>
													<option value="3">Cash</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label"></label>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="bank-name" size="100" placeholder="Bank Name">
												<span class="help-block">Bank Name</span>
											</div>
											<div class="col-md-5">
												<input type="number" class="form-control input-md" name="acc-num" size="14" max="99999999999999" placeholder="99999999999999">
												<span class="help-block">Account Number</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Cheque</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="cheque-title" size="100" placeholder="Cheque Title">
												<span class="help-block">Title</span>
											</div>
											<div class="col-md-5">
												<input type="text" class="form-control input-md" name="cheque-mailing" size="100" placeholder="Cheque Mailing Address">
												<span class="help-block">Mailing Address</span>
											</div>
										</div>

									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="col-md-6" id="order-panels"> <!-- mid right panels -->

						<section class="panel">
							<div class="panel-body">
								<a href="#order-panels"><h3><i class="fa fa-truck"> </i> Order & Delivery Schedule</h3></a>
								<hr>
								<div class="row">
									<div class="col-md-12">
										
										<div class="form-group">
											<label class="col-md-3 control-label">Cut off Time</label>
											<div class="col-md-4">
												<input type="time" class="form-control input-md" name="cut-off-time">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Order Day</label>
											<div class="col-md-2">
												<div class="checkbox">
													<label>
														<input id="orderDay1" name="day-order[]" type="checkbox" value="sun"> Sun
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="orderDay2" name="day-order[]" type="checkbox" value="mon"> Mon
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="orderDay3" name="day-order[]" type="checkbox" value="tue"> Tue
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="orderDay4" name="day-order[]" type="checkbox" value="wed"> Wed
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="checkbox">
													<label>
														<input id="orderDay5" name="day-order[]" type="checkbox" value="thu"> Thu
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="orderDay6" name="day-order[]" type="checkbox" value="fri"> Fri
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="orderDay7" name="day-order[]" type="checkbox" value="sat"> Sat
													</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Delivery Day</label>
											<div class="col-md-2">
												<div class="checkbox">
													<label>
														<input id="deliveryDay1" name="day-deliver[]" type="checkbox" value="sun"> Sun
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="deliveryDay2" name="day-deliver[]" type="checkbox" value="mon"> Mon
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="deliveryDay3" name="day-deliver[]" type="checkbox" value="tue"> Tue
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="deliveryDay4" name="day-deliver[]" type="checkbox" value="wed"> Wed
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="checkbox">
													<label>
														<input id="deliveryDay5" name="day-deliver[]" type="checkbox" value="thu"> Thu
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="deliveryDay6" name="day-deliver[]" type="checkbox" value="fri"> Fri
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="deliveryDay7" name="day-deliver[]" type="checkbox" value="sat"> Sat
													</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Cut off Time</label>
											<div class="col-md-2">
												<input type="number" class="form-control input-md" name="order-period" size="1" min="1" max="7" placeholder="5">
											</div>
											<span class="help-block">times a week</span>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Supplier EAN</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="supplier-ean" maxlength="13" placeholder="Supplier EAN">
											</div>
										</div>

									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="col-md-12" id="stop-panels"> <!-- lower panels -->

						<section class="panel">
							<div class="panel-body">
								<a href="#stop-panels"><h3><i class="fa fa-power-off"> </i> Stop Payment / Business Data</h3></a>
								<hr>
								<div class="row">

									<div class="col-md-4"> <!-- low left panel -->

										<div class="form-group">
											<label class="col-md-4 control-label">Dept Concern</label>
											<div class="col-md-7">
												<input type="text" class="form-control input-md" name="dept-concern" maxlength="20" placeholder="Departement Concern">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">Stop Payment</label>
											<div class="col-md-6">
												<select id="selStopPay" class="form-control" name="stop-pay" style="width: initial;">
													<option value="0">NO</option>
													<option value="1">YES</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">Stop Payment Reason</label>
											<div class="col-md-6">
												<select id="selStopPayReason1" class="form-control" name="stop-pay-reason1" style="width: initial;">
													<option value="">-</option>
													<option value="2">Stop Business</option>
													<option value="3">Pending A/R</option>
													<option value="4">Seasonal Supplier</option>
													<option value="5">Temporary Stopped</option>
													<option value="6">Bankrupted</option>
													<option value="7">Change Data</option>
												</select>
												<span class="help-block">Level 1</span>
											</div>
										</div>

									</div>

									<div class="col-md-4"> <!-- low mid panel -->
										
										<div class="form-group">
											<label class="col-md-4 control-label">Stop Payment Reason</label>
											<div class="col-md-6">
												<select id="selStopPayReason2" class="form-control" name="stop-pay-reason2" style="width: initial;">
													<option value="">-</option>
													<option value="3">Pending A/R</option>
													<option value="4">Seasonal Supplier</option>
													<option value="5">Temporary Stopped</option>
												</select>
												<span class="help-block">Level 2</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">Stop Business</label>
											<div class="col-md-8">
												<select id="selStopBusAll" class="form-control" name="stop-bus-all" style="width: initial;">
													<option value="0">NO</option>
													<option value="1">YES</option>
												</select>
												<span class="help-block"> Level 1 - Concerning all depts.</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">Stop Business</label>
											<div class="col-md-8">
												<select id="selStopBusSpec" class="form-control" name="stop-bus-spec" style="width: initial;">
													<option value="0">NO</option>
													<option value="1">YES</option>
												</select>
												<span class="help-block"> Level 1 - Specific dept.</span>
											</div>
										</div>

									</div>

									<div class="col-md-4"> <!-- low right panel -->

										<div class="form-group">
											<label class="col-md-4 control-label">Stop Business Reason</label>
											<div class="col-md-6">
												<select id="selStopBusReason" class="form-control" name="stop-pay-reason2" style="width: initial;">
													<option value="">-</option>
													<option value="0">CROM Decision</option>
													<option value="1">Supplier Decision</option>
													<option value="2">Supplier Bankrupt</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">Start Stop</label>
											<div class="col-md-6">
												<div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
													<input type="text" placeholder ="dd-mm-yyyy" size="16" maxlength="0" class="form-control" name="start-stop">
													<span class="input-group-btn add-on">
														<button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
													</span>
												</div>
												<span class="help-block">Select date</span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">End Stop</label>
											<div class="col-md-6">
												<div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
													<input type="text" placeholder ="dd-mm-yyyy" size="16" maxlength="0" class="form-control" name="end-stop">
													<span class="input-group-btn add-on">
														<button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
													</span>
												</div>
												<span class="help-block">Select date</span>
											</div>
										</div>

									</div>

								</div>
							</div>
						</section>
					</div>

					<div class="col-md-12" id="stop-panels"> <!-- submit panels -->
						<section class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3">
										<p><a role="button" data-toggle="collapse" href="#supplier-single-form" aria-expanded="false" title="Klik untuk menyembunyikan single form"><b>hide <i class="fa fa-caret-up"></i></b></a></p>
									</div>
									<div class="col-md-3 col-md-offset-3">
										<button class="btn btn-danger btn-block" type="reset" id="reset"><i class="fa fa-times"></i> Reset</button>
									</div>
									<div class="col-md-3">
										<button class="btn btn-primary btn-block" type="submit" id="submit"><i class="fa fa-check"></i> Submit</button>
									</div>
								</div>
							</div>
						</section>
					</div>

				</div>
				<?= form_close()?> 
				<!-- single form end -->

				<!-- page end-->
			</section>
		</section>
		<!--main content end-->
		<!--right sidebar start-->
		<!--right sidebar end-->

	</section>

	<!-- Placed js at the end of the document so the pages load faster -->

	<!--Core js-->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-migrate.js"></script>

	<script src="assets/bs3/js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<!--Easy Pie Chart-->
	<script src="assets/js/easypiechart/jquery.easypiechart.js"></script>
	<!--Sparkline Chart-->
	<script src="assets/js/sparkline/jquery.sparkline.js"></script>

	<!-- data-mask -->
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

	<!-- date picker -->
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

	<!--editable table-->
	<script type="text/javascript" src="assets/js/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/js/data-tables/DT_bootstrap.js"></script>

	<!--common script init for all pages-->
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/cust-datepicker-init.js"></script>

	<!-- specific script for this page -->
	<script>
		$(document).ready(function() {

			//1. Layout tombol browse file
			$(document).on('click', '.browse', function(){
				var file = $(this).parent().parent().parent().find('.file');
				file.trigger('click');
			});
			$(document).on('change', '.file', function(){
				$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
			});

			// $('#form-nego input, select, textarea, button').attr('readonly', true).attr('disabled', true);

			$("input[type=file]").bind("change", function() {
		      var file_data = this.files[0];
		      var form_data = new FormData();
		      form_data.append('file', file_data, '1000_'+file_data['name']);

		      $.ajax({
		        url: 'upload_negotiation_batch', 
		        dataType: 'text', 
		        cache: false,
		        contentType: false,
		        processData: false,
		        data: form_data,
		        type: 'post',
		        success: function(hasil){
		          alert(hasil);
		          window.open('negotiation',"_self");
		        }
		      });
		    });

		     $( "#form-nego" ).submit(function(e) {
		    	e.preventDefault();
		    	
		    	//$('#check_id').val();
				var data="";

				data= data+"selSuppType="+$("#selSuppType option:selected" ).text();
				data=data+"&idSupplier="+$("input[name=idSupplier]").val();
		    	data=data+"&npwp="+$("input[name=npwp]").val();
		    	data=data+"&selSuppSpec="+$( "#selSuppSpec option:selected" ).text();
		    	data=data+"&remit="+$("input[name=remit]").val();
		    	data=data+"&enName="+$("input[name=en-name]").val();
		    	data=data+"&locName="+$("input[name=loc-name]").val();
		    	data=data+"&prfxName="+$( "#selPrfxName option:selected" ).text();
		    	data=data+"&actLoc="+$("input[name=act-loc]").val();
		    	data=data+"&alamatDetil="+$("textarea[name=alamat-detil]").val();
		    	data=data+"&kodePos="+$("input[name=kodepos]").val();
		    	data=data+"&provinsi="+$( "#selProvinsi option:selected" ).text();
		    	data=data+"&kota="+$( "#selKota option:selected" ).text();
		    	data=data+"&kecamatan="+$( "#selKecamatan option:selected" ).text();
		    	data=data+"&kelurahan="+$( "#selKelurahan option:selected" ).text();
		    	data=data+"&phone="+$("input[name=phone]").val();
		    	data=data+"&fax="+$("input[name=fax]").val();
		    	data=data+"&email="+$("input[name=email]").val();
		    	data=data+"&cp="+$("input[name=cp]").val();
		    	data=data+"&payDay="+$("input[name=pay-day]").val();
		    	data=data+"&sccPayDay="+$("input[name=scc-pay-day]").val();
		    	data=data+"&endMonth="+$("#selEndMonth option:selected" ).text();
		    	data=data+"&servicePenalty="+$("input[name=service-penalty]").val();
		    	data=data+"&deliveryPenalty="+$("input[name=delivery-penalty]").val();
		    	data=data+"&payMode="+$("#selPayMode option:selected" ).text();
		    	data=data+"&bankName="+$("input[name=bank-name]").val();
		    	data=data+"&accNum="+$("input[name=acc-num]").val();
		    	data=data+"&chequeTitle="+$("input[name=cheque-title]").val();
		    	data=data+"&chequeMailing="+$("input[name=cheque-mailing]").val();
		    	data=data+"&cutOffTime="+$("input[name=cut-off-time]").val();
		    	var cekOD="";
		    	if ($('#orderDay1').is(":checked")){cekOD +="1";}
		    	if ($('#orderDay2').is(":checked")){cekOD +="2";}
		    	if ($('#orderDay3').is(":checked")){cekOD +="3";}
		    	if ($('#orderDay4').is(":checked")){cekOD +="4";}
		    	if ($('#orderDay5').is(":checked")){cekOD +="5";}
		    	if ($('#orderDay6').is(":checked")){cekOD +="6";}
		    	if ($('#orderDay7').is(":checked")){cekOD +="7";}
		    	data=data+"&orderDay="+cekOD;
		    	var delD="";
		    	if ($('#deliveryDay1').is(":checked")){delD +="1";}
		    	if ($('#deliveryDay2').is(":checked")){delD +="2";}
		    	if ($('#deliveryDay3').is(":checked")){delD +="3";}
		    	if ($('#deliveryDay4').is(":checked")){delD +="4";}
		    	if ($('#deliveryDay5').is(":checked")){delD +="5";}
		    	if ($('#deliveryDay6').is(":checked")){delD +="6";}
		    	if ($('#deliveryDay7').is(":checked")){delD +="7";}
		    	data=data+"&deliveryDay="+delD;
		    	data=data+"&orderPeriod="+$("input[name=order-period]").val();
		    	data=data+"&supplierEan="+$("input[name=supplier-ean]").val();
		    	data=data+"&deptConcern="+$("input[name=dept-concern]").val();
		    	data=data+"&stopPay="+$("#selStopPay option:selected" ).text();
		    	data=data+"&stopPayReason1="+$("#selStopPayReason1 option:selected" ).text();
		    	data=data+"&stopPayReason2="+$("#selStopPayReason2 option:selected" ).text();
		    	data=data+"&stopBusAll="+$("#selStopBusAll option:selected" ).text();
		    	data=data+"&stopBusSpec="+$("#selStopBusSpec option:selected" ).text();
		    	data=data+"&stopBusReason="+$("#selStopBusReason option:selected" ).text();
		    	data=data+"&startStop="+$("input[name=start-stop]").val();
		    	data=data+"&endStop="+$("input[name=end-stop]").val();

	    		//alert(data);

	  			$.ajax({
		        url : 'upload_single_negotiation', 
		        data : data,
		        type : 'POST',
		        success: function(hasil){
		          alert(hasil);
		          //window.open('single_item',"_self");
		        }
		      });
			
			});
			
		});

		
	</script>

	<!-- END JAVASCRIPTS -->

</body>
</html>