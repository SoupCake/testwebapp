<?php
  // connection string
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@123456", "Database" => "ddacdbtp042018", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp042018.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if(!$conn){
    die("Error connection: ".sqlsrv_errors());
  }
  //echo "Connection Success: connected!";
  // displaying table
  echo "<table border='1'>";
    $sql = "SELECT * FROM [dbo].[restaurant]";
    $getResults = sq;srv_query($conn, $sql);
    if ($getResults == FALSE)
    {
      die(sqlsrv_errors());
    }
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
    {
      echo "<tr>";
      echo "<td>".$row['restaurant_id']."</td>";
      echo "</tr>";
    }
  echo "</table>";
?>
