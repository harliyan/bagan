<!DOCTYPE html>
<html>
<?php $this->load->view('adminlte3/adminlte/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 <?php $this->load->view('adminlte3/adminlte/navbar'); ?>

 <?php $this->load->view('adminlte3/adminlte/'.$sidebar.''); ?>

  <!-- Content Wrapper. Contains page content -->

           <?php $this->load->view('adminlte3/'.$active_controller.'/'.$active_function); ?>
 
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('adminlte3/adminlte/footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('adminlte3/adminlte/js'); ?>

</body>
</html>
