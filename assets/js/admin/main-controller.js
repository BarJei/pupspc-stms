app.controller('mainController', function ($http, $scope, cfpLoadingBar) {
	cfpLoadingBar.start();

	console.log('hey');

	var assetsImages = base_url+'/assets/images/';
	$scope.source = assetsImages;

	cfpLoadingBar.set(0.5);

	$scope.header = 'Home';

	cfpLoadingBar.complete();
	
});