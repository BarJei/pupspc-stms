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

     // route for edit user page
     .when('/student/edit', {
      templateUrl: view_path + '/student-edit.php',
      controller: 'studentEditController'
    })

     .otherwise({
      templateUrl: view_path + '/index.php',
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
var base_url = loc_origin + '/pupspc_stms/';
var view_path = loc_origin + '/pupspc_stms/ng/views/sa/';

// tooltip fix 
app.directive('tooltip', function(){
  return {
   restrict: 'A',
   link: function(scope, element, attrs){
    $(element).hover(function(){
            // on mouseenter
            $(element).tooltip('show');
          }, function(){
            // on mouseleave
            $(element).tooltip('hide');
          });
  } 
};
});

app.directive('bsSwitch', function () {
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function (scope, element, attrs, ngModelCtrl) {
      $(element).bootstrapSwitch({
        onSwitchChange: function (event, state) {
          scope.$apply(function () {
            ngModelCtrl.$setViewValue(state);
          });
        }
      });

      var dereg = scope.$watch(function () {
        return ngModelCtrl.$modelValue;
      }, function (newVal) {
        $(element).bootstrapSwitch('state', !!newVal, true);
        dereg();
      });
    }
  };
});

$.fn.bootstrapSwitch.defaults.onText = '<i class="fa fa-fw fa-check"></i>';
$.fn.bootstrapSwitch.defaults.offText = '<i class="fa fa-fw fa-times"></i>';
$.fn.bootstrapSwitch.defaults.onColor = 'info';
$.fn.bootstrapSwitch.defaults.offColor = 'danger';
