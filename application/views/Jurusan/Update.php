  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
   <h1>
      <small></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Jurusan</a></li>
      <li class="active">Update</li>
   </ol>
   </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
         <!--/.col (left) -->
         <!-- right column -->
         <div class="col-md-12">
          <!-- Horizontal Form -->
            <div class="box box-info">
            <div class="box-header with-border">
               <h3 class="box-title">Update Data Jurusan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url()?>Jurusan/action_update" method="POST" class="form-horizontal">
               <input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>">
               <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Jurusan</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" value="<?php echo $nama_jurusan;  ?>" name="nama_jurusan" placeholder="Nama Jurusan">
                  </div>
               </div>
               </div>
              <!-- /.box-body -->
               <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right margin">Update</button>
                  <button type="button" onclick="history.go(-2)" class="btn btn-default pull-right margin">Cancel</button>
               </div>
              <!-- /.box-footer -->
            </form>
         </div>
         <!-- /.box -->
         <!-- general form elements disabled -->

         </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->