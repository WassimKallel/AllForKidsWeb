<?php 
    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;
    include_once CONTROLLERS . "/ForumManagement/ForumController.php";
    
    $topics = ForumController::getTopics();
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
        Forum Topics
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forum</a></li>
        <li class="active">Topics </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">

            <!-- /.box-header -->
            <div class="box-body pad">
            <a href="post?action=create" class="btn btn-success fright">  Add new Topic </a>
            <table id="posts_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach($topics as $topic) {  ?>
          <tr>
                  <td><?= $topic->id ?></td>
                  <td><?= $topic->name ?></td>
                  <td><?= $topic->online == 0 ? "Not published" : "published" ?></td>
                  <td><a class="btn btn-primary" href="<?= HOME_DIR . "forum_topic?action=edit&id=". $topic->id ?>" > Edit </a> </td>
                  
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
