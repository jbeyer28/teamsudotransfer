<?php
require_once('sql_connect.php');


if($_COOKIE['user'] != null){
	$sql = 'delete from cookies where id = ?;';
	$stmt = mysqli_stmt_init($dbc);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "SQL statement failed 1";
		exit;
	}
	mysqli_stmt_bind_param($stmt, "s", $_COOKIE['user']);
	mysqli_stmt_execute($stmt);

	echo '<script>
				document.cookie = "user='.$cookie.'; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; SameSite=flex;";
				</script>';
	echo '<meta http-equiv="refresh" content="0; url=\'index.html\'" />';
	
}
else{
	echo 'You are not logged in.';

}
?>
