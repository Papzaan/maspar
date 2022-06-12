<?php $this->extend('layout/template') ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="col-sm-12">
        <h1 class="m-0 text-danger"> Peta Penyebaran Suara Parpol</h1>
    </div><!-- /.col -->
    <div class="col-sm-12"><br>
        <button type="button" class="btn  btn-danger">+ Tambah Data</button>
    </div><!-- /.col -->

</div>
<!-- /.content-header -->


<div class="col-lg-12">
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body">

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtVNLzSJXo5TyiCEzek4Cj0dFDUQGvzQQ&callback=initialize" async defer></script>
            <script type="text/javascript">
                var marker;

                function initialize() {
                    // Variabel untuk menyimpan informasi lokasi
                    var infoWindow = new google.maps.InfoWindow;
                    //  Variabel berisi properti tipe peta
                    var mapOptions = {
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    // Pembuatan peta
                    var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
                    // Variabel untuk menyimpan batas kordinat
                    var bounds = new google.maps.LatLngBounds();
                    // Pengambilan data dari database MySQL
                    <?php
                    // Sesuaikan dengan konfigurasi koneksi Anda
                    $host       = "localhost";
                    $username = "root";
                    $password = "";
                    $Dbname   = "sidomaspar";
                    $db       = new mysqli($host, $username, $password, $Dbname);

                    $query = $db->query("SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
                    while ($row = $query->fetch_assoc()) {
                        $nama = $row["nama_lokasi"];
                        $lat  = $row["latitude"];
                        $long = $row["longitude"];
                        echo "addMarker($lat, $long, '$nama');\n";
                    }
                    ?>
                    // Proses membuat marker 
                    function addMarker(lat, lng, info) {
                        var lokasi = new google.maps.LatLng(lat, lng);
                        bounds.extend(lokasi);
                        var marker = new google.maps.Marker({
                            map: peta,
                            position: lokasi
                        });
                        peta.fitBounds(bounds);
                        bindInfoWindow(marker, peta, infoWindow, info);
                    }
                    // Menampilkan informasi pada masing-masing marker yang diklik
                    function bindInfoWindow(marker, peta, infoWindow, html) {
                        google.maps.event.addListener(marker, 'click', function() {
                            infoWindow.setContent(html);
                            infoWindow.open(peta, marker);
                        });
                    }
                }
            </script>

            <div id="googleMap" style="width:1100px;height:500px;"></div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>




<?php $this->endSection(); ?>