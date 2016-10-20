app.controller('timelogController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Time Logs';
	$scope.dateSelectedLab = new Date();
	var paramsLab = {
		date: formatDate($scope.dateSelectedLab)
	};

	getTimelogsLab(paramsLab);

	// get staffs
	function getTimelogsLab(paramsLab) {

		// http get method
		$http.get(base_url + 'admin/timelog/viewTimelogsLab', {
			params: paramsLab
		}).success(function(data) {
			console.log(data);
			$scope.timelogs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();

	// call function again based on new date
	$scope.showByDateLab = function(dateSelectedLab) { 

		var dateForDbLab = formatDate(dateSelectedLab);

		paramsLab = {
			date: dateForDbLab
		};

     	// console.log(dateForDb);
     	getTimelogsLab(paramsLab);
     }

 });