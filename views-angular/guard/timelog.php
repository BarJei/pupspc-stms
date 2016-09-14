<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li>
    <i class="fa fa-user"></i> <a href="#students"> Students </a> 
  </li>
  <li class="active">
    <i class="fa fa-clock-o"></i> {{ header }}
  </li>
</ol>

<div class="row">

  <div class="col-md-6">
   <h1 class="page-header">
    Time Log <small></small>
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

  <div class="col-lg-4">
    <div class="panel panel-primary">
     <div class="panel-heading">
      <div class="row">
       <div class="col-xs-3">
        <i class="fa fa-sign-in fa-5x"></i>
      </div>
      <div class="col-xs-9 text-right">
        <div class="huge"> 150 </div>
        <div> Online Students </div>
      </div>
    </div>
  </div>
  <div class="panel-footer" style="color:#337ab7;">
    <span class="pull-left"> Swipe your RFID</span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
  </div>
</div>
</div>

<div class="col-lg-3">
  <form ng-submit="logTime(logData)">
    <fieldset>
      <label for="rfid"> RFID </label>
      <input type="text" class="form-control" id="rfid" ng-model="logData.rfid" autofocus required/>
      <input type="submit" class="display-none"/>
    </fieldset>
  </form>
</div>

<div class="col-lg-5">
  <!-- good -->
  <div class="alert alert-info alert-dismissable" ng-if="isRecorded">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="fa fa-info-circle"></i>  
    <strong> Success. </strong> 
    Time recorded into database.
  </div>
  <!-- error -->
  <div class="alert alert-danger alert-dismissable" ng-if="notFound">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="fa fa-warning"></i>  
    <strong> Error 404. </strong> 
    No student data found! Please try again.
  </div>

  <div ng-if="isRecorded">
  <h1> Student Details </h1>
  <h3> {{ logResult.lastName + ', ' + logResult.firstName + ' ' + logResult.middleName }} </h3>
  <h3> Course: {{ logResult.course }} </h3>
  </div>

  <fieldset>

  </fieldset>

</div>

</div>