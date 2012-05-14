<?php
// include 'function.inc.php';
include 'doctype.html';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
		
		if (isset($_POST['number_over_20'])
		&& htmlentities($_POST['number_over_20'])>19
		&& isset($_POST['one2three'])
		&& htmlentities($_POST['one2three'])>=1
		&& htmlentities($_POST['one2three'])<=3){

			$k = htmlentities($_POST['number_over_20']);
			$n = htmlentities($_POST['one2three']);
			include 'output.php';

			switch($n){
				case 1:
					include 'case1.php';
					break;
								
				case 2:
					include 'case2.php';
					break;
						
				case 3:
					include 'case3.php';
					break;

				default: echo 'The number must be 1, 2 or 3.<br />Give the number again.';
				break;
			}		
		}
		elseif (isset($_POST['number_over_20'])
		&& htmlentities($_POST['number_over_20'])<20){

			$k = htmlentities($_POST['number_over_20']);
			echo "You entered the number ".$k.".<br />";
			echo "Please enter a number of 20 or higher.<br />";
		}
		elseif (isset($_POST['one2three'])
		&& htmlentities($_POST['one2three'])<1
		|| htmlentities($_POST['one2three'])>3){

			$n = htmlentities($_POST['one2three']);
			echo "You entered the number ".$n.".<br />";
			echo "Please a choose an option number being 1, 2, or 3.<br />";
		}
	}
	else{

		include 'input.html';
	}
include 'footer.html'; 
?>
