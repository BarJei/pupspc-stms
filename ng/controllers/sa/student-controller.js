app.controller('studentEditController', function ($http, $scope, cfpLoadingBar, $routeParams) {
	cfpLoadingBar.start();

	$scope.header = 'Students';

	$scope.userData = {
		userType: '',
		yearLevel: '',
		course: ''
	};

	getAllDropdownValues();

	function getAllDropdownValues() {

		// get courses
		$http.get(base_url + 'admin/admin/viewCourses/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.courses = data;
		}).error(function(data) {
			console.log(data);
		});

		// get year levels
		$http.get(base_url + 'admin/admin/viewYearLevels/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.yearLevels = data;
		}).error(function(data) {
			console.log(data);
		});

		// get stud types
		$http.get(base_url + 'admin/admin/viewStudTypes/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.userTypes = data;
		}).error(function(data) {
			console.log(data);
		});

	}


	getStudentData();

	// get staffs
	function getStudentData() {

		var rfid = $routeParams.rfid;

		// http get method
		$http.get(base_url + 'sa/StudentAssistant/viewStudentData/', {
			params: { 
				rfid: rfid
			}
		}).success(function(data) {
			console.log(data[0]);
			$scope.userData = data[0];
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();
	
});