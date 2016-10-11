<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-home"></i> {{ header }} 
  </li>
</ol>

<div class="row">

  <div class="col-md-6">
   <h1 class="page-header">
    Guard <small></small>
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

  <div class="col-lg-4 blink_me">
    <a href="#students-online">
      <div class="panel panel-primary">
       <div class="panel-heading">
        <div class="row">
         <div class="col-xs-3">
          <i class="fa fa-sign-in fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"> {{ onlineCount }} </div>
          <div> Online Students </div>
        </div>
      </div>
    </div>
    <div class="panel-footer" style="color:#337ab7;">
      <span class="pull-left"> Scan your R.F.I.D. Card... </span>
      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
      <div class="clearfix"></div>
    </div>
  </div>
</a>
</div>
<!-- div online users -->

<div class="col-lg-4">
 <a href="#students-lab">
  <div class="panel panel-green">
    <div class="panel-heading">
     <div class="row">
      <div class="col-xs-3">
       <i class="fa fa-desktop fa-5x"></i>
     </div>
     <div class="col-xs-9 text-right">
       <div class="huge"> {{ labCount }} </div>
       <div> On Lab. Students </div>
     </div>
   </div>
 </div>
 <div class="panel-footer" style="color:#5cb85c;">
  <span class="pull-left">Click to view</span>
  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
  <div class="clearfix"></div>
</div>
</div>
</a>
</div>
<!-- div break users -->

<div class="col-lg-4">
  <a href="#students-offline">
    <div class="panel panel-red">
     <div class="panel-heading">
      <div class="row">
       <div class="col-xs-3">
        <i class="fa fa-sign-out fa-5x"></i>
      </div>
      <div class="col-xs-9 text-right">
        <div class="huge"> {{ offlineCount }} </div>
        <div> Offline Students </div>
      </div>
    </div>
  </div>
  <div class="panel-footer" style="color:#d9534f;">
   <span class="pull-left">Click to view</span>
   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
   <div class="clearfix"></div>
 </div>
</div>
</a>
</div>
<!-- div offline users -->

</div>
<!-- row -->

<div class="col-lg-3">
  <form ng-submit="logTime(logData)" accept-charset="utf-8">
    <fieldset>
      <input type="text" id="rfid2" ng-model="logData.rfid" autofocus required autocomplete="off"/>
      <input type="submit" class="display-none"/>
    </fieldset>
  </form>
</div>

<div class="row" ng-if="isScanned">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-table"></i> Message </h3>
      </div>
      <div class="panel-body">

  <!-- <div class="col-lg-4 blink_me">
    <div class="panel panel-primary">
     <div class="panel-heading">
      <div class="row">
       <div class="col-xs-3">
        <i class="fa fa-sign-in fa-5x"></i>
      </div>
      <div class="col-xs-9 text-right">
        <div class="huge"> {{ onlineCount }} </div>
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
</div> -->

<div class="col-lg-12">
  <!-- good -->
  <div class="alert alert-dismissable" ng-class="alertClass" ng-if="isRecorded">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="fa fa-info-circle"></i>  
    <strong> {{ logMessage.header }} </strong> 
    {{ logMessage.body }}
  </div>
  <!-- error -->
  <div class="alert alert-danger alert-dismissable" ng-if="notFound">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="fa fa-warning"></i>  
    <strong> ERROR! </strong> 
    No student data found, Please try again.
  </div>

  <div ng-if="isRecorded">

    <table class="table">

      <thead> 
        <h3> Student Details </h3>
      </thead>
      <tbody>
        <tr>
          <th class="th-rfid-scanned"> Name </th>
          <td> 
            {{ logResult.lastName + ', ' + logResult.firstName + ' ' + logResult.middleName }}
          </td>
        </tr>

        <tr>
          <th> Course </th>
          <td>
            {{ logResult.course }}
          </td>
        </tr>

        <tr>
          <th> Year </th>
          <td> 
            {{ logResult.yearLevel }}
          </td>
        </tr>
      </tbody>

    </table>
    
  </div>
</div>

</div>
</div>
</div>
<!-- row -->
</div>
