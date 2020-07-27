<?php 
$hostname = 'vlvlnl1grfzh34vj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$username = 'l8qcac2a3900uc0r';
$password = 'yxk6ohjrugyckyhh';
$database = 'xql1yvg1u9vslaxh';

    // Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connection was successfully established!";
