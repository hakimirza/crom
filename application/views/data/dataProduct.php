<?php 

$sup = array("Mie Sedap", "Beng-Beng", "Coca-Cola", "Very Long Named Item");

function modal(array $arr){
    return '<div class="modal fade" id="modal'.$arr[0].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">'.$arr[1].'</h3>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/product_img.png" alt="'.$arr[1].'" class="img-rounded" width="95%">
                    <h4>Some Details</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info"><h4>ID : '.$arr[0].'</h4></li>
                        <li class="list-group-item">Harga 1 (Rp) : <h3>'.number_format($arr[2]).'</h3></li>
                        <li class="list-group-item">Promo &nbsp;&nbsp;(%) : <h3>'.$arr[3].'</h3></li>
                        <li class="list-group-item">Harga 2 (Rp) : <h3>'.number_format($arr[4]).'</h3></li>
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
}

for ($i=1; $i < 20 ; $i++) {

    $cod = substr(md5($i), 0, 5);
    $prod = $sup[rand(0,3)];
    $harga1 = rand(10000,5000000);
    $diskon = rand(0,100);
    $harga2 = $harga1-($harga1*$diskon/100);
    $arr = array($cod,$prod,$harga1,$diskon,$harga2);

    echo '
    <tr>
        <td>'.$i.'</td>
        <td><a data-toggle="modal" href="#modal'.$cod.'" title="Detail">'.$cod.'</a></td>
        <td>'.$prod.'</td>
        <td>'.number_format($harga1).'</td>
        <td>'.$diskon.'</td>
        <td>'.number_format($harga2).'</td>
        '.modal($arr).'
    </tr>
    ';

}

?>