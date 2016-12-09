<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ThemeBucket">
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<title>Add Member</title>

	<!--Core CSS -->
	<link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-reset.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

	<link href="assets/js/mini-upload-form/assets/css/bucketmin.css" rel="stylesheet" />

	<!--editable table-->
	<link rel="stylesheet" href="assets/js/data-tables/DT_bootstrap.css" />

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

		.img-wrap {
			position: relative;
			display: inline-block;
			font-size: 0;
		}
		.img-wrap .close {
			position: absolute;
			top: 13px;
			right: 23px;
			z-index: 100;
			color: #767676;
			font-weight: bold;
			cursor: pointer;
			opacity: .2;
			text-align: center;
			font-size: 40px;
			line-height: 10px;
			text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
		}
		.img-wrap:hover .close {
			opacity: 1;
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
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<section class="panel">
							<div class="panel-body">
								<h4>BATCH HUMAN REGISTRATION</h4>
								<p>Silakan upload file excel sesuai <a href="#" title="Download file excel"><b>format</b></a></p>
								<br>
								<div class="row">
									<?= form_open(base_url('human/upload_batch'), 'class = "form"'); ?>
									<div class="col-md-6">
										<input type="file" name="batchupload" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="file" />
										<div class="input-group">
											<span class="input-group-btn">
												<button class="browse btn btn-primary input-md" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
											</span>
											<input type="text" class="form-control input-md" disabled placeholder="Upload File Excel">
										</div>
									</div>
									<div class="col-md-2 col-md-offset-4">
										<button class="btn btn-primary" type="submit" id="submitBatch"><i class="fa fa-check"></i> Submit</button>
									</div>
									<?= form_close()?> 
								</div>
							</div>
						</section>

						<section class="panel">
							<div class="panel-body">
								<h4>SINGLE HUMAN REGISTRATION</h4>
								<p>Personal Information</p>
								<br>
								<div class="row">
									<?= form_open(base_url('human/upload'), 'class = "form-horizontal"'); ?>

									<div class="col-md-6"> <!-- left main col -->

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="text" class="form-control input-md" name="nik" placeholder="Nomor Induk" autofocus="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="text" class="form-control input-md" name="nama" placeholder="Nama">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="text" class="form-control input-md" name="tp-lahir" placeholder="Tempat Lahir">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="date" class="form-control input-md" name="tg-lahir" placeholder="Tanggal Lahir">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<select class="form-control" name="prov">
													<option value="">Provinsi</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<select class="form-control" name="kota">
													<option value="">Kota</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<select class="form-control" name="kelurahan">
													<option value="">Kelurahan</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<select class="form-control" name="kec">
													<option value="">Kecamatan</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="number" class="form-control input-md" name="kodepos" placeholder="Kodepos">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="rt" placeholder="RT">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control input-md" name="rw" placeholder="RW">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="text" class="form-control input-md" name="alamat" placeholder="Alamat Lengkap">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-4 radio">
												<label>
													<input type="radio" name="jk" value="male">
													Laki-laki
												</label>
											</div>
											<div class="col-md-4 radio">
												<label>
													<input type="radio" name="jk" value="male">
													Perempuan
												</label>
											</div>
										</div>

									</div>

									<div class="col-md-6"> <!-- right main col -->

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<select class="form-control" name="agama">
													<option value="">Agama</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<select class="form-control" name="kawin">
													<option value="">Status Kawin</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="number" class="form-control input-md" name="phone" placeholder="Phone Number">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Label</label>
											<div class="col-md-9">
												<input type="email" class="form-control input-md" name="email" placeholder="E-mail">
											</div>
										</div>

										<br>

										<div class="form-group">
											<label class="col-md-3 control-label">Category</label>
											<div class="col-md-9">
												<select class="form-control" name="cat" id="category">
													<option value="crom">CROM</option>
													<option value="log">Logistic</option>
													<option value="agent">Agent</option>
													<option value="princ">Principal</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" id="subcat-label">Level</label>
											<div class="col-md-9">
												<select class="form-control" name="level" id="subcat-form">
													<option value="">A</option>
													<option value="">B</option>
													<option value="">C</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Password</label>
											<div class="col-md-9">
												<input type="password" class="form-control input-md" name="password" placeholder="Password">
											</div>
										</div>

										<br>

										<div class="form-group">
											<label class="col-md-3 control-label">Foto</label>
											<div class="col-md-9">
												<input type="file" id="fotodiri" name="foto" accept="image/*">
											</div>
											<div class="col-md-4 col-md-offset-5">

											</div>
										</div>

										<!-- image preview -->
										<div class="form-group">
											<div class="col-md-9 col-md-offset-3 img-wrap">
												<span class="close" id="cancel-img">&times;</span>
												<img id="prev" class="img-responsive img-thumbnail"/>
											</div>
										</div>

									</div>

									<div class="col-md-2 col-md-offset-8">
										<button class="btn btn-danger" type="reset" id="reset"><i class="fa fa-times"></i> Reset</button>
									</div>
									<div class="col-md-2">
										<button class="btn btn-primary" type="submit" id="submitUpload"><i class="fa fa-check"></i> Submit</button>
									</div>

									<?= form_close()?> 
								</div>
							</div>
						</section>
					</div>
				</div>
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

	<!--editable table-->
	<script type="text/javascript" src="assets/js/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/js/data-tables/DT_bootstrap.js"></script>

	<!--common script init for all pages-->
	<script src="assets/js/scripts.js"></script>

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

		//2. Category select
		var categorize = function() {

			var s1 = $('#category');
			var s2 = $('#subcat-form');
			var lab = $('#subcat-label');

			var attr = s2.attr('multiple');
			if (typeof attr !== typeof undefined && attr !== false) {
				s2.removeAttr('multiple');
			}

			if(s1.val() == "crom") {
				var optionArr = ["a|A","b|B","c|C"];
				lab.text("Level");
			} else if(s1.val() == "log") {
				var optionArr = ["1|1 - Logistic1's name","2|2 - Logistic2's name","3|3 - Logistic3's name"];
				lab.text("Logistic ID");
			} else if(s1.val() == "agent") {
				var optionArr = ["1|Region 1","2|Region 2","3|Region 3"];
				lab.text("Region");
			} else if(s1.val() == "princ") {
				var optionArr = ["1|1  - Supplier1's name","2|2 - Supplier2's name","3|3 - Supplier3's name"];
				lab.text("Supplier");
				s2.attr('multiple','');
			}

			// flushing object
			s2.empty();

			for(var option in optionArr){
				var pair = optionArr[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.append(newOption);
			}
		};

		$('#category').on('change', categorize);
		$("#reset").click(function(){
			setTimeout(function() {
				categorize();
			}, 1);

			document.getElementById("prev").src = "";
			document.getElementById("fotodiri").value = "";
			$('#cancel-img').hide();
		});

		//3. Preview pre-uploaded foto
		document.getElementById("fotodiri").onchange = function () {
			var reader = new FileReader();

			reader.onload = function (e) {
		// get loaded data and render thumbnail.
		document.getElementById("prev").src = e.target.result;
		$('#cancel-img').show();
	};

	// read the image file as a data URL.
	reader.readAsDataURL(this.files[0]);
};

$('#cancel-img').hide();

$('#cancel-img').click(function(){

	document.getElementById("prev").src = "";
	document.getElementById("fotodiri").value = "";
	$('#cancel-img').hide();
});

});
</script>

<!-- END JAVASCRIPTS -->

</body>
</html>