<?php 

// function modal(array $arr){
//     return '<div class="modal fade" id="modal'.$arr[0].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
// <div class="modal-dialog">
//     <div class="modal-content">
//         <div class="modal-header">
//             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
//             <h3 class="modal-title">'.$arr[1].'</h3>
//         </div>
//         <div class="modal-body">

//             <div class="row">
//                 <div class="col-md-6">
//                     <img src="assets/images/product_img.png" alt="'.$arr[1].'" class="img-rounded" width="95%">
//                     <h4>Some Details</h4>
//                     <p>
//                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
//                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
//                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
//                         consequat.
//                     </p>
//                 </div>
//                 <div class="col-md-6">
//                     <ul class="list-group">
//                         <li class="list-group-item list-group-item-info"><h4>ID : '.$arr[5].'</h4></li>
//                         <li class="list-group-item">Harga 1 (Rp) : <h3>'.$arr[2].'</h3></li>
//                         <li class="list-group-item">Promo &nbsp;&nbsp;(%) : <h3>'.$arr[3].'</h3></li>
//                         <li class="list-group-item">Harga 2 (Rp) : <h3>'.$arr[4].'</h3></li>
//                     </ul>
//                 </div>
//             </div>

//         </div>
//         <div class="modal-footer">
//             <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
//         </div>
//     </div>
// </div>
// </div>';
// }

$dataSingleItem=$this->db->query("SELECT * FROM produk;"); // hanya 20
$i=1;
foreach ($dataSingleItem->result_array() as $key) {

    $arr = array($key['item_name'],$key['npp'],$key['main_supp'],$key['nsp'],$key['id_produk']);

    echo '
     <tr id="dataItem">
         <td>'.$i.'</td>
         <td>'.$key['item_name'].'</td>
         <td><a data-toggle="modal" href="#modalUpdateItem" title="Detail">'.$key['id_produk'].'</a></td>
         <td>'.$key['npp'].'</td>
         <td>'.$key['nsp'].'</td>
         <td>'.$key['main_supp'].'</td>
     </tr>
     ';

    $i++;
}

?>

 