<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Customer Profile</title>

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
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue ">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#main">CUSTOMER PROFILE</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#stat">STATISTIC</a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="main" class="tab-pane active">
                                        <section class="panel">
                                            <div class="panel-body">

                                                <!-- main row -->
                                                <div class="row">
                                                    <!-- first main column -->
                                                    <div class="col-md-6">

                                                        <div class="row">

                                                            <!-- title -->
                                                            <div class="col-md-12">
                                                                <h1>
                                                                    <?= $identitas['Name'] ?>
                                                                </h1>
                                                            </div>

                                                            <!-- thumbnail -->
                                                            <div class="col-md-6">
                                                                <img src=<?= $imgsrc1 ?> class="img-responsive img-rounded" alt="Logistic's logo">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src=<?= $imgsrc2 ?> class="img-responsive img-rounded" alt="Logistic's map area">
                                                            </div>
                                                            <div class="col-md-12"> </div> <!-- blankspace -->

                                                            <div class="col-md-12">
                                                                <h3>Top Ten Products</h3>
                                                                <table class="table table-striped table-hover table-bordered" id="table-sortable">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Item Code</th>
                                                                            <th>Product Name</th>
                                                                            <th>Purchase Qty</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        for ($i=0; $i < count($col1) ; $i++) {

                                                                            echo "
                                                                            <tr>
                                                                                <td>".$col1[$i]."</td>
                                                                                <td>".$col2[$i]."</td>
                                                                                <td>".$col3[$i]."</td>
                                                                            </tr>
                                                                            ";
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- second main column -->
                                                    <div class="col-md-6">

                                                     <div class="row">

                                                        <!-- search form -->
                                                        <?= form_open(base_url('customer/search'), 'class = "form-inline"'); ?>
                                                        <div class="col-md-9">
                                                            <input type="text" size="10" class="form-control" placeholder="ID-customer" autofocus name="idcust">
                                                            <input type="text" class="form-control" placeholder="Customer's Name" name="namecust">
                                                            <button class="btn btn-primary" type="submit" id="viewButton"><i class="fa fa-search"></i></button>
                                                        </div>
                                                        <?= form_close()?>
                                                        <div class="col-md-3">
                                                            <div class="btn-group">
                                                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">More <i class="fa fa-caret-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li><a href="#">Edit</a></li>
                                                                    <li><a href="#">Upload</a></li>
                                                                    <li><a href="#">Export to Excel</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="col-md-12"><br></div> <!-- blankspace -->

                                                        <!-- summary -->
                                                        <div class="col-md-6">
                                                            <div class="mini-stat clearfix">
                                                                <span class="mini-stat-icon pink"><i class="fa fa-tags"></i></span>
                                                                <div class="mini-stat-info">
                                                                    <span><?= $stat1 ?></span>
                                                                    Purchase this Month
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mini-stat clearfix">
                                                                <span class="mini-stat-icon green"><i class="fa fa-shopping-cart"></i></span>
                                                                <div class="mini-stat-info">
                                                                    <span><?= $stat2 ?></span>
                                                                    Shopping this Month
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- identitas -->
                                                        <div class="col-md-12">
                                                            <h3>Identity</h3>
                                                            <table class="table table-striped table-hover table-bordered">
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($identitas as $key => $value) {

                                                                        echo "
                                                                        <tr>
                                                                            <th>".$key."</th>
                                                                            <td>".$value."</td>
                                                                        </tr>
                                                                        ";
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div> <!-- end main row -->

                                        </div> <!-- end panel -->
                                    </section>
                                </div>
                                <div id="stat" class="tab-pane">
                                    <div class="well">
                                        Working on Progress ...
                                    </div>
                                </div>
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

<script src="assets/js/mini-upload-form/assets/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="assets/js/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
<script src="assets/js/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
<script src="assets/js/mini-upload-form/assets/js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="assets/js/mini-upload-form/assets/js/script.js"></script>

<!--script for this page only-->
<script src="assets/js/table-order.js"></script>

<script>
    $(document).ready(function() {

        EditableTable.init();
    });
</script>

<!-- END JAVASCRIPTS -->

</body>
</html>