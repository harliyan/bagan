<?php   //privilege
print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'admin';
$cetak = print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'username');
?>

<style>
 .garis_tepi1 {
   border: 2px solid skyblue;
 }
 .garis_tepi2 {
   border: 10px dotted blue;
 }
</style>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">


      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<!-- form input -->
<div class="row">
  <div class="col">
    <div class="card mb-4">

  <!-- End Page Header -->
<div class="card-header">
  <section class="content">

   <?php foreach($tb_telecenter as $data){ ?>

    <div class="card-body">
      <div class="tab-content">
        <form class="form-horizontal" action="<?php echo site_url(). '/superadmin/kelola_user/update'; ?>" role="form" method="post"> 
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID User</b></a>
              <input type="text" class="form-control" name="id_user" placeholder="ID Desa" value="<?php echo $data->id_user ?>" readonly>
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Username</b></a>
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data->username ?>">

               <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Password</b></a>
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data->password ?>">

              <br>
              <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
              <a class="btn btn-danger" href="<?php echo base_url() ?>superadmin/admin_user">Batal</a>
            </div>
          </form>
        <?php } ?>
      </section>
    </div>
    </div>
    </div>
    </div>
