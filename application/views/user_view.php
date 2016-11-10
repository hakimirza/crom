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
                        Users List
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <                               0pth>No. ID/KTP</th>
                                <th>Username</th>
                                <th>Shop Name</th>
                                <th>Order Detail</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                            </thead>
                            <!-- isi tabel, ubah ke php untuk loop -->
                            <tbody>
                            <tr>
                                <td><a href="#">1628790092290118</a></td>
                                <td>Agus</td>
                                <td>Sinar Dewa</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-primary label-mini">In Proggress</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#">1119286408887659</a></td>
                                <td>Wahyudi</td>
                                <td>Tokonya Rakyat</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-success label-mini">Success</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#">1000938769838467</a></td>
                                <td>Ardian</td>
                                <td>Mujur Terus</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-danger label-mini">Canceled</span></td>
                                <td>Out of stock</td>
                            </tr>
                            </tbody>
                        </table>
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