app.controller('studentController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Students';

	getAllStudents();

	// get staffs
	function getAllStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/viewAllStudents/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.students = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();
	
});

app.controller('studentOnlineController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Online Students';

	getAllStudents();

	// get staffs
	function getAllStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/viewAllOnlineStudents/1', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.students = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();
	
});

app.controller('studentOfflineController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Offline Students';

	getAllStudents();

	// get staffs
	function getAllStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/viewAllOnlineStudents/0', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.students = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();
	
});

app.controller('studentLabController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Students @ I.T. Lab.';

	getAllStudents();

	// get staffs
	function getAllStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/viewAllStudentsInLab/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.students = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();
	
});