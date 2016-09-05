app.controller('studentCreateController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	console.log('hey');

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	$scope.header = 'Students';

	cfpLoadingBar.complete();
	
});