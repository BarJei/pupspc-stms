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
              <th> Student # </th>
              <th> Student Name </th>
              <th class="info"> Log In </th>
              <th class="danger"> Log Out </th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="timelogsData in timelogs">
              <td> {{ timelogsData.studNo }} </td>
              <td>{{ timelogsData.lastName + ', ' + timelogsData.firstName + ' ' + timelogsData.middleName }}</td>
              <td>{{ timelogsData.logTime }} </td>
              <td>{{ timelogsData.logOut }} </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- row -->
</div>