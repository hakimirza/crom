<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Logistic Profile</title>

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
                                        <a data-toggle="tab" href="#main">LOGISTIC PROFILE</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#stat">STATISTIC</a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                    <!-- search form -->
                                        <?= form_open(base_url('logistic/search'), 'class = "form-inline"'); ?>
                                        <div class="col-md-9">
                                            <i class="fa fa-search fa-lg"></i>  
                                            <input id="search_id" type="text" size="10" class="form-control" placeholder="ID-Logistic" autofocus name="idcust">
                                            <input id="search_name" type="text" list="languages" class="form-control" placeholder="Logistic's Name" name="namecust">
                                            <datalist id="languages">

                                            </datalist>
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
                                    </div>
                                </div>
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
                                                            
                                                            <div id="tab-summary">
                                                                
                                                            </div>

                                                            <section class="panel">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <a href="#basic-panels"><h3><i class="fa fa-book"> </i> Service Level by Shop </h3></a>
                                                                        </div>
                                                                    </div> 
                                                                    <hr> 
                                                                    <div id="table2" class="col-md-12">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>

                                                    </div>

                                                    <!-- second main column -->
                                                    <div class="col-md-6">

                                                       <div class="row">

                                                        
                                                        <!-- identitas -->
                                                        <section class="panel">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <a href="#basic-panels"><h3><i class="fa fa-book"> </i> Identity </h3></a>
                                                                    </div>
                                                                </div> 
                                                                <hr> 
                                                                <div class="col-md-12">
                                                                    <table class="table table-striped table-hover table-bordered">
                                                                        <tbody id="searchResult" >
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </section>
                                                         
                                                    </div>
                                                </div>

                                            </div> <!-- end main row -->

                                            <!-- map -->
                                                           
                                                                
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <a href="#basic-panels"><h3><i class="fa fa-truck"> </i> Logistic Area </h3></a>
                                                </div>
                                            </div> 
                                            <hr> 
                                            <div id="gmap" class="col-md-12">
                                                
                                            </div>
                                                              
                                                         

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

<!--Google Map-->
<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>
<script src="assets/js/google-map/maplace.js"></script>

<!-- Our main JS file -->
<script src="assets/js/mini-upload-form/assets/js/script.js"></script>

<!--script for this page only-->
<script src="assets/js/table-order.js"></script>

