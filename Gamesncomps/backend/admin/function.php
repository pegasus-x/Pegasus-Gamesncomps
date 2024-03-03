<?php 
	function category($db,$c_id,$type)
	{
            $category = $db->query("SELECT * FROM `category` WHERE c_id = '$c_id'");
            $check = $category->num_rows;
				if ($check > 0) {
					$cat_value = $category->fetch_object();
					if ($type == 1) {
							return $cat_value->c_name;
					}else{
							return $cat_value->c_img;
					}
				}else{
							return '404 N/F';
					}
	}


 ?>