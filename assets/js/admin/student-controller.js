app.controller('studentController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	$scope.header = 'Students';

	cfpLoadingBar.complete();
	
});

app.controller('studentCreateController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	// var assetsImages = base_url+'/assets/images/';
	// $scope.source = assetsImages;

	// selected staff type default
	$scope.selectedType = '';

	// staff type options
	$scope.userType = [{
		value: 0,
		label: 'N/A'
	}, {
		value: 1,
		label: 'L.M.G.'

	}, {
		value: 2,
		label: 'Student Assistant'
	}];

	$scope.header = 'Students';

	cfpLoadingBar.complete();


	// submit create staff
	$scope.submitAdd = function(newUser) {

		console.log(newUser);

		var userType = newUser.selectedType;

		if(typeof userType == 'undefined') {
			alert('Please specify role');
			return;
		}

		var params = {
			rfid: newUser.rfid,
			userType: userType,
			email: newUser.email,
			username: newUser.username,
			firstName: newUser.firstName,
			lastName: newUser.lastName,
			password: newUser.password,
			retype: newUser.retypePassword
		};

		console.log(params);
		// return;

		// http post method to submit form data
		$http({
          method  : 'POST',
          url     : base_url+'admin/admin/createStudent/',
          data    : $.param(params), 
          headers : { 'Content-Type': 'application/x-www-form-urlencoded' },

     }).success(function(data) {
     	console.log(data);

     	if(data == 201) {
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