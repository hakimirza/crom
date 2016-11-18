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
                            Google Map with Tab Location 
                            !!!!!Google MAP API ERROR!!!!
                        <!--Google API Belum ditambah. Semangat <3 !-->
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="controls-tabs"></div>
                            <div id="info"></div>
                            <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt-P0yzfyTtTGbEwVnAuY-J7ztrRvVk8g&callback=initMap"
    async defer></script>
                        </div>
                    </section>
                </div>
            </div>
        <!-- page end-->
        <div class="row" style="display:none;">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Customize Graph
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-area"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row" style="display: none">
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
                        <div id="graph-bar"></div>
                    </div>
                </section>
            </div>
        </div>
            <div class="row" style="display: none">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Line Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-line"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
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
                            <div id="graph-area-line"></div>
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
                            <div id="graph-donut"></div>
                        </div>
                    </section>
                </div>
            </div>


        </section>
    </section>
    <!--main content end-->
<?php
 $this->load->view('template/page_end2');
 ?>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="assets/js/jquery.js"></script>
<script src="assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/js/flot-chart/jquery.flot.js"></script>
<script src="assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/js/flot-chart/jquery.flot.pie.resize.js"></script>

<!--Morris Chart-->
<script src="assets/js/morris-chart/morris.js"></script>
<script src="assets/js/morris-chart/raphael-min.js"></script>
<script src="assets/js/morris.init.js"></script>

<!--Google Map-->
<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
<script src="assets/js/google-map/maplace.js"></script>
<script src="assets/js/google-map/data/points.js"></script>

<!--common script init for all pages-->
<script src="assets/js/scripts.js"></script>

<script>
    //ul list example
    new Maplace({
        locations: LocsB,
        map_div: '#gmap-list',
        controls_type: 'list',
        controls_title: 'Choose a location:'
    }).Load();

    new Maplace({
        locations: LocsB,
        map_div: '#gmap-tabs',
        controls_div: '#controls-tabs',
        controls_type: 'list',
        controls_on_map: false,
        show_infowindow: false,
        start: 1,
        afterShow: function(index, location, marker) {
            $('#info').html(location.html);
        }
    }).Load();
</script>