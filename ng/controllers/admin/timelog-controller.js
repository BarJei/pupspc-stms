app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Guard';
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

app.controller('timelogLabController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'I.T. Lab.';
	$scope.dateSelectedLab = new Date();
	var paramsLab = {
		date: formatDate($scope.dateSelectedLab)
	};

	getTimelogsLab(paramsLab);

	// get staffs
	function getTimelogsLab(paramsLab) {

		// http get method
		$http.get(base_url + 'admin/timelog/viewTimelogsLab/', {
			params: paramsLab
		}).success(function(data) {
			console.log(data);
			$scope.timelogs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();

	$scope.showByDateLab = function(dateSelectedLab) { 

		var dateForDbLab = formatDate(dateSelectedLab);

		paramsLab = {
			date: dateForDbLab
		};

     	// console.log(dateForDb);
     	getTimelogsLab(paramsLab);
     }

 });