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
                  <form class="form-horizontal" action="<?php echo site_url(). '/superadmin/input_foto/update'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                       <a href="<?php echo base_url('uploads/'. $data -> image_name); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('uploads/'. $data -> image_name); ?>" class="img-thumbnail" alt="Responsive image" ></a>
                     </div>
                     <br>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Foto</b></a>
                       <input type="text" class="form-control" name="id" placeholder="ID Desa" value="<?php echo $data->id ?>" readonly>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Judul Foto</b></a>
                       <input type="text" class="form-control" name="judul" placeholder="ID Desa" value="<?php echo $data->judul ?>">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Caption Foto</b></a>
                       <textarea class="form-control" name="caption"  cols="2" rows="10" placeholder="Enter ..."><?php echo $data->caption ?></textarea>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Image Name</b></a>
                       <input type="text" class="form-control" name="image_name"  value="<?php echo $data->image_name ?>" readonly>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Image Type</b></a>
                       <input type="text" class="form-control" name="image_type" placeholder="ID Desa" value="<?php echo $data->image_type ?>" readonly>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Image Size</b></a>
                       <input type="text" class="form-control" name="image_size_str" placeholder="ID Desa" value="<?php echo $data->image_size_str ?>" readonly>

                       <br>
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>superadmin/input_foto">Batal</a>
                     </div>
                   </form>
                 <?php } ?>
               </section>
             </div>

           </div>
         </div>
       </div>
       </div>


