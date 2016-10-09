<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-clock-o"></i> {{ header }} 
  </li>
  <!-- <li> -->
  <!-- <i class="fa fa-clock-o"></i> <a href="#timelog"> Time Log </a> -->
  <!-- </li> -->
</ol>

<div class="row">

  <div class="col-md-6">
   <h1 class="page-header">
     {{ header }} <small></small>
   </h1>
 </div>
 <div class="col-md-6">
   <div>
    <div class="panel-heading">
     <div class="row">
      <div class="col-xs-3">
       <i class=""></i>
     </div>
     <div class="col-xs-9 text-right">
      <div class="huge">
       <span id="clock">&nbsp</span>
     </div>
     <div><?php echo date("D, j M Y"); ?></div>
   </div>
 </div>
</div>
</div>
</div>
<!-- clock -->
</div>
<!-- row -->

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-table"></i> Table </h3>
      </div>
      <div class="panel-body">
        <table datatable="ng" class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Student #</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Course</th>
              <th>Year</th>
              <th>Validated</th>
              <th>Online</th>
              <th>@IT Lab</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="studentData in students">
              <td>{{ studentData.studNo }}</td>
              <td>{{ studentData.firstName }}</td>
              <td>{{ studentData.middleName == '' ? 'N/A' : studentData.middleName }}</td>
              <td>{{ studentData.lastName }}</td>
              <td>{{ studentData.course }}</td>
              <td>{{ studentData.yearLevel }}</td>
              <td ng-class="studentData.isValidated == 1 ? 'info' : 'danger' ">{{ studentData.isValidated == 1 ? 'Yes' : 'No' }}</td>
              <td ng-class="studentData.isOnline == 1 ? 'info' : 'danger' " >{{ studentData.isOnline == 1 ? 'Yes' : 'No' }}</td>
              <td ng-class="studentData.isAtLab == 1 ? 'success' : 'danger' " >{{ studentData.isAtLab == 1 ? 'Yes' : 'No' }}</td>
              <td>{{ userType = (studentData.userType == 10 ? 'N/A' : (studentData.userType == 1 ? 'L.M.G.' : 'S.A.')) }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- row -->
</div>