<?php  
	
	include_once "../DB.php";

	function adminCheckLogin($email,$password){

		$db = new DB();

		$user = $db->getInstance();

	    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND roleID='1'";
	    $result = mysqli_query($user->con, $sql);
	    $num_rows = mysqli_num_rows($result);
	    if ($num_rows > 0) {
	        return $result;
	    }else {
	        return false;
	    }
	}

	function checkEmail($email){
		$db = new DB();

		$user = $db->getInstance();

		$sql = "SELECT * FROM users WHERE email='$email' AND isConfirmed=1";
        $result = mysqli_query($db->con, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            return false;
        }else {
            return true;
        }
	}

	function insert($fullName,$email, $dob, $address, $password,$phone, $image){
		$db = new DB();

		$user = $db->getInstance();

        $sql = "INSERT INTO users(fullName, email, dob, address, password, roleId, status, isConfirmed, phone, image) VALUES ('$fullName','$email','$dob','$address','$password',2,1,1,'$phone', '$image')";
        $result = mysqli_query($user->con, $sql);
		//echo mysqli_error($user->con);
        if ($result) {
            return true;
        }
        else return false;
	}
?>