<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Product List</title>

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
        .form-control{
            color: #000;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{
            background-color: #f9f9f9;
        }

        .cust-modal-header{
            padding-bottom: 0;
            border-bottom: none;
        }

        .kanan{
            float : right;
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
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue ">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab1">DAFTAR PRODUK</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab2">UNUSED TAB</a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="tab1" class="tab-pane active">
                                        <section class="panel">
                                            <div class="panel-body">
                                                <div class="well">
                                                    Click on an <b>ID</b> to show more details
                                                </div>
                                                <div class="adv-table editable-table ">
                                                    <div class="clearfix">
                                                        <div class="btn-group pull-right">
                                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">Print</a></li>
                                                                <li><a id="cetak_pdf" href="javascript:;">Save as PDF</a></li>
                                                                <li><a id="exportExcel" href="javascript:;">Export To Excel</a></li>
                                                            </ul>
                                                        </div>

                                                        <form id="TheForm" method="post" action="cetakpdf_produk" target="TheWindow">
                                                            <input type="hidden" id="dataCetak" name="dataCetak" value="" />
                                                            <input type="hidden" id="headerCetak" name="headerCetak" value="" />
                                                            <input type="hidden" id="judulCetak" name="judulCetak" value="" />
                                                            <input type="hidden" id="wCol" name="wCol" value="" />
                                                            <input type="hidden" id="hCol" name="hCol" value="" />
                                                            <input type="hidden" id="coded" name="coded" value="" />
                                                        </form>
                                                    </div>
                                                    <div class="space15"><br></div>
                                                    <table class="table table-striped table-hover table-bordered" id="table-sortable">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama Produk</th>
                                                                <th>ID</th>
                                                                <th>Normal Purchase Price (NPP)</th>
                                                                <th>Normal Selling Price (NSP)</th>
                                                                <th>Supplier</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $this->load->view('data/dataProduct') ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="tab2" class="tab-pane">
                                        <div class="well">
                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- MODAL donk -->
                <div class="modal bs-example-modal-sm" id="modalUpdateItem" tabindex="-1" role="dialog" data-backdrop="static">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header cust-modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <b class="kanan">Nama Produk &nbsp; </b>
                                <header class="tab">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#prodMain"><h4>Product Maintenance</h4></a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#supMain"><h4>Item Supplier Maintenance</h4></a>
                                        </li>
                                    </ul>
                                </header>
                            </div>
                            <div class="modal-body">

                                <div class="tab-content">
                                    <div id="prodMain" class="tab-pane active">
                                        <section class="panel">
                                            <div class="panel-body">

                                                <form action="#" class="form-horizontal">

                                                    <div class="row">
                                                        <div class="col-md-6"> <!-- general infos left -->
                                                            <h4><i class="fa fa-book"></i> General Info</h4>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">ID</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control input-md" name="id" maxlength="6" placeholder="item-id">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Item Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control input-md" name="item_name" maxlength="40" placeholder="Complete Name">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Short Name</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control input-md" name="short_name" maxlength="18" placeholder="Short Name">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6"> <!-- general infos right -->
                                                            <h4><br></h4>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Dept Code</label>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control input-md" name="dept_code" maxlength="2" placeholder="00">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Local Name</label>
                                                                <div class="col-md-7">
                                                                    <input type="text" class="form-control input-md" name="local_name" maxlength="40" placeholder="Local Name">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4><i class="fa fa-barcode"></i> Barcode</h4>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">IE Barcode</label>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control input-md" name="ie_barcode" maxlength="1" placeholder="I/E">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Barcode Type</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control input-md" name="bartype" maxlength="3" placeholder="EAN">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Barcode Num 1</label>
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control input-md" name="barcode1" max="9999999999999" placeholder="1st barcode number">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Barcode Num 2</label>
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control input-md" name="barcode2" max="9999999999999" placeholder="2nd barcode number">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <h4><i class="fa fa-tags"></i> Pricing</h4>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">NPP</label>
                                                                <div class="col-md-5">
                                                                    <input type="number" class="form-control input-md" name="npp" max="99999999" placeholder="Normal Purchase">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">NSP</label>
                                                                <div class="col-md-5">
                                                                    <input type="number" class="form-control input-md" name="nsp" max="99999999" placeholder="Normal Selling">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Last Date NPP</label>
                                                                <div class="col-md-5">
                                                                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
                                                                        <input type="text" placeholder ="dd-mm-yyyy" size="16" maxlength="0" class="form-control" name="last_date_npp">
                                                                        <span class="input-group-btn add-on">
                                                                            <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="row"> 
                                                        <div class="col-md-6"> 
                                                            <h4><i class="fa fa-archive"></i> Measurement</h4>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Lot Size</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control input-md" name="lot_size" maxlength="20" placeholder="Lot Size">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Quality Pack</label>
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control input-md" name="qty_pack" max="99999999999" placeholder="000">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Stock Unit</label>
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control input-md" name="stock_unit" max="99999999999" placeholder="000">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Order Weight</label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control input-md" name="order_wght" max="99999" placeholder="000.0">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Weight</label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control input-md" name="wght" max="99999" placeholder="000.0">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">On Scale</label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" name="on_scale">
                                                                        <option value="0">Weight</option>
                                                                        <option value="1">Pieces</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Dc Sup</label>
                                                                <div class="col-md-3">
                                                                    <select class="form-control" name="dc_sup">
                                                                        <option value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">

                                                            <div class="row"> 
                                                                <h4><i class="fa fa-star-half-o"></i> Specific</h4>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Specific Item</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" name="spec_item">
                                                                            <option value="b">Branded</option>
                                                                            <option value="hb">Home Brand</option>
                                                                            <option value="fp">First Price</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Sensitiveness</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" name="sensi">
                                                                            <option value="r">Red List</option>
                                                                            <option value="g">Green List</option>
                                                                            <option value="h">Housewife Basket</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Sale Type</label>
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control input-md" name="sale_type" maxlength="1" placeholder="E">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Season Code</label>
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control input-md" name="season" maxlength="1" placeholder="0">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <div class="row"> 
                                                                <h4><i class="fa fa-minus-circle"></i> Stop Info</h4>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Stop Month Year Start</label>
                                                                    <div class="col-md-5">
                                                                        <div data-date-viewmode="months" data-date-format="mm-yyyy" data-date=""  class="input-append date dpMonths">
                                                                            <input type="text" placeholder ="mm-yyyy" size="13" maxlength="0" class="form-control" name="stop_month_start">
                                                                            <span class="input-group-btn add-on">
                                                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Stop End Date</label>
                                                                    <div class="col-md-5">
                                                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
                                                                            <input type="text" placeholder ="dd-mm-yyyy" size="13" maxlength="0" class="form-control" name="stop_end">
                                                                            <span class="input-group-btn add-on">
                                                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">Stop Reason</label>
                                                                    <div class="col-md-7">
                                                                        <textarea class="form-control" rows="2" name="stop-reason" maxlength="100" placeholder="Reason goes here..."></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>  

                                                        </div>
                                                    </div>  

                                                    <div class="row"><h4>.</h4></div>

                                                    <div class="row"> <!-- submit -->
                                                        <div class="col-md-2 col-md-offset-7">
                                                            <button class="btn btn-danger btn-block" type="reset" id="reset"><i class="fa fa-times"></i> Reset</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button class="btn btn-primary btn-block" type="submit" id="submit"><i class="fa fa-check"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </section>
                                    </div>

                                    <div id="supMain" class="tab-pane">
                                        <section class="panel">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <ul class="list-group">
                                                            <li class="list-group-item list-group-item-info">
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <h4>Nama Produk</h4>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h6 class="kanan">ID : 000000001</h6>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <form action="#" class="form-horizontal">
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label">MAIN Supplier</label>
                                                                                <div class="col-md-8">
                                                                                    <select class="form-control" name="main-sup">
                                                                                        <option value="">-</option>
                                                                                        <option value="1">PT Maju Mapan Jaya</option>
                                                                                        <option value="2" selected="">PT Mundur Teratur</option>
                                                                                        <option value="3">PT Terbang Tinggi Jaya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label">Alt. Supplier 1</label>
                                                                                <div class="col-md-8">
                                                                                    <select class="form-control" name="alt-sup1">
                                                                                        <option value="">-</option>
                                                                                        <option value="1">PT Maju Mapan Jaya</option>
                                                                                        <option value="2">PT Mundur Teratur</option>
                                                                                        <option value="3">PT Terbang Tinggi Jaya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label">Alt. Supplier 2</label>
                                                                                <div class="col-md-8">
                                                                                    <select class="form-control" name="alt-sup2">
                                                                                        <option value="">-</option>
                                                                                        <option value="1">PT Maju Mapan Jaya</option>
                                                                                        <option value="2">PT Mundur Teratur</option>
                                                                                        <option value="3">PT Terbang Tinggi Jaya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="col-md-3 col-md-offset-4">
                                                                                    <button class="btn btn-danger btn-sm btn-block" type="reset"><i class="fa fa-times"></i> Reset</button>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <button class="btn btn-primary btn-sm btn-block" type="submit"><i class="fa fa-check"></i> Update</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <form class="form-horizontal">
                                                                    <div class="form-group">
                                                                        <label class="col-md-1 control-label"><i class="fa fa-search"></i></label>
                                                                        <div class="col-md-5">
                                                                            <input type="text" class="form-control" maxlength="5" name="search-sup" placeholder="Supplier ID">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <table class="table table-striped">
                                                                    <thead></thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <td>PT Maju Mapan Jaya</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Code</th>
                                                                            <td>010101</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Type</th>
                                                                            <td>C - Commercial</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Address</th>
                                                                            <td>Jl. Kurawa No. 99, Tangerang</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Activity Loc</th>
                                                                            <td>Jabodetabek</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
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

    <!-- date picker -->
    <script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!--common script init for all pages-->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/cust-datepicker-init.js"></script>

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

            $('#cetak_pdf').click(function(e){
                e.preventDefault();

                var test=getDataTabelforPrint();
                var testData="";
                for(i=0; i<test.length; i++){
                    if(i !=test.length-1){
                        testData +=test[i]+":";}
                        else{testData +=test[i];}
                    }

                    document.getElementById("dataCetak").value=testData;
                    document.getElementById("headerCetak").value="No;ID;Nama Produk;Harga1;Promo;Harga2";
                    document.getElementById("judulCetak").value="Data Produk";
                    document.getElementById("wCol").value="8;20;20;50;15;20";
                    document.getElementById("hCol").value="5;5;5;5;5;5";
                    document.getElementById("coded").value="";

                    window.open('', 'TheWindow');
                    document.getElementById('TheForm').submit();
                })

            function getDataTabelforPrint(){
                var lengthTable = document.getElementById("table-sortable").rows.length;
                var dataTabel=[];
                for(j=1; j<lengthTable; j++){
                    var dataItem="";
                    var x = document.getElementById("table-sortable").rows[j].cells;
                    for(i=0; i<6; i++){ // ==================perlu diubah setiap pdf yg baru
                        dataItem +=";"+(x[i].innerHTML);
                    }
                    dataItem=dataItem.substr(1);
                    dataTabel[j-1]=dataItem;
                }
                return(dataTabel);
            }

            $('#exportExcel').click(function(e){
               e.preventDefault();
               var test=getDataTabelforPrint();
               var testData="";
               for(i=0; i<test.length; i++){
                if(i !=test.length-1){
                    testData +=test[i]+":";}
                    else{testData +=test[i];}
                }
                //alert(testData);//data yang akan dicetak ke excel
                document.getElementById("dataCetak").value=testData;
                document.getElementById("headerCetak").value="No;ID;Nama Produk;Harga1;Promo;Harga2";
                document.getElementById("judulCetak").value="Data Produk";
                document.getElementById("coded").value="exportExcel";

                window.open('', 'TheWindow');
                document.getElementById('TheForm').submit();
            });

        });
    </script>

</body>
</html>