<?php  
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if(isset($_POST['Login'])){			

	        if($_POST['Login']=="Log in"){	

	            header("Location: ../views/login.php");
	            	            
	        }
		}
	}else{
		header("Location: app/views/login.php");
	}



?>