<?php 


if(isset($_POST['login'])){

  include_once('./include/connect.php');

$loginname = $_POST['email'];
$password = $_POST['password'];

	if (empty($loginname) || empty($password)){
			header("Location: loginform.php?error=fields_are_empty");
			exit();
		}

	else{
		$query = "SELECT * FROM `adminlog` WHERE username =? OR email =?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $query)) {
				header("Location: loginform.php?error=prepared statement error");
				exit();
			}
		else {
				mysqli_stmt_bind_param($stmt, "ss", $loginname, $loginname);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					

					if (md5($password) != $row['password'] ){
						header("Location: loginform.php?error=password_incorrect");
						exit();
					}
					else {
						session_start();
						
						$_SESSION['loginname'] = $row['username'];
						
						$_SESSION['admin_id'] = $row['id'];
						header("Location: dashboard.php?action=login successfully");
						exit();
					}
				}

		}

	}

}
else{

	header("Location:../loginform.php?error=login first");
	exit();
}

?>
