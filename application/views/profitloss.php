 <?php
 $this->load->view('template/page_head');
 $this->load->view('template/header');
 $this->load->view('template/sidebar_left');
 ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

            <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Bar Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="chartJS">
                            <canvas id="bar-chart-js" height="250" width="800" ></canvas>


                        </div>



                    </div>
                </section>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Area Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div class="chartJS">

                                <canvas id="line-chart-js" height="250" width="800" ></canvas>


                            </div>



                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Pie Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div class="chartJS">


                                <canvas id="pie-chart-js" height="250" width="800" ></canvas>

                            </div>

                        </div>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Donut Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div class="chartJS">


                                <canvas id="donut-chart-js" height="250" width="800" ></canvas>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<?php
 $this->load->view('template/page_end2');
 ?>



<!--Easy Pie Chart-->
<script src="assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/js/flot-chart/jquery.flot.js"></script>
<script src="assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/js/flot-chart/jquery.flot.js"></script>
<script src="assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<!--Morris Chart-->
<script src="assets/js/morris-chart/morris.js"></script>
<script src="assets/js/morris-chart/raphael-min.js"></script>
<script src="assets/js/morris.init.js"></script>
<!--Chart JS-->
<script src="assets/js/chart-js/Chart.js"></script>
<script src="assets/js/chartjs.init.js"></script>