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

     .when('/create-staff', {
      templateUrl: view_path + '/staff-create.php',
      controller: 'staffCreateController'
    })

     .when('/view-staffs', {
      templateUrl: view_path + '/staffs.php',
      controller: 'staffController'
    })

     .when('/create-student', {
      templateUrl: view_path + '/student-create.php',
      controller: 'studentCreateController'
    })

     .when('/view-students', {
      templateUrl: view_path + '/students.php',
      controller: 'studentController'
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
var view_path = loc_origin + '/pupspc_ams/views-angular/admin/';
