<!-- <!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
	<style type="text/css">
		.h1 {
			font-size: 20px;
			text-align: center;
			font-weight: bold;
		}
		.h2 {
			font-size: 18px;
			text-align: center;
		}
		.t {			
			border: 3px solid black;
			border-collapse: collapse;
			text-align: center;
		}
		.th {
			border: 2px solid black;
			border-collapse: collapse;
			width: 10%;
			text-align: center;
			font-weight: bold;
		}
		.th2 {			
			border: 2px solid black;
			border-collapse: collapse;
			width: 5%;
			font-weight: bold;
		}
		.time {			
			border: 1px solid black;
			border-collapse: collapse;
			width: 5%;
			font-weight: normal;
		}
		.name {
			border: 1px solid black;
			border-collapse: collapse;
			width: 15%;
			text-align: left;
			font-weight: normal;
		}
	</style>
</head>
<body> -->

	<div id="reports">
		<center>
			<table>
				<tr>
					<td><img src="../assets/images/PUP.png" width="100px;" height="100px;"/></td>
					<td>
						<p class="h1">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES
							<br />San Pedro Campus <br />National Hi-Way, United Bayanihan, San Pedro Laguna</p>
						</td>
						<td><img src="../assets/images/EXPLICIT.jpg" width="100px;" height="100px;"/></td>
					</tr>
				</table>
				<div class="h2">
					<b>REPORTS</b>
					<br />COMPUTER LABORATORY USAGE FORM
					<br />Time Logs for the Month of <i>MONTH HERE</i>
				</div><br />

				<table style="width:100%;">
					<tr>
						<td style="text-align: left;"><b>Time:</b> <u id="clock">&nbsp</u></td>
						<td style="text-align: right;"><b>Printed on:</b> <u>{{dateToday}}</u></td>
					</tr>
				</table>
				<table class="t" style="width:100%;">
					<thead>
						<!-- <tr>
							<td class="th">Date</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
						</tr> -->
						<tr>
							<td class="th"><b>Name</b></td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>

							<td class="th2">Time In</td>
							<td class="th2">Time Out</td>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="reportData in reports track by $index"> 
							<td class="name">{{reportData.lastName + ', ' + reportData.firstName}}</td>

							<td class="time" >{{reportData.logTime[0]}}</td>
							<td class="time" >{{reportData.logOut[0]}}</td>

							<td class="time" >{{reportData.logTime[1]}}</td>
							<td class="time" >{{reportData.logOut[1]}}</td>

							<td class="time" >{{reportData.logTime[2]}}</td>
							<td class="time" >{{reportData.logOut[2]}}</td>

							<td class="time" >{{reportData.logTime[3]}}</td>
							<td class="time" >{{reportData.logOut[3]}}</td>

							<td class="time" >{{reportData.logTime[4]}}</td>
							<td class="time" >{{reportData.logOut[4]}}</td>

							<td class="time" >{{reportData.logTime[5]}}</td>
							<td class="time" >{{reportData.logOut[5]}}</td>

							<td class="time" >{{reportData.logTime[6]}}</td>
							<td class="time" >{{reportData.logOut[6]}}</td>

						</tr>
					</tbody>
				</table>
			</center>
			<p style="text-align: right; font-size: 12px;"><i><b>Certified True Copy</b></i></p>
			<footer>
				<center>
					<p><b>Verified by:</b> <u>Prof. Joanne F. Antonio</u></p>
					<!-- <p style="position: fixed; bottom: 2px; left: 50%; font-size: 10px;"><i>Page number</i></p> -->
				</center>
			</footer>
		</div>
	<!-- 	</body>
		</html> -->