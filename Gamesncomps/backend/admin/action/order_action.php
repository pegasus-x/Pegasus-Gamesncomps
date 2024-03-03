<?php
session_start();
include '../configtwo.php';
$submit = $_REQUEST['submit'];
$create_at = date('Y-m-d H:i:s');
$update_at = date('Y-m-d H:i:s');
switch ($submit) {

	case 'update_form':
	$o_id = mysqli_real_escape_string($db,$_REQUEST['o_id']);
	$status = mysqli_real_escape_string($db,$_REQUEST['status']);
	$db->query("UPDATE `checkout` SET `status` = '$status' , update_at = '$update_at' WHERE o_id = '$o_id'");
	header("Location:../ordermanage.php");
	break;
	default:
	echo "No Found";
	break;
}

?>