<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-clock-o"></i> {{ header }} 
  </li>
  <li>
  <i class="fa fa-clock-o"></i> <a href="#timelogs-lab"> I.T. Laboratory </a>
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
        <th>Student Name</th>
        <th>Log In</th>
        <th>Log Out</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="timelogsData in timelogs">
        <td>{{ timelogsData.lastName + ', ' + timelogsData.firstName + ' ' + timelogsData.middleName }}</td>
        <td>{{ timelogsData.logTime }} </td>
        <td>{{ timelogsData.logOut }} </td>
      </tr>
    </tbody>
  </table>
</div>