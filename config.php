<?php
define('DBHOST','localhost');
define('DBUSER','gianmyid_hyd');
define('DBPASS','1234yogi322000');
define('DBNAME','gianmyid_uts');
try {

    //create PDO connection
    $db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
?>

