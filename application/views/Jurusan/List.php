<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     List Data Jurusan
     <small></small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><a href="#">Jurusan</a></li>
     <li class="active">List</li>
   </ol>
 </section>

 <!-- Main content -->
 <section class="content">
   <div class="row">
     <div class="col-xs-12">

       <div class="box">
         <div class="box-header">
 
           <a href="<?php echo base_url()?>Jurusan/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
         </div>

         <?php if($this->session->flashdata('message')){ ?>
            <div class="box-header">
               <div class="alert alert-success alert-dismissable">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                   <strong><i class="fa fa-save fa-fw"></i> Success!</strong> <?php echo $this->session->flashdata('message');?>
               </div>
           </div>
         <?php } ?>
             
         <?php if($this->session->flashdata('message_error')){ ?>
           <div class="box-header">
             <div class="alert alert-danger alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                 <strong><i class="fa fa-warning fa-fw"></i> Failed!</strong> <?php echo $this->session->flashdata('message_error');?>
             </div>
           </div>
         <?php } ?>
         

         <!-- /.box-header -->
         <div class="box-body">
           <table id="example1" class="table table-bordered table-striped">
             <thead>
             <tr>
               <th>No</th>
               <th>Nama Jurusan</th>
               <th width="15%">Action</th>
             </tr>
             </thead>
             <tbody>
               <?php 
                 if(!empty($jurusan)){
                   $no=0;
                   foreach($jurusan as $j) { $no++; ?>
                     <tr>
                       <td><?php echo $no; ?></td>
                       <td><?php echo $j->nama_jurusan; ?></td>
                       <td>
                         <a href="<?php echo base_url('Jurusan/update/'.$j->id_jurusan);?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a>
                         <a href="<?php echo base_url('Jurusan/delete/'.$j->id_jurusan);?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                       </td>
                     </tr>

               <?php }} ?>
             </tbody>
           </table>
         </div>
         <!-- /.box-body -->
       </div>
       <!-- /.box -->
     </div>
     <!-- /.col -->
   </div>
   <!-- /.row -->
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->