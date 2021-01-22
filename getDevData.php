<html>
<body>

<?php
$q = $_GET['q'];


$con = mysqli_connect('localhost','id15971570_dronepwrdb','Abhi@2017_1234','id15971570_databank');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM ".$q;
$result = mysqli_query($con,$sql);

echo "<table id='tbldata' class='table table-hover table-bordered' style='font-size: smaller;'>
 <thead class='table-dark'>
 <tr>
   <th>#</th>
   <th>Device ID</th>
   <th>Battery Voltage(BV)</th>
   <th>Battery Current(BI)</th>
   <th>Battery Power(BP)</th>
   <th>Solar PV Voltage(SV)</th>
   <th>Solar PV Current(SI)</th>
   <th>Solar PV Power(SP)</th>
   <th>Load Voltage(LV)</th>
   <th>Load Current(LC)</th>
   <th>Load Power(LP)</th>
   <th>Load ON/OFF</th>
   <th>Site Coordinate(s)</th>
   <th>Fault(s)</th>
   <th>IP Address</th>
   <th>Received On</th>
 </tr>
 </thead>
 
 <tbody>";
$sno = 0;
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td id='sno'>" . $sno . "</td>";
  echo "<td id='devid'>" . $row['devid'] . "</td>";
  echo "<td id='BV'>" . $row['BV'] . "</td>";
  echo "<td id='BI'>" . $row['BI'] . "</td>";
  echo "<td id='BP'>" . $row['BP'] . "</td>";
  echo "<td id='SV'>" . $row['SV'] . "</td>";
  echo "<td id='SI'>" . $row['SI'] . "</td>";
  echo "<td id='SP'>" . $row['SP'] . "</td>";
  echo "<td id='LV'>" . $row['LV'] . "</td>";
  echo "<td id='LC'>" . $row['LC'] . "</td>";
  echo "<td id='LP'>" . $row['LP'] . "</td>";
  echo "<td id='onoff'>" . $row['onoff'] . "</td>";
  echo "<td id='coordinates'>" . $row['coordinates'] . "</td>";
  echo "<td id='faults'>" . $row['faults'] . "</td>";
  echo "<td id='IP'>" . $row['IP'] . "</td>";
  echo "<td id='recievedon'>" . $row['recievedon'] . "</td>";
  echo "</tr>";

    $sno = $sno + 1;
}

echo "
</tbody>
</table>";

mysqli_close($con);
?>

</body>
</html>