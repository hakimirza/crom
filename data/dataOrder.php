<?php 

$user = array("warung abc", "toko defgh", "kedai efghi");
$label = array("nego_1", "nego_2", "nego_3");
$modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">50 Kardus Mie Instan</h4>
        </div>
        <div class="modal-body">

            Detail Pemesanan...

        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <button class="btn btn-success" type="button">Save changes</button>
        </div>
    </div>
</div>
</div>';

for ($i=1; $i < 15 ; $i++) {

    echo '
    <tr>
        <td>'.$i.'</td>
        <td>'.$user[rand(0,2)].'</td>
        <td> 
            50 kardus mie instan <a data-toggle="modal" href="#myModal" title="detail pemesanan"><i>(detail)</i></a>
            '.$modal.'
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
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
            '.$modal.'
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <span class="label label-success" title="telah dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-success" title="telah dikirim"><i class="fa fa-truck"></i></span>
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
            '.$modal.'
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <span class="label label-success" title="telah dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-success" title="telah dikirim"><i class="fa fa-truck"></i></span>
            <span class="label label-success" title="telah diterima (selesai)"><i class="fa fa-check-square"></i></span>
             <a class="delete" href="javascript:;" title="sembunyikan"> <i class="fa fa-eye-slash"></i></a>
        </td>
    </tr>
    ';

    echo '
    <tr>
        <td>'.++$i.'</td>
        <td>'.$user[rand(0,2)].'</td>
        <td> 
            50 kardus mie instan <a data-toggle="modal" href="#myModal" title="detail pemesanan"><i>(detail)</i></a>
            '.$modal.'
        </td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td> 22 Januari 2017 </td>
        <td> 
            <span class="label label-default" title="belum dibayar"><i class="fa fa-money"></i></span>
            <span class="label label-default" title="belum dikirim"><i class="fa fa-truck"></i></span>
            <span class="label label-default" title="belum diterima"><i class="fa fa-check-square"></i></span>
        </td>
    </tr>
    ';

}

?>