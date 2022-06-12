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
      <h3 class="card-title">Tambah Data Parpol</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/save_parpol">
      <?php csrf_field(); ?>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Parpol</label>
          <input type="text" nama="nama_parpol" class="form-control" id="exampleInputEmail1" placeholder="Nama Parpol">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Lambang / Logo Parpol</label>
          <div class="input-group">
            <div class="custom-file">
              <input nama="logo_parpol" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kepengurusan (Tingkat Pusat)</label>
          <table>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="ketua_pusat" class="form-control col-md-12" placeholder="Nama Ketua Pusat">
              </td>
              <td><input nama="foto_ketua_pusat" type="file"> </td>
            </tr>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="sekretaris_pusat" class="form-control" id="exampleInputEmail1" placeholder="Nama Sekertaris Pusat">
              </td>
              <td><input nama="foto_sekretaris_pusat" type="file"> </td>
            </tr>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="bendahara_pusat" class="form-control" id="exampleInputEmail1" placeholder="Nama Bendahara Pusat">
              </td>
              <td><input nama="foto_bendahara_pusat" type="file"> </td>
            </tr>
          </table>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kepengurusan (Tingkat Provinsi)</label>
          <table>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="ketua_provinsi" class="form-control" id="exampleInputEmail1" placeholder="Nama Ketua Provinsi">
              </td>
              <td><input nama="foto_ketua_provinsi" type="file"> </td>
            </tr>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="sekretaris_provinsi" class="form-control" id="exampleInputEmail1" placeholder="Nama Sekertaris Provinsi">

              </td>
              <td><input nama="foto_sekretaris_provinsi" type="file"> </td>
            </tr>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="bendahara_provinsi" class="form-control" id="exampleInputEmail1" placeholder="Nama Bendahara Provinsi">
              </td>
              <td><input nama="foto_bendahara_provinsi" type="file"> </td>
            </tr>
          </table>

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kepengurusan (Tingkat Kabupaten)</label>
          <table>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="ketua_kabupaten" class="form-control" id="exampleInputEmail1" placeholder="Nama Ketua kabupaten">
              </td>
              <td><input nama="foto_ketua_kabupaten" type="file"> </td>
            </tr>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="sekretaris_kabupaten" class="form-control" id="exampleInputEmail1" placeholder="Nama Sekertaris kabupaten">
              </td>
              <td><input nama="foto_sekretaris_kabupaten" type="file"> </td>
            </tr>
            <tr>
              <td style="width: 60%;">
                <input type="text" name="bendahara_kabupaten" class="form-control" id="exampleInputEmail1" placeholder="Nama Bendahara kabupaten">

              </td>
              <td><input nama="foto_bendahara_kabupaten" type="file"> </td>
            </tr>
          </table>
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