<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'marqubit_pos';
$db_pass		= 'seccion33';
$db_database	= 'marqubit_pos'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>