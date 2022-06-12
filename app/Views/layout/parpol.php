<?php $this->extend('layout/template') ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
          <div class="col-sm-12">
            <h1 class="m-0 text-danger"> Data Partai Politik di Kabupaten Pringsewu</h1>
          </div><!-- /.col --> 
          <div class="col-sm-12"> <br>
          <a href="<?php echo base_url('/tambah_parpol') ?>"> 
          <button type="button" class="btn  btn-danger">+ Tambah Data Parpol</button>
</a> 
          </div><!-- /.col -->
    </div>
    <!-- /.content-header -->


<div class="col-lg-12">
<div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Parpol</th>
                    <th>Logo Parpol</th>
                    <th>Ketua</th>
                    <th>Sekretaris</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Gerindra</td>
                    <td>Gerindra
                    </td>
                    <td>Prabowo Subianto</td>
                    <td>Ahmad Muzani</td>
                    <td><button type="button" class="btn  btn-success">Lihat</button> 
                    <button type="button" class="btn  btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>




<?php $this->endSection(); ?>