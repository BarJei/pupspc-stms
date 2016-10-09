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

app.controller('studentCreateController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	// var assetsImages = base_url+'/assets/images/';
	// $scope.source = assetsImages;

	// selected user type default
	$scope.newUser = {
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

	$scope.header = 'Create';

	cfpLoadingBar.complete();


	// submit create staff
	$scope.submitAdd = function(newUser) {

		console.log(newUser);

		var userType = newUser.userType,
		yearLevel = newUser.yearLevel;

		if(yearLevel == '') {
			alert('Please specify year level');
			return;
		}

		if(userType == '') {
			alert('Please specify role');
			return;
		}

		var params = {
			studNo: newUser.studNo,
			userType: userType,
			firstName: newUser.firstName,
			middleName: newUser.middleName,
			lastName: newUser.lastName,
			course: newUser.course,
			yearLevel: yearLevel,
			rfid: newUser.rfid,
		};

		console.log(params);
		// return;

		// http post method to submit form data
		$http({
			method  : 'POST',
			url     : base_url + 'admin/admin/createStudent/',
			data    : $.param(params), 
			headers : { 'Content-Type': 'application/x-www-form-urlencoded' },

		}).success(function(data) {
			console.log(data);

			if(data == 1) {
				alert('Account successfully created!');
				window.location.reload();
			}
			else {
				alert('Error creating account! Please try again.');
			}

		}).error(function(data) {
			console.log(data);
		});

	}

	
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