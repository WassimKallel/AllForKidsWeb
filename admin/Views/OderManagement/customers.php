<?php 
    RoleController::checkRole(Roles::Administrator);
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;
    
    include_once CONTROLLERS . "/OrderManagement/OrderController.php";
    $users = OrderController::getAllCustomers();
    

?>

<?php include VIEWS . "/partial/header.php" ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include VIEWS . "/partial/topmenu.php" ?>

  <?php include VIEWS . "/partial/sidebar.php" ?>
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users 
      </h1>
      <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="users">Customers</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body pad">
            <a href="user?action=create" class="btn btn-success fright">  Add new user </a>

            <table id="posts_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>First Name</th>
                  <th>Last Name </th>
                  <th>Email</th>
                  <th>Is active</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach($users as $user) {  ?>
          <tr>
          
                  <td><?= $user->id ?></td>
                  <td><?= $user->first_name ?></td>
                  <td><?= $user->last_name  ?></td>
                  <td><?= $user->email  ?></td>
                  <td><?= $user->active == 0 ? "blocked" : "active"  ?></td>
                  <td><a class="btn btn-primary" href="<?= HOME_DIR . "user?action=edit&id=". $user->id ?>" > Edit </a> </td>
                </tr>
        <?php } ?>
              </tbody>

              </table>
            </div>


          </div>
          <!-- /.box -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  
<?php include VIEWS . "/partial/footer.php"; ?>
<?php include VIEWS . "/partial/rightpanel.php"; ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


        <script>
            $(function () {
              $('#posts_table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
              })
            })
   </script>
</body>
</html>
