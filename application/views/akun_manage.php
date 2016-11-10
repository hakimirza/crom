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
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-3">
                           <div class="profile-pic text-center">
                               <img src="assets/images/lock_thumb.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="profile-desk">
                               <h1>Farhan Yahya Hidayat</h1>
                               <span class="text-muted">Admin CROM</span>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                               </p>
                               <a href="#" class="btn btn-primary">View Profile</a>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="profile-statistics">
                               <h1>1240</h1>
                               <p>This Week Sales</p>
                               <h1>$5,61,240</h1>
                               <p>This Week Earn</p>
                               <ul>
                                   <li>
                                       <a href="#">
                                           <i class="fa fa-facebook"></i>
                                       </a>
                                   </li>
                                   <li class="active">
                                       <a href="#">
                                           <i class="fa fa-twitter"></i>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <i class="fa fa-google-plus"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                    </div>
                </section>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        General Table
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
                                <th>Nama </th>
                                <th>Jabatan</th>
                                <th>Cabang</th>
                                <th>Level Access</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">Farhan Yahya Hidayat</a></td>
                                <td>Admin CROM</td>
                                <td>Jatinegara</td>
                                <td><span class="label label-info label-mini">Level 5</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Muhammad Cholid Alfarisi</a></td>
                                <td>Admin CROM</td>
                                <td>Bidara Cina</td>
                                <td><span class="label label-warning label-mini">Level 4</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Pradiva Nur Abditya</a></td>
                                <td>Agent</td>
                                <td>Cawang</td>
                                <td><span class="label label-success label-mini">Level 1</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Nurul Husna</a></td>
                                <td>Pegawai CROM</td>
                                <td>Kampung Melayu</td>
                                <td><span class="label label-danger label-mini">Level 3</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Mutia Elyani</a></td>
                                <td>Agent</td>
                                <td>Pasar Senen</td>
                                <td><span class="label label-warning label-mini">Level 2</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Tommy Setiawan</a></td>
                                <td>Agent </td>
                                <td>Kampung Rambutan</td>
                                <td><span class="label label-warning label-mini">Level 2</span></td>
                            </tr>

                            </tbody>
                        </table>
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