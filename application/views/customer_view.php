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
                        All Customer List
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                         <span class="tools pull-right"><button type="button" class="btn btn-default">Download as Excel</button></span>
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th>No. ID/KTP</th>
                                <th>Nama</th>
                                <!--th>TTL</th!-->
                                <th>Jenis Kelamin</th>
                                <!--th>Alamat</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th>Penghasilan</th>
                                <th>Alamat Asli</th>
                                <th>Jumlah Keluarga</th!-->
                                <th>Warung</th>
                                <th>Detail</th>
                                <!--Jadi ketika detail di klik Keluar All Customer List kataj TTL,Alamat,Agama Pekerjaan dkk. Tapi masih belum berhasil diedit. soalnya main ke js -->
                                <th>Membership</th>
                            </tr>
                            </thead>
                            <!-- isi tabel, ubah ke php untuk loop -->
                            <tbody>
                            <tr>
                                <td><a href="#">1628790092290118</a></td>
                                <td>Pradiva Nur Abditya</td>
                                <td>Laki Laki</td>
                                <td>Warung Suka Makan</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-primary label-mini">Bronze</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1119286408887659</a></td>
                                <td>Rizki Nagari</td>
                                <td>Laki Laki</td>
                                <td>Warung Suka Makan</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-success label-mini">Silver</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1927389402789302</a></td>
                                <td>Nadra Yudelsa Ratu</td>
                                <td>Perempuan</td>
                                <td>Warung Suka Makan</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-danger label-mini">Gold</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1074930294789038</a></td>
                                <td>Elsa Maudina</td>
                                <td>Perempuan</td>
                                <td>Warung Aljabar</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-danger label-mini">Gold</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1027392738947389</a></td>                   
                                <td>Sanjaya Abdullah</td>
                                <td>Laki Laki</td>
                                <td>Warung Aljabar</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-primary label-mini">Bronze</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Warung Suka Makan Customer List
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                         <span class="tools pull-right"><button type="button" class="btn btn-default">Download as Excel</button></span>
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th>No. ID/KTP</th>
                                <th>Nama</th>
                                <!--th>TTL</th!-->
                                <th>Jenis Kelamin</th>
                                <!--th>Alamat</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th>Penghasilan</th>
                                <th>Alamat Asli</th>
                                <th>Jumlah Keluarga</th!-->
                                <th>Detail</th>
                                <th>Membership</th>
                            </tr>
                            </thead>
                            <!-- isi tabel, ubah ke php untuk loop -->
                            <tbody>
                            <tr>
                                <td><a href="#">1628790092290118</a></td>
                                <td>Pradiva Nur Abditya</td>
                                <td>Laki Laki</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-primary label-mini">Bronze</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1119286408887659</a></td>
                                <td>Rizki Nagari</td>
                                <td>Laki Laki</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-success label-mini">Silver</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1927389402789302</a></td>
                                <td>Nadra Yudelsa Ratu</td>
                                <td>Perempuan</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-danger label-mini">Gold</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Warung Aljabar Customer List
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                         <span class="tools pull-right"><button type="button" class="btn btn-default">Download as Excel</button></span>
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th>No. ID/KTP</th>
                                <th>Nama</th>
                                <!--th>TTL</th!-->
                                <th>Jenis Kelamin</th>
                                <!--th>Alamat</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th>Penghasilan</th>
                                <th>Alamat Asli</th>
                                <th>Jumlah Keluarga</th!-->
                                <th>Detail</th>
                                <th>Membership</th>
                            </tr>
                            </thead>
                            <!-- isi tabel, ubah ke php untuk loop -->
                            <tbody>
                           <tr>
                                <td><a href="#">1074930294789038</a></td>
                                <td>Elsa Maudina</td>
                                <td>Perempuan</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-danger label-mini">Gold</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">1027392738947389</a></td>                   
                                <td>Sanjaya Abdullah</td>
                                <td>Laki Laki</td>
                                <td><a href="#">click for detail</a></td>
                                <td><span class="label label-primary label-mini">Bronze</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        </div>

      </section>
  </section>
<!-- main content end -->
<?php
 $this->load->view('template/page_end2');
 ?>