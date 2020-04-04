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

  <div class="row">
    <div class="col">
      <div class="card mb-4">
        <div class="card-body">

          <div class="card-header">
            <section class="content">

             <?php foreach($tb_telecenter as $data){ ?>

              <div class="card-body">
                <div class="tab-content">
                <form class="form-horizontal" action="<?php echo site_url(). '/superadmin/input_keluarga/update'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                       <a href="<?php echo base_url('uploads/'. $data -> foto); ?>" data-lightbox="image-1" data-title="<?php echo $data -> title; ?>" ><img src="<?php echo base_url('uploads/'. $data -> foto); ?>" class="img-thumbnail" alt="Responsive image" ></a>
                     </div>
                     <br>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID</b></a>
                       <input type="text" class="form-control" name="id" placeholder="ID Desa" value="<?php echo $data->id ?>" readonly>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Title</b></a>
                       <input type="text" class="form-control" name="title"  value="<?php echo $data->title ?>">

                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Nama</b></a>
                       <input type="text" class="form-control" name="nama"  value="<?php echo $data->nama ?>">

                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Status</b></a>
                       <input type="text" class="form-control" name="status"  value="<?php echo $data->status ?>">

                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Status Hidup</b></a>
                       <input type="text" class="form-control" name="status_hidup"  value="<?php echo $data->status_hidup ?>">

                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Status Pernikahan</b></a>
                       <input type="text" class="form-control" name="status_pernikahan"  value="<?php echo $data->status_pernikahan ?>">

                       <div class="form-group">
                        <label for="exampleFormControlInput1">Parent ID</label>
                        <select name="parent_id" class="form-control">
                            <option value="0">HEADER</option>
                          <?php 
                            foreach ($keluarga as $key => $value) {
                              $selected = "";
                              if ($value->id == $data->parent_id) {
                                $selected = "selected";
                              }
                          ?>
                            <option value="<?php echo $value->id; ?> " <?php echo $selected; ?>><?php echo $value->title; ?></option>
                            
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
                              $selected = "";
                              if ("tag".$value->id == $data->tags) {
                                $selected = "selected";
                              }
                          ?>
                            <option value="<?php echo $value->id; ?> " <?php echo $selected; ?>><?php echo $value->title; ?></option>
                          <?php
                            }
                          ?>
                        </select>
                      </div>      
                       <br>
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>superadmin/input_keluarga/list">Batal</a>
                     </div>
                   </form>
                 <?php } ?>
               </section>
             </div>

           </div>
         </div>
       </div>
       </div>


