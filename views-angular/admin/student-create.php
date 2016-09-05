   <!-- Page Heading -->
   <ol class="breadcrumb">
    <li>
      <i class="fa fa-users"></i><a href="admin#students"> {{ header }} </a>
    </li>
    <li class="active">
      <i class="fa fa-user-plus"></i> Create
    </li>
  </ol>

  <fieldset>

<div class="row form-group">
            <div class="col-md-3 primary-text">
              <label>
                Email
              </label>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control thin-font" name="email" id="email" ng-model="newUser.email" required>
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
                <input type="text" class="form-control thin-font" name="username" id="username" ng-model="newUser.username" required>
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
                <input type="text" class="form-control thin-font" name="firstName" id="firstName" ng-model="newUser.firstName" required>
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
                <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="newUser.lastName" required>
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
                <input type="password" class="form-control thin-font" name="password" id="password" ng-model="newUser.password" required>
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
                <input type="password" class="form-control thin-font" name="retypePassword" id="retypePassword" ng-model="newUser.retypePassword" required>
            </div>
        </div>
        <br>
        <!-- /.row -->

        <div class="row form-group">
            <div class="col-md-3 primary-text">
              <label>
                RFID
              </label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control thin-font" name="rfid" id="larfidstName" ng-model="newUser.rfid" required>
            </div>
        </div>
        <br>
        <!-- /.row -->

</fieldset>

  </form>