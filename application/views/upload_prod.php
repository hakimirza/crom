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
                                <h4>BATCH PRODUCT REGISTRATION</h4>
                                <p>Silakan upload file excel sesuai <a href="#" title="Download file excel"><b>format</b></a></p>
                                <br>
                                <div class="row">
                                    <?= form_open(base_url('human/upload_batch'), 'class = "form"'); ?>
                                    <div class="col-md-6">
                                        <input id="fileUpl" type="file" name="batchupload" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="file" />
                                        
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="browse btn btn-primary input-md" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                            </span>
                                            <input type="text" class="form-control input-md" disabled placeholder="Upload File Excel">
                                        </div>
                                    </div>
                                    <?= form_close()?> 
                                </div>
                            </div>
                        </section>

                        <section class="panel">
                            <div class="panel-body">
                                <h4>SINGLE PRODUCT REGISTRATION</h4>
                                <p>Personal Information</p>
                                <br>
                                <div class="row">
                                    <form id="uploadProduk" action="javascript:;" class = "form-horizontal">

                                    <div class="col-md-6"> <!-- left main col -->

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="idProduk" id="idProduk" placeholder="ID Produk" autofocus="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="mainSupp" id="mainSupp" placeholder="Main Supp">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="alt1Supp" id="alt1Supp" placeholder="Alt1 Supp">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="alt2Supp" id="alt2Supp" placeholder="Alt2 Supp">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="deptCode" id="deptCode" placeholder="Dept Code">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="itemName" id="itemName" placeholder="Item Name">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="localName" id="localName" placeholder="Local Name">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="shortName" id="shortName" placeholder="shortName">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="stopMonthYearStart" id="stopMonthYearStart" placeholder="Stop Month Year Start">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="stopEndDate" id="stopEndDate" placeholder="Stop End Date">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="stopReason" id="stopReason" placeholder="Stop Reason">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="specificItem" id="specificItem" placeholder="specificItem">
                                            </div>
                                        </div>

										
                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="sensitiveness" id="sensitiveness" placeholder="sensitiveness">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="type_of_sale" id="type_of_sale" placeholder="type_of_sale">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="season_code" id="season_code" placeholder="season_code">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="lot_size" id="lot_size" placeholder="lot_size">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6"> <!-- right main col -->
										

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="qty_pack" id="qty_pack" placeholder="qty_pack">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="stock_unit" id="stock_unit" placeholder="stock_unit">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="order_weight" id="order_weight" placeholder="order_weight">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="weigth" id="weigth" placeholder="weigth">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="on_scale" id="on_scale" placeholder="on_scale">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="dc_sup" id="dc_sup" placeholder="dc_sup">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="vat" id="vat" placeholder="vat">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="sub_code" id="sub_code" placeholder="sub_code">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="ie_barcode" id="ie_barcode" placeholder="ie_barcode">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="org_bar_type_1" id="org_bar_type_1" placeholder="org_bar_type_1">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="org_bar_no_1" id="org_bar_no_1" placeholder="org_bar_no_1">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="org_bar_no_2" id="org_bar_no_2" placeholder="org_bar_no_2">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="npp" id="npp" placeholder="npp">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="nsp" id="nsp" placeholder="nsp">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Label</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-md" name="last_date_npp" id="last_date_npp" placeholder="last_date_npp">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	 <label class="col-md-3 control-label"></label>
                                         	<div class="col-md-9">
                                        		<button class="btn btn-danger" type="reset" id="reset"><i class="fa fa-times"></i> Reset</button>
                                        		<button class="btn btn-primary" type="submit" ><i class="fa fa-check"></i> Submit</button>
	                                    	</div>		
	                                	</div>
                                    </div>

                                    </form>
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
            s2.empty();

            for(var option in optionArr){
                var pair = optionArr[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.append(newOption);
            }
        };


	    $("input[type=file]").bind("change", function() {
	      var file_data = this.files[0];
	      var form_data = new FormData();
	      form_data.append('file', file_data, '1000_'+file_data['name']);
	      
	      $.ajax({
	        url: 'upload_product_batch', 
	        dataType: 'text',
	        cache: false,
	        contentType: false,
	        processData: false,
	        data: form_data,
	        type: 'post',
	        success: function(hasil){
	          alert(hasil);
	          //window.open('single_item',"_self");
	        }
	      });
	    });

	    $( "#uploadProduk" ).submit(function(e) {
	    	e.preventDefault();
	    	var dat="idProduk="+$("#idProduk").val()+"&mainSupp="+$("#mainSupp").val()+"&alt1Supp="+$("#alt1Supp").val()+"&alt2Supp="+$("#alt2Supp").val()+"&deptCode="+$("#deptCode").val()+"&itemName="+$("#itemName").val()+"&localName="+$("#localName").val()+"&shortName="+$("#shortName").val()+"&stopMonthYearStart="+$("#stopMonthYearStart").val()+"&stopEndDate="+$("#stopEndDate").val()+"&stopReason="+$("#stopReason").val()+"&specificItem="+$("#specificItem").val()+"&sensitiveness="+$("#sensitiveness").val()+"&type_of_sale="+$("#type_of_sale").val()+"&season_code="+$("#season_code").val()+"&lot_size="+$("#lot_size").val()+"&qty_pack="+$("#qty_pack").val()+"&stock_unit="+$("#stock_unit").val()+"&order_weight="+$("#order_weight").val()+"&weigth="+$("#weigth").val()+"&on_scale="+$("#on_scale").val()+"&dc_sup="+$("#dc_sup").val()+"&vat="+$("#vat").val()+"&sub_code="+$("#sub_code").val()+"&ie_barcode="+$("#ie_barcode").val()+"&org_bar_type_1="+$("#org_bar_type_1").val()+"&org_bar_no_1="+$("#org_bar_no_1").val()+"&org_bar_no_2="+$("#org_bar_no_2").val()+"&npp="+$("#npp").val()+"&nsp="+$("#nsp").val()+"&last_date_npp="+$("#last_date_npp").val();
	    	//alert(data);

  			$.ajax({
	        url : 'upload_single_product', 
	        data : dat,
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