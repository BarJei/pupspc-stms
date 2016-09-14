// Angular module
var app = angular.module('app', [
  'ngRoute', 
  'ngAnimate', 
  'angular-loading-bar', 
  'ngSanitize', 
  'mgcrea.ngStrap', 
  'datatables',
  'datatables.bootstrap'
  ]);

     // Routes
     app.config(function ($routeProvider) {
      $routeProvider

     // route for the index page
     .when('/index', {
      templateUrl: view_path + '/index.php',
      controller: 'mainController'
    })

     .when('/students', {
      templateUrl: view_path + '/students.php',
      controller: 'studentController'
    })

     .when('/students-online', {
      templateUrl: view_path + '/students-online.php',
      controller: 'studentOnlineController'
    })

     .when('/students-offline', {
      templateUrl: view_path + '/students-online.php',
      controller: 'studentOfflineController'
    })

     .when('/students-lab', {
      templateUrl: view_path + '/students-online.php',
      controller: 'studentLabController'
    })

     .when('/timelog', {
      templateUrl: view_path + '/timelog.php',
      controller: 'timelogController'
    })

     .otherwise({
      templateUrl: view_path+'/index.php',
      controller: 'mainController'
    });

   });

     // remove spinner
     app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
      cfpLoadingBarProvider.includeSpinner = false;
    }]);

// Global Variables

// add #index to default URL
var url = document.URL,
index = url.indexOf('#'),
hash = index !== -1 ? url.substring(index + 1) : '';
if (hash === '') {
 location.hash = '#index';
}

// to immediately collapse navbar after clicking on mobile
$(document).on('click', '.navbar-collapse.in', function (e) {
 if ($(e.target).is('a')) {
  $(this).collapse('hide');
}
});

var host = window.location.host;
var loc_origin = window.location.origin;
var base_url = loc_origin + '/pupspc_ams/';
var view_path = loc_origin + '/pupspc_ams/views-angular/guard/';
