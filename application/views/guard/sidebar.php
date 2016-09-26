    <body>
      <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('guard/guard'); ?>"> PUPSPC AMS | Guard </a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $firstName; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="<?php echo base_url('guard/guard/logOut'); ?>"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
                </li>
              </ul>
            </li>
          </ul>

          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
              <li class="active">
                <a href="#index"><i class="fa fa-fw fa-home"></i> Home </a>
              </li>
              <li>
                <a href="#students"><i class="fa fa-fw fa-users"></i> Students </a>
              </li>
            </ul>
          </div>

          <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

          <div class="container-fluid"> 

            <div id="main">

              <!-- angular route view -->
              <div ng-view>

              </div>

            </div>

          </div>

          <!-- /.container fluid -->
        </div>

        <!-- /.page wrapper -->
