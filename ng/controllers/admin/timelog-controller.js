app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Guard';

	getTimelogs();

	// get staffs
	function getTimelogs() {

		// http get method
		$http.get(base_url + 'admin/timelog/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.timelogs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();

});

app.controller('timelogLabController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'I.T. Lab.';

	getTimelogs();

	// get staffs
	function getTimelogs() {

		// http get method
		$http.get(base_url + 'admin/timelog/viewTimelogsLab/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.timelogs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();

});