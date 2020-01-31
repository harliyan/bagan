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

 html, body{
  width: 100%;
  height: 100%;
  padding: 0;
  margin:0;
  overflow: hidden;
  font-family: Helvetica;
}
#tree{
  width:100%;
  height:100%;
}
</style>


<?php if($this->session->flashdata('success')){ ?>  
 <div class="alert alert-success">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
 </div>  
<?php } else if($this->session->flashdata('error')){ ?>  
 <div class="alert alert-danger">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
 </div>  
<?php } else if($this->session->flashdata('warning')){ ?>  
 <div class="alert alert-warning">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
 </div>  
<?php } else if($this->session->flashdata('info')){ ?>  
 <div class="alert alert-info">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
 </div>  
<?php } ?>  

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Input Anggota Keluarga</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input Anggota Keluarga</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="card mt-4">
                <h2 class="text-center mt-4">Struktur Keluarga</h2>
                 <div id="tree" class="mb-4" />
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
               
            </div>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
   </div>
 </div>
</div>
</div>
<!-- END Modal Tambah -->