app.controller('staffController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	$scope.header = 'Staffs';

	getAllStaffs();

	function getAllStaffs() {
		$http.get(base_url + 'admin/admin/viewAllStaffs/', {
			params: {}
		}).success(function(data) {
			// console.log(data);
			$scope.allStaffs = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	cfpLoadingBar.complete();
});

app.controller('staffCreateController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	$scope.header = 'Staffs';

	$scope.selectedType = '';

	$scope.staffType = [{
		value: 0,
		label: 'Guard'
	}, {
		value: 1,
		label: 'Administrator'
	}];

	cfpLoadingBar.complete();

	$scope.submitAdd = function() {

		var params = {
			isAdmin: $scope.selectedType,
			email: $scope.email,
			username: $scope.username,
			firstName: $scope.firstName,
			lastName: $scope.lastName,
			password: $scope.password
		};

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