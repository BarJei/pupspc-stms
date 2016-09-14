<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-user"></i> {{ header }}     
  </li>
  <li>
    <i class="fa fa-user-plus"></i> <a href="#create-staff"> Create </a>
  </li>
  </ol>

  <!-- row -->
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
<!-- ./row -->

<div>
    <table datatable="ng" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="staffData in staffs">
                <td>{{ staffData.firstName }}</td>
                <td>{{ staffData.lastName }}</td>
                <td>{{ staffData.email }}</td>
                <td>{{ staffData.username }}</td>
                <td>{{ staffData.isAdmin == 1 ? 'Admin' : 'Guard' }}</td>
            </tr>
        </tbody>
    </table>
</div>