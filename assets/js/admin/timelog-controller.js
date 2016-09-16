app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Timelogs';

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