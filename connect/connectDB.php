<?php

//main connection file for both admin & front end
include 'properties.php';

// Create connection

/** Connection for MySQL
$db = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASENAME); // connecting 

// Check connection
if (!$db) {       //checking connection to DB	
    
    die("Connection to database failed, please contact the administrator: " . mysqli_connect_error());

}else{
    
}
**/



/** Connection for Microsoft SQL Server **/
    $serverName = $SERVERNAME;
    $connectionOptions = array(
        "Database" => $DATABASENAME,
        "Uid" => $USERNAME,
        "PWD" => $PASSWORD
    );
    
    //Establishes the connection
    $db = sqlsrv_connect($serverName, $connectionOptions);

?>