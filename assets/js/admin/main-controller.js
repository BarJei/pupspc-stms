app.controller('mainController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	console.log('hey');

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	$scope.header = 'Administrator';

	cfpLoadingBar.complete();
	
});