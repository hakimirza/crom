<?php
$this->load->view('template/page_head');
$this->load->view('template/header');
$this->load->view('template/sidebar_left');
?>
<!-- main content start -->
  <section id="main-content">
      <section class="wrapper">
        <!--User Registration-->
		<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        New User Registration
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">

                        <div id="wizard">
                            <h2>First Step</h2>
                            <!-- Identitas user -->
                            <section>
                                <form class="form-horizontal">
                                		<div class="form-group">
                                            <label class="col-lg-2 control-label">No. ID/KTP</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" placeholder="ID/KTP Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Full Name</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">User Name</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </form>
                            </section>

                            <h2>Second Step</h2>
                            <!-- cara menghubungi user -->
                            <section>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Phone</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Mobile</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-lg-2 control-label">Email Address</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Address</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" cols="60" rows="5"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </section>

                            <h2>Third Step</h2>
                            <!-- keterangan warung -->
                            <section>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Shop Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Shop Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Address</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" cols="60" rows="5"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </section>

                            <h2>Final Step</h2>
                            <section>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Password</label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Password Confirmation</label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </form>
                                <p>Congratulations This is the Final Step</p>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Register More User Using Excel
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        	You can drop excel file or browse it to upload file
                            <div id="drop">
                                Drop Here

                                <a>Browse</a>
                                <input type="file" name="upl" multiple />
                            </div>

                            <ul>
                                <!-- The file uploads will be shown here -->
                            </ul>

                        </form>
                    </div>
                </section>
            </div>
        </div>
      </section>
  </section>
<!-- main content end -->
<?php
$this->load->view('template/page_end2');

?>