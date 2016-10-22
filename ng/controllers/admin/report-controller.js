app.controller('reportController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	getReportsData();
	
	function getReportsData() {

		// http get method
		$http.get(base_url + 'admin/reports/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.reports = data;	
		}).error(function(data) {
			console.log(data);
		});

	}

	console.log(getLast7Days());

	function getLast7Days () {
		var result = [];
		for (var i=0; i<7; i++) {
			var d = new Date();
			d.setDate(d.getDate() - i);
			result.push( formatDate(d) )
		}

		return(result.join(','));
	}

	cfpLoadingBar.complete();
	
});