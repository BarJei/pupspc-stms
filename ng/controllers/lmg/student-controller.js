app.controller('studentController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Students @ Laboratory';

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