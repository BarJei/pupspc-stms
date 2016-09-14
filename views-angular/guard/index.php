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

  <div class="col-lg-4">
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
     <span class="pull-left">Click to view</span>
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
       <i class="fa fa-spoon fa-5x"></i>
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