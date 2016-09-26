app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	cfpLoadingBar.set(0.5);

	$scope.header = 'Time Log';
	
	countOnlineStudents();

	// get count of online students
	function countOnlineStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/countOnlineStudents/1', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.onlineCount = data;
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

			$scope.isRecorded = true;
			$scope.notFound = false;
			$scope.logResult = data[0];
		}).error(function(data) {
			console.log(data);
		});

	}
	
});