<?php
include ("../db/user_db.php");
class User {
	private $var;
	
	function user_check(){
		$var = new User_db();
		echo $var->get_user();
	}
}
?>