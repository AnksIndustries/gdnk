<?php
// the sample link https://gdnk.000webhostapp.com/putDevData.php?type=type2&devid=COOO123231&BV=00.23&BI=23.1&SV=34.2&SI=20.12&LV=34.00&LI=00.99&ONOFF=1&FAULTS=0&LAT=000000000&LON=000000000
$match = false;
$type = $_GET['type'];
$devid = "'".$_GET['devid']."'";
$BV = floatval($_GET['BV']);
$BI = floatval($_GET['BI']);
$SV = floatval($_GET['SV']);
$SI = floatval($_GET['SI']);
$LV = floatval($_GET['LV']);
$LI = floatval($_GET['LI']);
$LAT = $_GET['LAT'];
$LON = $_GET['LON'];
$ONOFF = intval($_GET['ONOFF']);
$FAULTS = intval($_GET['FAULTS']);


$con = mysqli_connect('localhost','id15971570_dronepwrdb','Abhi@2017_1234','id15971570_databank');
//$con2 = mysqli_connect('localhost','id15971570_dronepwrdb','Abhi@2017_1234','id15971570_databank');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM ".$type;
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
    if($row['devid']==$devid){
        $match = true;
        $result1 = mysqli_query($con,"UPDATE `".$type."` SET `BV`='".$BV."',`BI`='".$BI."',`BP`='".$BV*$BI."',`SV`='".$SV."',`SI`='".$SI."',`SP`='".$SV*$SI."',`LV`='".$LV."',`LC`='".$LI."',`LP`='".$LV*$LI."',`onoff`='".$ONOFF."',`coordinates`='".$LAT.",".$LON."',`faults`='".$FAULTS."',`IP`='".$_SERVER['REMOTE_ADDR']."',`recievedon`='".date("Y-m-d H:i:s")."' WHERE devid=".$devid);
        echo "updated";
    }
}

if($match==false){
    try{
    $result2=mysqli_query($con,"INSERT INTO `".$type."`(`sno`,`devid`, `BV`, `BI`, `BP`, `SV`, `SI`, `SP`, `LV`, `LC`, `LP`, `onoff`, `coordinates`, `faults`, `IP`, `recievedon`) VALUES (NULL,".$devid.",'".$BV."','".$BI."','".$BV*$BI."','".$SV."','".$SI."','".$SV*$SI."','".$LV."','".$LI."','".$LV*$LI."','".$ONOFF."','".$LAT.",".$LON."','".$FAULTS."','".$_SERVER['REMOTE_ADDR']."','".date("Y-m-d H:i:s")."')");
    echo $result2."success , "."INSERT INTO `".$type."`(`sno`,`devid`, `BV`, `BI`, `BP`, `SV`, `SI`, `SP`, `LV`, `LC`, `LP`, `onoff`, `coordinates`, `faults`, `IP`, `recievedon`) VALUES (NULL,".$devid.",'".$BV."','".$BI."','".$BV*$BI."','".$SV."','".$SI."','".$SV*$SI."','".$LV."','".$LI."','".$LV*$LI."','".$ONOFF."','".$LAT.",".$LON."','".$FAULTS."','".$_SERVER['REMOTE_ADDR']."','".date("Y-m-d H:i:s")."')";
    }catch(exception $e){
        echo $e;
    }
}


mysqli_close($con);
//mysqli_close($con2);
?>