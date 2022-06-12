<?php $this->extend('layout/template') ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
         
    </div>
    <!-- /.content-header -->

    <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Ormas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ormas</label>
                    <input type="text" nama="nama_ormas" class="form-control" id="exampleInputEmail1" placeholder="Nama Parpol">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Lambang / Logo Ormas</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input nama="logo_ormas" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kepengurusan (Tingkat Pusat)</label>
                    <input type="text" name="ketua_pusat" class="form-control" id="exampleInputEmail1" placeholder="Ketua Pusat">
                    <input type="text" name="sekretaris_pusat" class="form-control" id="exampleInputEmail1" placeholder="Sekertaris Pusat">
                    <input type="text" name="bendahara_pusat" class="form-control" id="exampleInputEmail1" placeholder="Bendahara Pusat">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kepengurusan (Tingkat Provinsi)</label>
                    <input type="text" name="ketua_provinsi" class="form-control" id="exampleInputEmail1" placeholder="Ketua Provinsi">
                    <input type="text" name="sekretaris_provinsi" class="form-control" id="exampleInputEmail1" placeholder="Sekertaris Provinsi">
                    <input type="text" name="bendahara_provinsi" class="form-control" id="exampleInputEmail1" placeholder="Bendahara Provinsi">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kepengurusan (Tingkat Kabupaten)</label>
                    <input type="text" name="ketua_kabupaten" class="form-control" id="exampleInputEmail1" placeholder="Ketua kabupaten">
                    <input type="text" name="sekretaris_kabupaten" class="form-control" id="exampleInputEmail1" placeholder="Sekertaris kabupaten">
                    <input type="text" name="bendahara_kabupaten" class="form-control" id="exampleInputEmail1" placeholder="Bendahara kabupaten">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Aktivitas/Kegiatan</label>
                    <textarea name="aktivitas" class="form-control" id="exampleInputEmail1" placeholder="Aktivitas / Kegiatan"></textarea>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->





<?php $this->endSection(); ?>