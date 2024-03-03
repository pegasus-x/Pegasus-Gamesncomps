<?php 
	function getproduct($db, $p_id, $type){

 	$product_id = $db->query("SELECT * FROM `products` WHERE p_id = '$p_id'");

	if ($product_id->num_rows > 0) {
			$p_value = $product_id->fetch_object();
				if ($type == 1) {
					$data = $p_value->p_name;	
				}
				if ($type == 2) {
					$data = $p_value->s_price;	
				}
				if ($type == 3) {
					$data = $p_value->p_image;	
				}
				if ($type == 4) {
					$data = $p_value->slug;	
				}

	}else{
		$data = 'No Found';
	}

	return $data;
	}



?>