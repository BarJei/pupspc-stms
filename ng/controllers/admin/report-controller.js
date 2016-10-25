app.controller('reportController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	getReportsData();

	var dateToday = new Date();
	$scope.dateToday = formatDate(dateToday);

	function getReportsData() {

		// http get method
		$http.get(base_url + 'admin/reports/', {
			params: {}
		}).success(function(data) {

			var reportData = data;
			var arrLogTime = [];

			reportData.forEach(function(value){
				var logTime = [];
				var logOut =[];
				var rfid = value.rfid;


				if(value.logTime == null) {
					logTime = [];
				}
				else if(value.logTime.length != 0) {					
					logTime = value.logTime.split(',');
				}

				if(value.logOut == null) {
					logOut = [];
				}
				else if(value.logOut.length != 0) {					
					logOut = value.logOut.split(',');
				}

				logTime.forEach(function(_logIn) {
					logTime.logTime = _logIn;
				});

				logOut.forEach(function(_logOut) {
					logOut.logOut = _logOut;
				});

				arrLogTime.push({
					firstName: value.firstName,
					middleName: value.middleName,
					lastName: value.lastName,
					rfid: rfid,
					logTime,
					logOut
				});

			});

				console.log(arrLogTime);

				$scope.reports = arrLogTime;	

			}).error(function(data) {
				console.log(data);
			});

		}

	// console.log(getLast7Days());

	cfpLoadingBar.complete();
	
});