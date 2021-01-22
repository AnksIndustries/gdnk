<?php
$session = mt_rand(1,999);

?>
<!DOCTYPE html>
<html>
<head>
	<title>DP Machine Online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<!-- Latest compiled and minified CSS --> 
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- <style type="text/css">
	* {margin:0;padding:0;box-sizing:border-box;font-family:arial,sans-serif;resize:none;}
	html,body {width:100%;height:100%;}
	#wrapper {position:relative;margin:auto;max-width:1000px;height:100%;}
	#chat_output {position:absolute;top:0;left:0;padding:20px;width:100%;height:calc(100% - 100px);}
	#chat_input {position:absolute;bottom:0;left:0;padding:10px;width:100%;height:100px;border:1px solid #ccc;}
	</style> -->


</head>
<body>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a id="dev1" class="nav-link active" href="#">Type One Device</a>
      </li>
      <li class="nav-item">
        <a id="dev2" class="nav-link" href="#">Type Two Device</a>
      </li>
    </ul>
  </div>
  <div class="card-body" style="max-height: 4000px; overflow-y:scroll;">
  <center><p> <strong id="heading">Type One Device Data</strong> </p></center>

<div id="devdata">

</div>
 

</div>

</div>
<!--<script src="js/jquery.js" type="text/javascript"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="js/script.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript --> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>