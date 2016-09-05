   <!-- Page Heading -->
   <ol class="breadcrumb">
    <li>
      <i class="fa fa-dashboard"></i><a href="<?php echo base_url('admin'); ?>"> Home</a>
    </li>
  </ol>
  <div class="row">
    <div class="col-lg-7">
     <h1 class="page-header">
      Admin <small></small>
    </h1>
  </div>
  <div class="col-lg-5">
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
<!-- page heading -->

<div class="row">

  <div class="col-lg-4">
    <a href="#">
      <div class="panel panel-primary">
       <div class="panel-heading">
        <div class="row">
         <div class="col-xs-3">
          <i class="fa fa-sign-in fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?php echo $online; ?></div>
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
 <a href="#">
  <div class="panel panel-green">
    <div class="panel-heading">
     <div class="row">
      <div class="col-xs-3">
       <i class="fa fa-spoon fa-5x"></i>
     </div>
     <div class="col-xs-9 text-right">
       <div class="huge"><?php echo $onlab; ?></div>
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
  <a href="#">
    <div class="panel panel-red">
     <div class="panel-heading">
      <div class="row">
       <div class="col-xs-3">
        <i class="fa fa-sign-out fa-5x"></i>
      </div>
      <div class="col-xs-9 text-right">
        <div class="huge"><?php echo $offline; ?></div>
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