app.controller('staffController', function ($http, $scope, cfpLoadingBar) {
	// start loading bar
	cfpLoadingBar.start();

	// set header of page
	$scope.header = 'Staffs';

	getAllStaffs();

	// get staffs
	function getAllStaffs() {

		// http get method
		$http.get(base_url + 'admin/admin/viewAllStaffs/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.staffs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	// complete loading bar
	cfpLoadingBar.complete();
});

app.controller('staffCreateController', function ($http, $scope, cfpLoadingBar) {
	// start loading bar
	cfpLoadingBar.start();

	// var assetsImages = base_url+'/assets/images/';
	// $scope.source = assetsImages;

	// set page header
	$scope.header = 'Staffs';

	// selected staff type default
	$scope.selectedType = '';

	// staff type options
	$scope.staffType = [{
		value: 1,
		label: 'Administrator'
	}, {
		value: 2,
		label: 'Guard'
	}];

	// complete loading bar
	cfpLoadingBar.complete();

	// submit create staff
	$scope.submitAdd = function() {

		var password = $scope.password,
		retypePassword = $scope.retypePassword;

		var userType = $scope.selectedType;

		if(password !== retypePassword) {
			alert('Passwords do not match, try again.');
			return;
		}

		if(userType == '') {
			alert('Please specify role');
			return;
		}

		var params = {
			userType: userType,
			email: $scope.email,
			username: $scope.username,
			firstName: $scope.firstName,
			lastName: $scope.lastName,
			password: $scope.password
		};

		// http post method to submit form data
		$http({
          method  : 'POST',
          url     : base_url+'admin/admin/createStaff/',
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
     		return;
     	}

     }).error(function(data) {
     	console.log(data);
     });

	}
	
});