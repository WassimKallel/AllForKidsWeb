<?php 
    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;
    
    include_once CONTROLLERS . "/OrderManagement/OrderController.php";
    $orders = OrderController::getAllOrders();
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
        Orders
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Store</a></li>
        <li class="active">Orders </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">

            <!-- /.box-header -->
            <div class="box-body pad">

            <table id="posts_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Customer</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach($orders as $order) {  ?>
          <tr>
                  <td><?= $order->id ?></td>
                  <td><?= OrderController::loadCustomer($order->customer_id)->getFullName(); ?></td>
                  <td> status </td>
                  <td>
                      <a class="btn btn-primary" href="<?= HOME_DIR . "order?action=edit&id=". $order->id ?>" > Edit </a> 
                      <a class="btn btn-primary" href="<?= HOME_DIR . "order?action=edit&id=". $order->id ?>" > Print Order </a> 
                </td>
                  
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
