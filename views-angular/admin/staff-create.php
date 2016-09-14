<?php
date_default_timezone_set("Asia/Manila");
?> 
   <ol class="breadcrumb">
    <li>
      <i class="fa fa-user"></i><a href="admin#view-staffs"> {{ header }} </a>
    </li>
    <li class="active">
      <i class="fa fa-user-plus"></i> Create
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

  <form ng-submit="submitAdd()">
  <fieldset>

    <div class="row form-group">
            <div class="col-md-3 primary-text">
              <label>
                Email
              </label>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control thin-font" name="email" id="email" ng-model="email" required autofocus="">
            </div>
        </div>
        <br>
        <!-- /.row -->

        <div class="row form-group">
            <div class="col-md-3 primary-text">
              <label>
                Username
              </label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control thin-font" name="username" id="username" ng-model="username" required>
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
                <input type="text" class="form-control thin-font" name="firstName" id="firstName" ng-model="firstName" required>
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
                <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="lastName" required>
            </div>
        </div>
        <br>
        <!-- /.row -->

        <div class="row form-group">
            <div class="col-md-3 primary-text">
              <label>
                Password
              </label>
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control thin-font" name="password" id="password" ng-model="password" required>
            </div>
        </div>
        <br>
        <!-- /.row -->

        <div class="row form-group">
            <div class="col-md-3 primary-text">
              <label>
                Retype Password
              </label>
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control thin-font" name="retypePassword" id="retypePassword" ng-model="retypePassword" required>
            </div>
        </div>
        <br>
        <!-- /.row -->

        <div class="row form-group">
            <div class="col-md-3 primary-text">
              <label for="viewAs" class="primary-text">
                Staff Role
              </label>
            </div>
            <div class="col-md-6">
              <button type="button" 
              class="form-control secondary-text" 
              ng-model="selectedType" 
              data-html="1"
              data-toggle="true"
              bs-options="obj.value as obj.label for obj in staffType"
              placeholder="Select"
              bs-select>Action <span class="caret"></span></button>
            </div>
          </div>
          <br/>
          <!-- /.row -->

        <div class="row form-group">
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary btn-sm" ng-click="showAdminType(adminType)" value="Create">
            </div>        
        </div>
        <!-- /.row -->

        </fieldset>
  </form>
