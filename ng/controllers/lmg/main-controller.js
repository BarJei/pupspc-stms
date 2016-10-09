app.controller('mainController', function ($http, $scope, cfpLoadingBar) {
  cfpLoadingBar.start();

  // cfpLoadingBar.set(0.5);

  $scope.header = 'Home';

  getStudCounts();

  function getStudCounts() {
    countStudentsLab();
    // online
    countStudents(1);
    // offline
    countStudents(0);
  }

  function countStudentsLab() {

    // http get method
    $http.get(base_url + 'admin/admin/countStudentsLab/', {
      params: {}
    }).success(function(data) {
      // console.log(data);
      $scope.labCount = data;
    }).error(function(data) {
      console.log(data);
    });
  }

  function countStudents(isOnline) {

    // http get method
    $http.get(base_url + 'admin/admin/countOnlineStudents/' + isOnline, {
      params: {}
    }).success(function(data) {
      // console.log(data);
      if(isOnline == 1) {
        $scope.onlineCount = data; 
      }
      else if(isOnline == 0){
        $scope.offlineCount = data; 
      }
    }).error(function(data) {
      console.log(data);
    });
  }

  cfpLoadingBar.complete();

  $scope.logTime = function(logData) {

    // console.log(logData);
    params = {
      rfid: logData.rfid
    };

    // http post method to submit form data
    $http({
      method  : 'POST',
      url     : base_url + 'lmg/StudentLab/logTime/',
      data    : $.param(params), 
      headers : { 'Content-Type': 'application/x-www-form-urlencoded' },

    }).success(function(data) {
      console.log(data);

      var studentData= data[0];

      $scope.isScanned = true;

      $scope.logData = {
        rfid: ''
      };
      
      if(data == 404) {
        $scope.notFound = true;
        // alert('No student data found! Please try again.');
        return;
      }

      getStudCounts();
      $scope.isRecorded = true;
      $scope.notFound = false;
      $scope.logResult = studentData;

      if(studentData.isAtLab == 1) {
        $scope.alertClass = 'alert-success';
        $scope.logMessage = {
          header: 'LOGGED IN.',
          body: 'Time in recorded.'
        };
      }

      else if(studentData.isAtLab == 0) {
        $scope.alertClass = 'alert-danger';
        $scope.logMessage = {
          header: 'LOGGED OUT.',
          body: 'Time out recorded.'
        };
      }


    }).error(function(data) {
      console.log(data);
    });

  }
  
});