<?php
date_default_timezone_set("Asia/Manila");
?>
<ol class="breadcrumb">
  <li>
    <i class="fa fa-users"></i><a href="#view-students"> {{ header }} </a>
  </li>
  <li class="active">
    <i class="fa fa-user-plus"></i> Create
  </li>
</ol>

<div class="row">
  <div class="col-md-6">
   <h1 class="page-header">
    {{ userData.firstName + ' ' + userData.middleName + ' ' + userData.lastName }} <small></small>
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

<!-- <form ng-submit="submitUpdate(userData)"> -->
  <fieldset>

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label for="validated">
          Validated
        </label>
      </div>
      <div class="col-md-6">
        <input type="checkbox" name="validated" id="validated" 
        ng-model="state.isValidated" 
        ng-change="validateStudent()" 
        switch-active="{{isValidated}}"
        switch-readonly="{{isValidated}}"
        bs-switch>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Student No.
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="email" id="email" 
        ng-model="userData.studNo" 
        placeholder="2011-00150-SP-0" 
        required autofocus readonly>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          First Name
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="firstName" id="firstName" ng-model="userData.firstName" required readonly>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Middle Name
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="userData.middleName" readonly>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Last Name
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="userData.lastName" required readonly>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Course
        </label>
      </div>
      <div class="col-md-9">
        <button type="button" 
        class="btn btn-default" 
        ng-model="userData.course" 
        data-html="1"
        data-toggle="true"
        bs-options="obj.value as obj.label for obj in courses"
        disabled 
        bs-select>Action <span class="caret"></span></button>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Year Level
        </label>
      </div>
      <div class="col-md-9">
        <button type="button" 
        class="btn btn-default" 
        ng-model="userData.yearLevel" 
        data-html="1"
        data-toggle="true"
        bs-options="obj.value as obj.label for obj in yearLevels"
        disabled 
        bs-select>Action <span class="caret"></span></button>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label for="viewAs" class="primary-text">
          Student Role
        </label>
      </div>
      <div class="col-md-9">
        <button type="button" 
        class="btn btn-default" 
        ng-model="userData.userType" 
        data-html="1"
        data-toggle="true"
        bs-options="obj.value as obj.label for obj in userTypes"
        disabled 
        bs-select>Action <span class="caret"></span></button>
      </div>
    </div>
    <br/>
    <!-- /.row -->

  </fieldset>
<!-- </form> -->
