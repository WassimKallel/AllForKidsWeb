<?php 
    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;
    include_once CONTROLLERS . "/ForumManagement/ForumController.php";

    if(isset($_GET) && isset($_GET['action']) && isset($_GET['id'])) {

    }
    
    $reports = ForumController::getReports();
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
        Forum Reports
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
            <a onclick="unreport()" class="btn btn-success fleft">  Unreport </a>
            <a onclick="ban()" class="btn btn-danger fleft">  Ban </a>
            <table id="posts_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>Author</th>
                  <th>Content</th>
                </tr>
                </thead>
                <tbody>
        <?php 
            foreach($reports as $report) {  
            $post = ForumController::getReportedPost($report);
            $author = ForumController::getPostAuthor($post)->getFullName();
        ?>
          <tr id="<?= $report->id ?>">
                <td></td>
                <td><?= $author ?></td>
                <td><?= $post->content ?></td>
                  
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

 <script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
        <script>
        var table = null;
            $(function () {

              table = $('#posts_table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true,
                columnDefs: [ {
                    orderable: false,
                    className: 'select-checkbox',
                    targets:   0
                } ],
                select: {
                    style:    'multi',
                    selector: 'td:first-child'
                },
                order: [[ 1, 'asc' ]]
              })

            $('#posts_table tbody').on( 'click', 'tr', function () {
                $(this).toggleClass('selected');
            } );
            

            })
            function unreport() {
              var ids = [];
              var rows = table.rows( { selected: true } ).data().toArray();
              for(var row of rows) {
                ids.push(row.DT_RowId);
              }
              $.post('unreport', {ids : ids}).done(function(response){
                window.location.reload();
              });
            }

            function ban() {
              var ids = [];
              var rows = table.rows( { selected: true } ).data().toArray();
              for(var row of rows) {
                ids.push(row.DT_RowId);
              }
              $.post('ban', {ids : ids}).done(function(response){
                window.location.reload();
              });
            }
            
   </script>
  
</body>
</html>
