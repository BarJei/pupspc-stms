app.controller('studentEditController', function ($http, $scope, cfpLoadingBar, $routeParams) {
	cfpLoadingBar.start();

	$scope.header = 'Students';

	$scope.userData = {
		userType: '',
		yearLevel: '',
		course: ''
	};

	getAllDropdownValues();

	// TODO -- VALIDATE USER

	function getAllDropdownValues() {

		// get courses
		$http.get(base_url + 'admin/admin/viewCourses/', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.courses = data;
		}).error(function(data) {
			console.log(data);
		});

		// get year levels
		$http.get(base_url + 'admin/admin/viewYearLevels/', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.yearLevels = data;
		}).error(function(data) {
			console.log(data);
		});

		// get stud types
		$http.get(base_url + 'admin/admin/viewStudTypes/', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.userTypes = data;
		}).error(function(data) {
			console.log(data);
		});

	}

	getStudentData();

	// get staffs
	function getStudentData() {
		$scope.state = {};
		var rfid = $routeParams.rfid;

		// http get method
		$http.get(base_url + 'sa/StudentAssistant/viewStudentData/', {
			params: {
				rfid: rfid
			}
		}).success(function(data) {
			var userData = data[0];
			$scope.userData = userData;

			if(userData.isValidated == 1) {
				console.log(userData.isValidated);
				$scope.state = {
					isValidated: true
				};
				$scope.isValidated = true;
			}
			else if(userData.isValidated == 2) {
				$scope.state = {
					isValidated: false
				};
				$scope.isValidated = false;
			}

			console.log($scope.state);

		}).error(function(data) {
			console.log(data);
		});
	}

	$scope.validateStudent = function() {

		var params = {
			rfid: $scope.userData.rfid
		};

		// console.log(params);

		// return;

		// http post method to submit form data
		$http({
			method  : 'POST',
			url     : base_url + 'sa/StudentAssistant/validateStudent/',
			data    : $.param(params), 
			headers : { 'Content-Type': 'application/x-www-form-urlencoded' },

		}).success(function(data) {
			// console.log(data);
			if(data == 1) {
				$scope.isValidated = true;
				alert('Student is now validated.');
			}

		}).error(function(data) {
			console.log(data);
		});

	}

	cfpLoadingBar.complete();
	
});