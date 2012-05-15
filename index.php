<?php
include 'functions.inc.php';
include 'doctype.html';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
		
		if (all_pass($_POST)){

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
		elseif (fail_20($_POST)){

			$k = htmlentities($_POST['number_over_20']);
			echo "You entered the number ".$k.".<br />";
			echo "Please enter a number of 20 or higher.<br />";
		}
		elseif (fail_3($_POST)){

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