<script>
    $(document).ready(function() {

        EditableTable.init();

            $( "#search_id" ).keyup(function(e) {
                e.preventDefault();
                var data=document.getElementById("search_id").value;
                $.ajax({
                    url : 'logistic_search',
                    data : 'id='+data,
                    type : 'POST',
                    success : function(hasil){
                            res=hasil.split("::");
                            //document.getElementById("img1").innerHTML=res[1];
                            //document.getElementById("searchResult").innerHTML=res[2];
                            document.getElementById("searchResult").innerHTML=res[1];

                            var summary=res[4].split(",");
                            document.getElementById("tab-summary").innerHTML ='<div class="col-md-12"><h2 id="logistic_title">Summary</h2></div>';
                            document.getElementById("tab-summary").innerHTML +='<div id="logistic-summary"><div class="col-md-4"><img id="img1" src='+summary[0]+' class="img-responsive img-rounded" alt="Logistics logo"></div>';
                            document.getElementById("tab-summary").innerHTML +='<div class="col-md-3"><div class="mini-stat clearfix"><span class="mini-stat-icon pink"><i class="fa fa-truck"></i></span><div class="mini-stat-info"><span>'+summary[1]+'</span>Order Ratio</div></div></div>';
                            document.getElementById("tab-summary").innerHTML +='<div class="col-md-4"><div class="mini-stat clearfix"><span class="mini-stat-icon green"><i class="fa fa-calendar"></i></span><div class="mini-stat-info"><span>'+summary[2]+'</span>Lead Time (day)</div></div></div></div>';

                            document.getElementById("logistic_title").innerHTML=res[0];
                            document.getElementById("table2").innerHTML=res[3];
                            document.getElementById("gmap").innerHTML='<div id="gmap-list" style="height: 222px"></div>';
                            var arrGps=res[2].split(",");           
                            var loct=[];
                            for (i= 0; i<arrGps.length; i++) {
                                var arrTemp=arrGps[i].split(":");
                                loct[i]={
                                    lat: parseFloat(arrTemp[0]),
                                    lon: parseFloat(arrTemp[1]),
                                    html: [
                                    '<h3>'+res[5]+'</h3>',
                                    ].join(''),
                                    zoom: 8
                                }
                            };

                               
                            new Maplace({
                                locations: loct,
                                map_div: '#gmap-list',
                            }).Load();
                           
                    },
                });


            });
            function cobaSearch(){
                alert("ok");
            }
            $( "#search_name" ).keyup(function(e) {
                e.preventDefault();
                var data=document.getElementById("search_name").value;

                $.ajax({
                    url : 'logistic_search',
                    data : 'name='+data,
                    type : 'POST',
                    success : function(hasil){
                        //alert(hasil);
                            document.getElementById("languages").innerHTML=hasil;
                      //      document.getElementById("search_name").value=data;
                    },
                });
            });

            document.querySelector('input[list="languages"]').addEventListener('input', onInput);

            function onInput(e) {
               var input = e.target,
                   val = input.value;
                   list = input.getAttribute('list'),
                   options = document.getElementById(list).childNodes;

              for(var i = 0; i < options.length; i++) {
                if(options[i].innerText === val) {
                  
                    data=val.split(" : ");
                    $.ajax({
                        url : 'logistic_search',
                        data : 'id='+data[1],
                        type : 'POST',
                        success : function(hasil){
                                res=hasil.split("::");
                                //document.getElementById("img1").innerHTML=res[1];
                                //document.getElementById("searchResult").innerHTML=res[2];
                                document.getElementById("searchResult").innerHTML=res[1];
                                document.getElementById("search_name").value=data[0];
                                document.getElementById("search_id").value=data[1];

                                var summary=res[4].split(",");
                                document.getElementById("tab-summary").innerHTML ='<div class="col-md-12"><h2 id="logistic_title">Summary</h2></div>';
                                document.getElementById("tab-summary").innerHTML +='<div id="logistic-summary"><div class="col-md-4"><img id="img1" src='+summary[0]+' class="img-responsive img-rounded" alt="Logistics logo"></div>';
                                document.getElementById("tab-summary").innerHTML +='<div class="col-md-3"><div class="mini-stat clearfix"><span class="mini-stat-icon pink"><i class="fa fa-truck"></i></span><div class="mini-stat-info"><span>'+summary[1]+'</span>Order Ratio</div></div></div>';
                                document.getElementById("tab-summary").innerHTML +='<div class="col-md-4"><div class="mini-stat clearfix"><span class="mini-stat-icon green"><i class="fa fa-calendar"></i></span><div class="mini-stat-info"><span>'+summary[2]+'</span>Lead Time (day)</div></div></div></div>';

                                document.getElementById("logistic_title").innerHTML=res[0];
                                document.getElementById("table2").innerHTML=res[3];
                                document.getElementById("gmap").innerHTML='<div id="gmap-list" style="height: 222px"></div>';
                                var arrGps=res[2].split(",");
                                
                                var loct=[];
                                for (i= 0; i<arrGps.length; i++) {
                                    var arrTemp=arrGps[i].split(":");
                                    loct[i]={
                                        lat: parseFloat(arrTemp[0]),
                                        lon: parseFloat(arrTemp[1]),
                                        html: [
                                        '<h3><?= $identitas['Coverage Area'] ?></h3>',
                                        ].join(''),
                                        zoom: 8
                                    }
                                };

                                   
                                new Maplace({
                                    locations: loct,
                                    map_div: '#gmap-list',
                                }).Load();
                        },
                    });

                  break;
                }
              }
            }

        });
    </script>

    <!-- END JAVASCRIPTS -->

</body>
</html>