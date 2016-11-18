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
                        WORLD MAP API ERROR
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div id="world-vmap" style="width:100%; height: 400px;"></div>

                    </div>
                </section>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                           EUROPE API ERROR
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">

                            <div id="europe-vmap" style="width: 100%; height: 520px;"></div>


                        </div>
                    </section>
                </div>
            </div>
        <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            ASIA API ERROR
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div id="asia-vmap" style="width: 100%; height: 520px;"></div>


                        </div>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Australia API ERROR
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div id="australia-vmap" style="width: 100%; height: 520px;"></div>

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
<!--Morris Chart-->
<script src="assets/js/morris-chart/morris.js"></script>
<script src="assets/js/morris-chart/raphael-min.js"></script>
<script src="assets/js/morris.init.js"></script>
<!--Google Map-->
<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
<script src="assets/js/google-map/maplace.js"></script>
<script src="assets/js/google-map/data/points.js"></script>
<script>
    $(function ()
    {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });

        $("#wizard-vertical").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });
    });

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
