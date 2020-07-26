<?php 
    $host = 'vlvlnl1grfzh34vj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
    $user = 'l8qcac2a3900uc0r';
    $pass = 'yxk6ohjrugyckyhh';
    $db_name = 'xql1yvg1u9vslaxh';
    

    $conn = new MySQLi($host, $user, $pass, $db_name);

    if($conn->connect_error){
        die('Database connection error: ' . $conn->connect_error);
    }else{
       // echo "Db connection successful";
    }

?>
