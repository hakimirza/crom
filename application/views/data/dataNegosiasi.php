<?php 

$sup = array("nestle", "unilever", "indofood", "very long named supplier");

for ($i=1; $i < 20 ; $i++) {

    echo '
    <tr>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td>'.$sup[rand(0,3)].'</td>
        <td><a title="Unduh rule" href="#">rule nego</a></td>
        <td> 2016-01-22 </td>
        <td><a class="edit" href="javascript:;"><i class="fa fa-pencil" title="edit"></i></a></td>
        <td><a class="delete" href="javascript:;"><i class="fa fa-trash-o" title="hapus"></i></a></td>
    </tr>
    ';

}

?>