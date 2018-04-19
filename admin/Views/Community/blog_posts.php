<?php 
    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;

    include_once MODELS . "/Blog/Post.php";
    include_once CONTROLLERS . "/BlogManagement/BlogController.php";

    $posts = Post::all();
    

?>

<?php include VIEWS . "/partial/header.php" ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include VIEWS . "/partial/topmenu.php" ?>

  <?php include VIEWS . "/partial/sidebar.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Post </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">

            <!-- /.box-header -->
            <div class="box-body pad">
            
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Number Of Comments</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach($posts as $post) {  ?>
          <tr>
                  <td><?= $post->title ?></td>
                  <td><?= BlogController::loadAuthor($post)->getFullName() ?></td>
                  <td><?= count(BlogController::getComments($post)) ?></td>
                  <td><a class="btn btn-primary" href="<?= HOME_DIR . "blog_post?action=edit&id=". $post->id ?>" > Edit </a> </td>
                  
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


</script>
</body>
</html>
