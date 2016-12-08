<html>
<head>

<?php

exec("mode COM4 BAUD=9600 PARITY=N data=8 stop=1 xon=off");

$usb_comPort = "COM4";


	switch($_POST)
	{
		case isset($_POST['submitOn']):
			exec("ECHO 1 > $usb_comPort"); 
			break;
		case isset($_POST['submitOff']):
			exec("ECHO 2 > $usb_comPort"); 
			break;
		case isset($_POST['submitOn1']):
			exec("ECHO 3 > $usb_comPort"); 
			break;
		case isset($_POST['submitOff1']):
			exec("ECHO 4 > $usb_comPort"); 
			break;
		case isset($_POST['submitOn2']):
			exec("ECHO 5 > $usb_comPort"); 
			break;
		case isset($_POST['submitOff2']):
			exec("ECHO 6 > $usb_comPort"); 
			break;
		case isset($_POST['submitOn3']):
			exec("ECHO 7 > $usb_comPort"); 
			break;
		case isset($_POST['submitOff3']):
			exec("ECHO  8 > $usb_comPort");
			break;
		case isset($_POST['submitOn4']):
			exec("ECHO 9 > $usb_comPort"); 
			break;
		case isset($_POST['submitOff4']):
			exec("ECHO  0 > $usb_comPort");
			break;

		case isset($_POST['allon']):
			exec("ECHO  1,3,5,7,9 > $usb_comPort"); 
			break;
		case isset($_POST['alloff']):
			exec("ECHO  2,4,6,8,0 > $usb_comPort"); 
			break;

	}

?>
</head>

<body ng-app="tallerApp" ng-controller="stylerMainCrtl" >
<h1>{{hi}}</h1>


<CENTER><h1>LEDS</h1></CENTER>

<CENTER>	<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type='submit' ng-click="setButton('Led 1', 'On')" name='submitOn' value='LED 1 ENCENDER'>
		<input type='submit' ng-click="setButton('Led 1', 'Off')" name='submitOff' value='LED 1 APAGAR'>
		<br><br>
		<input type='submit' ng-click="setButton('Led 2', 'On')" name='submitOn1'  value='LED 2 ENCENDER'>
		<input type='submit' ng-click="setButton('Led 2', 'Off')" name='submitOff1' value='LED 2 APAGAR'>
		<br><br>
		<input type='submit' ng-click="setButton('Led 3', 'On')" name='submitOn2'  value='LED 3 ENCENDER'>
		<input type='submit' ng-click="setButton('Led 3', 'Off')" name='submitOff2'  value='LED 3 APAGAR'>
		<br><br>
		<input type='submit' ng-click="setButton('Led 4', 'On')" name='submitOn3'  value='LED 4 ENCENDER'>
		<input type='submit' ng-click="setButton('Led 4', 'Off')" name='submitOff3'  value='LED 4 APAGAR'>
		<br><br>
		<input type='submit' ng-click="setButton('Led 5', 'On')" name='submitOn4'  value='LED 5 ENCENDER'>
		<input type='submit' ng-click="setButton('Led 5', 'Off')" name='submitOff4'  value='LED 5 APAGAR'>


		<br><br>
		<input type='submit' name='allon' value='ENCENDER TODO'>
		<input type='submit' name='alloff' value='APAGAR TODO'>
		
	</form></CENTER>


	<table  border="1">

	    <th>
                <td>1</td>
                <td>2</td>
         </th>
        <tr ng-repeat="report in reportList">
            <td>{{report.label}}</td>
            <td>{{report.state}}</td>
            <td>{{report.time | date:'MM/dd/yyyy  h:mma'}}</td>
        </tr>
    </table>
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="bower_components/ngstorage/ngStorage.min.js"></script>
<script src="bower_components/angular-animate/angular-animate.js"></script>
<script src="bower_components/angular-cookies/angular-cookies.js"></script>
<script src="bower_components/angular-resource/angular-resource.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
<script src="bower_components/angular-touch/angular-touch.js"></script>
<script src="arduino.controller.js"></script>
</body>
</html>