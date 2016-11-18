<?php 

$user = array("warung abc", "toko defgh", "kedai efghi");
$label = array("nego_1", "nego_2", "nego_3");
$modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Warung abc - 50 kardus mie instan</h3>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-md-6">
                    <h4>Dalam proses pengiriman</h4>
                    <hr>
                    <h4 class="center">
                        <span class="label label-success" title="telah dibayar"><i class="fa fa-money fa-lg"></i></span>
                        <span class="label label-success" title="sedang dikirim"><i class="fa fa-truck fa-lg"></i></span>
                        <span class="label label-default" title="belum diterima"><i class="fa fa-check-square fa-lg"></i></span>
                    </h4>
                    <hr>
                    <p>
                        Penjelasan singkat tentang order. Penjelasan singkat tentang order. Penjelasan singkat tentang order. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info">Total (Rp) : 
                            <h3>1,000,000
                                <span><a target="_blank" href="logisticManagement/showInvoice">(<i class="fa fa-print" title="cetak invoice"></i>)</a></span>
                            </h3>
                        </li>
                        <li class="list-group-item">Logistik &nbsp;&nbsp;: 
                            <h4>JNE</h4>
                        </li>
                        <li class="list-group-item">No Resi &nbsp;&nbsp;&nbsp;: 
                            <h4>123jne456</h4>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        </div>
    </div>
</div>
</div>';

for ($i=1; $i < 10 ; $i++) {

    echo '
    <tr>
        <td>'.$i.'</td>
        <td>'.$user[rand(0,2)].'</td>
        <td> 
            50 kardus mie instan <a data-toggle="modal" href="#myModal" title="detail pemesanan"><i>(detail)</i></a>'.$modal.'
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <label hidden>1</label>
            <span class="label label-success" title="telah dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-default" title="belum dikirim"><i class="fa fa-truck"></i></span>
            <span class="label label-default" title="belum diterima"><i class="fa fa-check-square"></i></span>
        </td>
    </tr>
    ';

    echo '
    <tr>
        <td>'.++$i.'</td>
        <td>'.$user[rand(0,2)].'</td>
        <td> 
            50 kardus mie instan <a data-toggle="modal" href="#myModal" title="detail pemesanan"><i>(detail)</i></a>
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <label hidden>2</label>
            <span class="label label-success" title="telah dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-success" title="sedang dikirim"><i class="fa fa-truck"></i></span>
            <span class="label label-default" title="belum diterima"><i class="fa fa-check-square"></i></span>
        </td>
    </tr>
    ';

    echo '
    <tr>
        <td>'.++$i.'</td>
        <td>'.$user[rand(0,2)].'</td>
        <td> 
            50 kardus mie instan <a data-toggle="modal" href="#myModal" title="detail pemesanan"><i>(detail)</i></a>
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <label hidden>3</label>
            <span class="label label-success" title="telah dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-success" title="sedang dikirim"><i class="fa fa-truck"></i></span>
            <span class="label label-success" title="telah diterima (selesai)"><i class="fa fa-check-square"></i></span>
        </td>
    </tr>
    ';

    echo '
    <tr>
        <td>'.++$i.'</td>
        <td>'.$user[rand(0,2)].'</td>
        <td> 
            50 kardus mie instan <a data-toggle="modal" href="#myModal" title="detail pemesanan"><i>(detail)</i></a>
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <label hidden>0</label>
            <span class="label label-default" title="belum dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-default" title="belum dikirim"><i class="fa fa-truck"></i></span>
            <span class="label label-default" title="belum diterima"><i class="fa fa-check-square"></i></span>
        </td>
    </tr>
    ';

}

?>