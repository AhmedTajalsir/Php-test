<?php
 $dbhost = 'localhost'; 
 $dbname = 'ana'; 
 $dbuser = 'root'; 
 $dbpass = ''; 
 $appname = "Invoice"; 
 $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 if ($connection->connect_error) die($connection->connect_error);
 $connection->set_charset('utf8');
 
 
 
 function queryMysql($query)
 {
 global $connection;
 $result = $connection->query($query);
 if (!$result) die($connection->error);
 return $result;
 }
 

 function calcolute()
 {
    $result = queryMysql("SELECT * FROM invoice ");
    $res=[];
    $i=0;
    while($row=$result->fetch_array(MYSQLI_ASSOC)) {
        if($row['invoice_no'] == 599){
            $row['total']=$row['price'] * $row['qty'];
            $res[$i]=$row;
            $i++;
        }    
    }
    return $res;
}


 function sanitizeString($var)
 {
 global $connection;
 $var = strip_tags($var);
 $var = htmlentities($var);
 $var = stripslashes($var);
 return $connection->real_escape_string($var);
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>