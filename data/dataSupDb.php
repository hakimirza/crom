<?php 

$sup = array("nestle", "unilever", "indofood", "very long named supplier");
$label = array('<span class="badge bg-info">Active</span>','<span class="badge bg-important">n/a</span>');

for ($i=1; $i < 20 ; $i++) {

    echo '
    <tr>
        <td>'.$i.'</td>
        <td>'.substr(md5($i), 0, 5).'</td>
        <td>'.$sup[rand(0,3)].'</td>
        <td>'.$label[rand(0,1)].'</td>
        <td>'.number_format(rand(10000,5000000)).'</td>
        <td><a class="edit" href="javascript:;"><i class="fa fa-pencil" title="edit"></i></a></td>
        <td><a class="delete" href="javascript:;"><i class="fa fa-trash-o" title="hapus"></i></a></td>
    </tr>
    ';

}

?>