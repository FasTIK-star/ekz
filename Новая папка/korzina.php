<?php 
	session_start(); 
	require("db.php"); 
	if(isset($_GET['page'])){ 
		 
		$pages=array("products", "cart"); 
		 
		if(in_array($_GET['page'], $pages)) { 
			 
			$_page=$_GET['page']; 
			 
		}else{ 
			 
			$_page="products"; 
			 
		} 
		 
	}else{ 
		 
		$_page="products"; 
		 
	} 
?>