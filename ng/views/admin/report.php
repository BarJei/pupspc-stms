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
						<td style="text-align: left;"><b>Time:</b> <u>Date here</u></td>
						<td style="text-align: right;"><b>Printed on:</b> <u>Date again here</u></td>
					</tr>
				</table>
				<table class="t" style="width:100%;">
					<thead>
						<tr>
							<td class="th">Date</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
							<td class="th" colspan="2">{data here}</td>
						</tr>
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
						<tr ng-repeat="reportData in reports"> 
							<td class="name">{{reportData.firstName + ' ' + reportData.lastName}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>

							<td class="time">{{reportData.logTime}}</td>
							<td class="time">{{reportData.logOut}}</td>
						</tr>
					</tbody>
				</table>
			</center>
			<p style="text-align: right; font-size: 12px;"><i><b>Certified True Copy</b></i></p>
			<footer>
				<center>
					<p><b>Verified by:</b> <u>pangalan here.</u></p>
					<p style="position: fixed; bottom: 2px; left: 50%; font-size: 10px;"><i>Page number</i></p>
				</center>
			</footer>
		</div>
	<!-- 	</body>
		</html> -->