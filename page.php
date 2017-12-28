<?php 
$start_page=2;
$total=100;
$page_size=10;
$current_page=$_REQUEST['current_page'];
$arr=array('start_page'=>$start_page,'total'=>$total,'page_size'=>$page_size,'current_page'=>$current_page);
// echo $start_page,'<br>'.$total,'<br>'.$page_size,'<br>'.$current_page;
// var_dump($arr);
echo json_encode($arr);


















 ?>