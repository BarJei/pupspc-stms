app.controller('mainController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	console.log('hey');

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	cfpLoadingBar.set(0.5);

	$scope.header = 'Home';

	countOnlineStudents();
	countOfflineStudents();
	countStudentsLab();

	// get count of online students
	function countOnlineStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/countOnlineStudents/1', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.onlineCount = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	function countOfflineStudents() {

		// http get method
		$http.get(base_url + 'admin/admin/countOnlineStudents/0', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.offlineCount = data;
		}).error(function(data) {
			console.log(data);
		});
	}

	function countStudentsLab() {

		// http get method
		$http.get(base_url + 'admin/admin/countStudentsLab/', {
			params: {}
		}).success(function(data) {
			console.log(data);
			$scope.labCount = data;
		}).error(function(data) {
			console.log(data);
		});
	}


	cfpLoadingBar.complete();
	
});