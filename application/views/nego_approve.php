<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Negotiation Approval</title>

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
        th{
            vertical-align: middle;
            text-align: center;
        }
        .kanan{
            float : right;
        }
    </style>
    <script>
    function loadModal(id_supplier, nama_supplier) {
        $("#nama_supplier").html(nama_supplier);
        $('#modal_approve').modal('show');
        $('#approve').click(function(){
        $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . 'supplier/approveSupplier'; ?>",
                        data: "id=" +id_supplier,
                        success: function(response) {
                            $("#alertSuccess").html('<div class="alert alert-success" id="alert">Approval berhasil !!</div>');
                            $('#modal_approve').modal('hide');
                            document.location.reload();
      }});



        })};

</script>
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
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue ">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#daftarProduk">NEGOTIATION APPROVAL</a>
                                    </li>
                                   <!--  <li class="">
                                        <a data-toggle="tab" href="#preOrder">PRE ORDER</a>
                                    </li> -->
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="daftarProduk" class="tab-pane active">
                                        <section class="panel">
                                            <div class="panel-body">
                                            <div class="col-md-12"><div id="alertSuccess"></div></div>
                                                <div class="adv-table editable-table ">
                                                    <div class="well">
                                                        Click on a <b>Supplier's Name</b> to approve it
                                                    </div>

                                                    <div class="space15"><br></div>

                                                    <table class="table table-striped table-hover table-bordered" id="table-sortable">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2">#</th>
                                                                <th rowspan="2">Supplier Name</th>
                                                                <th rowspan="2">ID</th>
                                                                <th rowspan="2">Started Date</th>
                                                                <th colspan="3">Manager's Approval</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Financial</th>
                                                                <th>Supply Chain</th>
                                                                <th>Logistic</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                                <?php $i = 1;
foreach ($suplierUnapprove as $s) {
	?>
     <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><a href="#" onclick="<?php echo "loadModal('" . $s->id_supplier . "','" . $s->english_name . "')" ?>" data-toggle="modal"><?php echo $s->english_name; ?></a></td>
                                                                <td><?php echo $s->id_supplier; ?></td>
                                                                <td><?php echo $s->started_date; ?></td>
                                                                <td class="signature"><?php if ($s->financialManager == NULL) {
		echo "0";
	} else {
		echo "1";
	}?></td>
                                                                    <td class="signature"><?php if ($s->supplyChainManager == NULL) {
		echo "0";
	} else {
		echo "1";
	}?></td>
                                                                    <td class="signature"><?php if ($s->logisticManager == NULL) {
		echo "0";
	} else {
		echo "1";
	}?></td></tr>
                                                                    <?php }?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="preOrder" class="tab-pane">
                                        <div class="well">
                                            Pre Order
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- modal donk -->
                <div class="modal bs-example-modal-sm" id="modal_approve" tabindex="-1" role="dialog" data-backdrop="static">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header cust-modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                Approval Confirmation
                            </div>
                            <div class="modal-body">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12"> <!-- yes/no -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        Approve <strong><a href="supplier" target="_blank"><span id="nama_supplier"></span></a></strong>'s negotiation?
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                    </div>
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <button data-dismiss="modal" class="btn btn-danger btn-block" type="reset" id="reset"><i class="fa fa-times"></i> NO</button>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <button class="btn btn-primary btn-block" type="submit" id="approve"><i class="fa fa-check"></i> YES</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
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

    <script src="assets/js/mini-upload-form/assets/js/jquery.knob.js"></script>

    <!-- jQuery File Upload Dependencies -->
    <script src="assets/js/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
    <script src="assets/js/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
    <script src="assets/js/mini-upload-form/assets/js/jquery.fileupload.js"></script>

    <!-- Our main JS file -->
    <script src="assets/js/mini-upload-form/assets/js/script.js"></script>

    <!--script for this page only-->
    <script src="assets/js/table-order-search.js"></script>

    <!-- END JAVASCRIPTS -->
    <script>
        jQuery(document).ready(function() {

            OrderSearchTable.init();

            var sign = $('.signature');
            var txT = '<span class="label label-success" title="Approved"><i class="fa fa-check"></i></span><input type="hidden" value="1">';
            var txF = '<span class="label label-default" title="Not Approved Yet"><i class="fa fa-minus"></i></span><input type="hidden" value="0">';
            sign.each(function(i, obj) {

                if ($(this).text()=='') {
                    $(this).empty().append(txF);
                } else {
                    $(this).empty().append(txT);
                }

            });

            // $('#approve').click(function(){
            //     alert('approved');
            // });            


        });
    </script>

</body>
</html>