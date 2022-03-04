<?php
require "connect.php";
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM comentarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $records_group[] = $row;
  }
} else {
  echo "0 results";
}
   $timestamp =date('d-m-Y');
            $filename = 'coment_' . $timestamp . '.xls';
            
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=\"$filename\"");
            

            
            $isPrintHeader = false;

            foreach ($records_group as $row_c) {

                if (! $isPrintHeader ) {

                    echo implode("\t", array_keys($row_c)) . "\n";
                    $isPrintHeader = true;

                }
                echo implode("\t", array_values($row_c)) . "\n";
            }
            exit();
mysqli_close($conn);
?>