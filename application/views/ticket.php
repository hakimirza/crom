<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Ticketing</title>

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
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue ">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#daftarProduk">TICKETING</a>
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
                                                <div class="adv-table editable-table ">
                                                    <div class="clearfix">


                                                        <div class="pull-right">
                                                            Completed orders : 
                                                            <div class="btn-group">
                                                             <button type="button" class="btn btn-primary active" title="show" id="showCompleted"><i class="fa fa-eye"></i></button>
                                                             <button type="button" class="btn btn-default" title="hide" id="hideCompleted"><i class="fa fa-eye-slash"></i></button>
                                                         </div>
                                                     </div>

                                                     <div class="btn-group">
                                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Print</a></li>
                                                            <li><a id="cetak_pdf" href="javascript:;">Save as PDF</a></li>
                                                            <li><a href="#">Export to Excel</a></li>
                                                        </ul>
                                                    </div>
<form id="TheForm" method="post" action="cetakpdf_ticket" target="TheWindow">
<input type="hidden" id="dataCetak" name="dataCetak" value="" />
<input type="hidden" id="headerCetak" name="headerCetak" value="" />
<input type="hidden" id="judulCetak" name="judulCetak" value="" />
<input type="hidden" id="wCol" name="wCol" value="" />
<input type="hidden" id="hCol" name="hCol" value="" />
</form>
                                                </div>

                                                <div class="space15"><br></div>

                                                <table class="table table-striped table-hover table-bordered" id="table-sortable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>ID Warung</th>
                                                            <th>ID Agent</th>
                                                            <th>Nama Agent</th>
                                                            <th>Kategori</th>
                                                            <th>Date</th>
                                                            <th>Title</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php include "data/dataTicket.php"; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
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

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {

        EditableTable.init();

        $('#hideCompleted').click(function(){

            $('#table-sortable tr td:last-child').each(
                function(){

                    if (parseInt($(this).find('label').text(),10) == 3){

                       $(this).closest('tr').hide();
                   }
               });

            $('#hideCompleted').removeClass('btn-default');
            $('#hideCompleted').addClass('btn-danger','active');
            $('#showCompleted').removeClass('btn-primary','active');
            $('#showCompleted').addClass('btn-default');
        });

        $('#showCompleted').click(function(){

            $('#table-sortable tr td:last-child').each(
                function(){

                    if (!$(this).closest('tr').is(":visible")){

                       $(this).closest('tr').show();
                   }
               });

            $('#hideCompleted').removeClass('btn-danger','active');
            $('#hideCompleted').addClass('btn-default');
            $('#showCompleted').removeClass('btn-default');
            $('#showCompleted').addClass('btn-primary','active');
        });

        $('#cetak_pdf').click(function(e){
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
              document.getElementById("headerCetak").value="No;ID Warung;ID Agent;Nama Agent;Kategori;Date;Title;Status";
              document.getElementById("judulCetak").value="Data Ticket";
              document.getElementById("wCol").value="8;20;15;50;15;20;40;30";
              document.getElementById("hCol").value="5;5;5;5;5;5;5;5";
              //alert(testData); //data yang dicetak dalam pdf

              window.open('', 'TheWindow');
              document.getElementById('TheForm').submit();
              
             
            })
        function getDataTabelforPrint(){
              
            var lengthTable = document.getElementById("table-sortable").rows.length;

              var dataTabel=[];
              for(j=1; j<lengthTable; j++){
                var dataItem="";
                var x = document.getElementById("table-sortable").rows[j].cells;
                for(i=0; i<8; i++){
                    dataItem +=";"+(x[i].innerHTML);
                }
                dataItem=dataItem.substr(1);
                dataTabel[j-1]=dataItem;
              }

              return(dataTabel);

            }
    });
</script>

</body>
</html>