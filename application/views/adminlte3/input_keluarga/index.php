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
  height: 200%;
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
      <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info mb-4" class="glyphicon glyphicon-repeat">Tambah Keluarga</button>
    <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="card mt-4">
                <h2 class="text-center mt-4">Struktur Keluarga</h2>
                 <div id="tree1" class="mb-4" />
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


<!-- Modal 1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title text-center">Form Tambah Keluarga</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('superadmin/input_keluarga/tambah_keluarga')?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">nama</label>
              <textarea name="nama" class="form-control" id="exampleFormControlInput1"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Status</label>
              <textarea name="status" class="form-control" id="exampleFormControlInput1"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Status Hidup</label>
              <textarea name="status_hidup" class="form-control" id="exampleFormControlInput1"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Status Pernikahan</label>
              <textarea name="status_pernikahan" class="form-control" id="exampleFormControlInput1"></textarea>
            </div>
           <div class="form-group">
            <label for="exampleFormControlInput1">Parent ID</label>
            <select name="parent_id" class="form-control">
                <option value="0">HEADER</option>
              <?php 
                foreach ($keluarga as $key => $value) {
              ?>
                <option value="<?php echo $value->id; ?> "><?php echo $value->title; ?></option>
              <?php
                }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Group</label>
            <select name="tags" class="form-control">
                <option value="0">HEADER</option>
              <?php 
                foreach ($keluarga as $key => $value) {
              ?>
                <option value="<?php echo $value->id; ?> "><?php echo $value->title; ?></option>
              <?php
                }
               ?>
            </select>
          </div>                                       
          <label for="exampleFormControlInput1">Foto Tumbnail (Max 4MB)</label>
          
          <div class="col-sm">
           <!-- <label for="exampleFormControlInput1">Keterangan Tambahan</label> -->
           <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <!-- <label for="exampleFormControlFile1">Foto PC</label> -->
                <input type="file" name="foto" class="form-control-file" id="foto">
              </div>
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
            <!-- <p id="demo"></p> -->
            <!-- <button type="button" onclick="getLocation()">Try It</button> -->
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- END Modal Tambah -->