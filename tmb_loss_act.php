<?php 
include 'admin/config.php';
date_default_timezone_set('Asia/Jakarta');
$s = time ();
$tgljam =date("Y-m-d H:i:s",$s);

$ref1=$_POST['ref'];
$qtyreq2=$_POST['qty_req'];
$tanktuj3=$_POST['tank_tujuan'];

// $waktu=now();
mysql_query("insert into tb_loss values('','$tgljam','$ref1','$qtyreq2','$tanktuj3')");

//cari data tanki x
$qcek_tank = mysql_query("select pa from tb_tank where id='".$tanktuj3."'");
if($qcek_tank!=false){
    $num=mysql_numrows($qcek_tank);
    $pumpable=mysql_result($qcek_tank,0,"pa");
    $new_pa=($pumpable + $qtyreq2) ;
    $qupd_tank = mysql_query("UPDATE tb_tank SET pa = '$new_pa' WHERE id = '$tanktuj3' LIMIT 1;");
}


// //ubah ke service all first!
// for ($x = 1; $x < 9; $x++) {
// 	$qupd_tank = mysql_query("UPDATE tb_tank SET status = '100' WHERE id = '{$x}' LIMIT 1;");
//   } 
  

header("location:index1.php");

 ?>