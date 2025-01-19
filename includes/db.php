

<?php
$serverName = "172.30.14.49"; //serverName\instanceName
  $connectionInfo = array( "Database"=>'db_ceramic_farda',"UID"=>"hamed", "PWD"=>"Az123456","CharacterSet" => "UTF-8");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
?>
