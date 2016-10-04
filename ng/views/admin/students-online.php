<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-home"></i> <a href="#index"> Home </a> 
  </li>
  <li class="active">
    <i class="fa fa-clock-o"></i> Time Log
  </li>
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

<div>
  <table datatable="ng" class="table table-hover" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Student #</th>
        <th>Student Name</th>
        <th>Course</th>
        <th>Year</th>
        <th>Validated</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="studentData in students">
        <td>{{ studentData.studNo }}</td>
        <td>{{ studentData.lastName + ', ' + studentData.firstName + ' ' + studentData.middleName }}</td>
        <td>{{ studentData.course }}</td>
        <td>{{ studentData.yearLevel }}</td>
        <td>{{ studentData.isValidated == 1 ? 'Yes' : 'No' }}</td>
        <td>{{ userType = (studentData.userType == 10 ? 'N/A' : (studentData.userType == 1 ? 'L.M.G.' : 'S.A.')) }}</td>
      </tr>
    </tbody>
  </table>
</div>