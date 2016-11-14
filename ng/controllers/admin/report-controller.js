app.controller('reportController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	getReportsData();

	var dateToday = new Date();
	$scope.dateToday = formatDate(dateToday);

	$scope.monthName = getMonthName();
	$scope.last7Days = getLast7Days();
	// console.log(getLast7Days());

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

				// TO DO LOGDATE TO DO
				arrLogTime.push({
					firstName: value.firstName,
					middleName: value.middleName,
					lastName: value.lastName,
					rfid: rfid,
					logDate: value.logDate,
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

		cfpLoadingBar.complete();

	});