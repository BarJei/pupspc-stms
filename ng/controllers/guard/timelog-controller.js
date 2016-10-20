app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Time Logs';
	$scope.dateSelected = new Date();

	var params = {
		date: formatDate($scope.dateSelected)
	};

	getTimelogs(params);

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

	cfpLoadingBar.complete();

	$scope.showByDate = function(dateSelected) { 

		var dateForDb = formatDate(dateSelected);

		params = {
			date: dateForDb
		};

     	// console.log(dateForDb);
     	getTimelogs(params);
     }

 });