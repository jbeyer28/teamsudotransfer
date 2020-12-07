<?php
define('db_user', 'student');
define('db_password', 'student');
define('db_host', 'localhost');
define('db_name', 'sudostore');

$dbc = @mysqli_connect(db_host, db_user, db_password, db_name)
or die("couldn't connect" . mysqli_connect_error());


?>
