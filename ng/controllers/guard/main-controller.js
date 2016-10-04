app.controller('mainController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	// cfpLoadingBar.set(0.5);

	$scope.header = 'Home';

	getStudCounts();

	function getStudCounts() {
		countOnlineStudents();
		countOfflineStudents();
		countStudentsLab();
	}
	
	// get count of online students
	function countOnlineStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/countOnlineStudents/1', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.onlineCount = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	function countOfflineStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/countOnlineStudents/0', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.offlineCount = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	function countStudentsLab() {

		// http get method
		$http.get(base_url + 'admin/admin/countStudentsLab/', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.labCount = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();

	$scope.logTime = function(logData) {

		// console.log(logData);
		params = {
			rfid: logData.rfid
		};

		// http post method to submit form data
		$http({
			method  : 'POST',
			url     : base_url + 'guard/guard/logTime/',
			data    : $.param(params), 
			headers : { 'Content-Type': 'application/x-www-form-urlencoded' },

		}).success(function(data) {
			console.log(data);

			$scope.logData = {
				rfid: ''
			};
			
			if(data == 404) {
				$scope.notFound = true;
				// alert('No student data found! Please try again.');
				return;
			}

			getStudCounts();
			$scope.isRecorded = true;
			$scope.notFound = false;
			$scope.logResult = data[0];

		}).error(function(data) {
			console.log(data);
		});

	}
	
});