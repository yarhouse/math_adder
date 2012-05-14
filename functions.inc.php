<?php 

function all_pass($pass){
	isset($_POST['number_over_20'])
	&& htmlentities($_POST['number_over_20'])>19
	&& isset($_POST['one2three'])
	&& htmlentities($_POST['one2three'])>=1
	&& htmlentities($_POST['one2three'])<=3);

	return $pass;
}

function fail_20($failed20){
	isset($_POST['number_over_20'])
	&& htmlentities($_POST['number_over_20'])<20;

	return $failed20;
}

function fail_3($failed3){
	isset($_POST['one2three'])
	&& htmlentities($_POST['one2three'])<1
	|| htmlentities($_POST['one2three'])>3;

	return $failed3;
}

?>