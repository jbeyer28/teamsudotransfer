<?php
define('db_user', 'student');
define('db_password', 'student');
define('db_host', 'localhost');
define('db_name', 'sudostore');

$dbc = @mysqli_connect(db_host, db_user, db_password, db_name)
or die("couldn't connect" . mysqli_connect_error());


if($_COOKIE['user'] != null){
	$sql = 'select * from cookies where id = ?;';
	$stmt = mysqli_stmt_init($dbc);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "SQL statement failed 1";
		exit;
	}
	mysqli_stmt_bind_param($stmt, "s", $_COOKIE['user']);
	mysqli_stmt_execute($stmt);
	
	$response = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_array($response);
	if($row != ''){
		$current_username = $row['username'];
	}
	else{
		$time = date('D, d M Y H:i:s', strtotime('-100 days'));
		echo '<script>
					document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
					</script>';
	}
	
}

?>
