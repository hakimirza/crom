<?php 

$user = array("Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi");
$label = array("Tersedia", "-");

for ($i=0; $i < sizeof($user) ; $i++) {

    $n=0;

    echo '
    <tr>
        <td>'.($i+1).'</td>
        <td>'.$user[$i].'</td>
        <td> 
            '.$label[rand(0,1)].'
        </td>
        <td> 
            '.$label[rand(0,1)].'
        </td>
        <td> 
            '.$label[rand(0,1)].'
        </td>
        <td> 
            <a class="edit" href="javascript:;"><i class="fa fa-pencil" title="edit"></i></a>
        </td>
    </tr>
    ';

}

function title($title){

    if ($title==0) {
        
        return "Tidak tersedia";
    }
    else return "Tersedia";
} 

?>