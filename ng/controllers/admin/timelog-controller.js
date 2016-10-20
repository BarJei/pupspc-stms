app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Guard';

	getTimelogs();

	var params = {};

	// get staffs
	function getTimelogs(params) {

		// http get method
		$http.get(base_url + 'admin/timelog/', {
			params: params
		}).success(function(data) {
			console.log(data);
			$scope.timelogs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	$scope.dateScheduled = new Date();

	$scope.showByDate = function(dateSelected) { 

		var dateForDb = formatDate(dateSelected);

		params = {
			date: dateForDb
		};

     	// console.log(dateForDb);
     	getTimelogs(params);
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