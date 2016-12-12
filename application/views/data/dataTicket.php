<?php 

$dataTicket=$this->db->query("SELECT * FROM ticket LIMIT 20 ;"); // hanya 20
$sup = array("Mie Sedap", "Beng-Beng", "Coca-Cola", "Other");
$i=1;$table="";
$ta='<td> 
            <label hidden>1</label>
            <span class="label label-success" title="complete"><i class="fa fa-money"></i></span>
            <span class="label label-default" title="belum diproses"><i class="fa fa-truck"></i></span>
            <span class="label label-default" title="sedang diproses"><i class="fa fa-check-square"></i></span>
        </td>';
foreach ($dataTicket->result_array() as $key) {

    $table = $table.'
    <tr>
        <td>'.$i.'</td>
        <td>'.$key['id_warung'].'</td>
        <td>'.$key['id_agen'].'</td>
        <td>Nama Agent</td>
        <td>'.$key['category'].'</td>
        <td>'.$key['date_sent'].'</td>
        <td>'.$key['title'].'</td>
        ';
    if($key['status']==0){

        $table =$table.'<td>Belum diproses</td>';
    }elseif ($key['status']==1) {
        $table =$table.'<td>Sedang diproses</td>';
    }elseif ($key['status']==2) {
        $table =$table.'<td>Complete</td>';
    }
     

    $table = $table.'</tr>';
    $i++;
}

echo $table;


?>