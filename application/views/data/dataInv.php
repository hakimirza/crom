<?php 

$prod = array("Mie Sedap", "Beng-Beng", "Coca-Cola", "Very Long Named Item");
$stat = array("low","med","high");

for ($i=1; $i < 20 ; $i++) {

    echo '
    <tr>
        <td>'.$i.'</td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td>'.$prod[rand(0,3)].'</td>
        <td>'.rand(0,10).'</td>
        <td>'.$stat[rand(0,2)].'</td>
        <td><a class="edit" href="javascript:;"><i class="fa fa-pencil" title="Edit"></i></a></td>
        <td><a class="delete" href="javascript:;"><i class="fa fa-trash-o" title="Hapus"></i></a></td>
    </tr>
    ';

}

?>