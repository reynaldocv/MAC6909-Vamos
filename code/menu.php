

<nav class="navbar navbar-fixed-top navbar-default bg-light">




  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="index2.php">
    <img src="img/logo.jpeg" width="100"  class="d-inline-block align-top" alt="">

  </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?avatar=<?php echo $_SESSION["usserData"]["id_usuario"] ?>">
  <dt><img src="<?php echo $avatar; ?>" width="25" class="img-circle" alt="Cinque Terre">
         <?php echo $_SESSION["Usuario"]["nombre"] ; ?></dt>

        <span class="sr-only">(current)</span></a> </li>




      </ul>

      <ul class="nav navbar-nav navbar-right hidden-sm">

       <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="10" class="glyphicon glyphicon-user notification-icon"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                  ...
              </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->



           <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="10" class="glyphicon glyphicon-envelope notification-icon"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                  ...
              </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->




            <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="10" class="glyphicon glyphicon-knight notification-icon"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                  ...
              </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->



           <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="10" class="glyphicon glyphicon-bell notification-icon"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                  ...
              </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->


              <form action="logout.php" class="navbar-form navbar-right" role="ja">
                <button type="submit" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-off"></span> Log out
                </button>
              </form>


 <li><a href="config.php">
  <span style="color:black">
    <i class="glyphicon glyphicon-cog"></i></span>

        </a> </li>


      </ul>
      <form class="navbar-form navbar-right" action="index.php">
      <div class="input-group">

    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
    </form>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
