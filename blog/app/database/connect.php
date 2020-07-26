<?php 

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['vlvlnl1grfzh34vj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com'];
$username = $dbparts['l8qcac2a3900uc0r'];
$password = $dbparts['yxk6ohjrugyckyhh'];
$database = ltrim($dbparts['xql1yvg1u9vslaxh'],'/');
    

    $conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connnection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";


?>
