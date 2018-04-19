
<?php
    use Handlers\ErrorHandler;
    if (isset($_GET["error"])) {
        $error = ErrorHandler::getErrorCode($_GET["error"]);
    }else {
        $error = ErrorHandler::getErrorCode("404");
    }
    // All logic Goes here 
    // after this section only echos and includes are allowed
?>
<?php include VIEWS . "/partial/header.php"?>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include VIEWS . "/partial/topmenu.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <?= $error["Code"] ?>  Error Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">404 error</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow">  <?= $error["Code"] ?> </h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i>  <?= $error["Title"] ?> </h3>

          <p>
          <?= $error["Message"] ?> You may <a href=".">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

    <!-- /.content -->
  </div>
  <?php include VIEWS . "/partial/footer.php" ?>
  <!-- /.content-wrapper -->

<?php include VIEWS . "/partial/rightpanel.php" ?>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>