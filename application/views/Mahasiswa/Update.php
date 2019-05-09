  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mahasiswa</a></li>
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
              <h3 class="box-title">Update Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url()?>Mahasiswa/action_update" method="POST" class="form-horizontal">
              <input type="hidden" value="<?php echo $id_mhs ?>" name="id_mhs">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nim</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $nim; ?>" name="nim" placeholder="Nim">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Mahasiswa</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $nama_mhs; ?>" name="nama_mhs" placeholder="Nama Mahasiswa">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"><?php echo $alamat; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="flat-red" <?php if($jenis_kelamin == 'Laki-laki'){ echo "checked";}else{ echo "";} ?>> Laki-laki 
                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="flat-red" <?php if($jenis_kelamin == 'Perempuan'){ echo "checked";}else{ echo "";} ?>> Perempuan 
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" class="form-control pull-right" id="datepicker">
                    </div>
                  </div>
                <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jurusan</label>
                  <div class="col-sm-10">
                    <select name="id_jurusan" class="form-control select2" style="width: 100%;">
                      <option value="0">-- Pilih Data Jurusan --</option>
                      <?php
                        foreach($jurusan as $j) {?>
                          <option value="<?php echo $j->id_jurusan; ?>" <?php if($j->id_jurusan == $id_jurusan){echo "selected";} ?>><?php echo $j->nama_jurusan; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                <!-- /.input group -->
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right margin">Simpan</button>
                <button type="reset" class="btn btn-default pull-right margin">Cancel</button>
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