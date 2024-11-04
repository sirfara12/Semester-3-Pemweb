<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <title>Data Entry</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Data Anggota</title>
</head>
<body>
    <nav class="navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
            CRUD Dengan Ajax
        </a>
    </nav>
    <div class="container">
        <h2 align="center" style="margin: 30px;">Data Anggota</h2>
        
        <!-- Form Pertama -->
        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jkel1" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jkel2" value="P"> Perempuan
                        <p class="text-danger" id="err_jenis_kelamin"></p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>
        <div class="data"></div>

        <div class="text-center">© <?php echo date('Y'); ?> Copyright:
        <a href="https://google.com/">Desain Dan Pemrograman Web</a>
        </div>
    </div>
    <!-- jQuery and JavaScript dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Mengirimkan Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.data').load("data.php");

            $('#simpan').click(function() {
                var data = $('#form-data').serialize();
                var jenkel1 = document.getElementById('jkel1').value;
                var jenkel2 = document.getElementById('jkel2').value;
                var nama = document.getElementById('nama').value;
                var alamat = document.getElementById('alamat').value;
                var no_telp = document.getElementById('no_telp').value;

                if (!nama) {
                    document.getElementById('err_nama').innerHTML = "Nama Harus Diisi";
                } else {
                    document.getElementById('err_nama').innerHTML = "";
                }

                if (!alamat) {
                    document.getElementById('err_alamat').innerHTML = "Alamat Harus Diisi";
                } else {
                    document.getElementById('err_alamat').innerHTML = "";
                }

                if (!document.getElementById('jkel1').checked && !document.getElementById('jkel2').checked) {
                    document.getElementById('err_jenis_kelamin').innerHTML = "Jenis Kelamin Harus Dipilih";
                } else {
                    document.getElementById('err_jenis_kelamin').innerHTML = "";
                }

                if (!no_telp) {
                    document.getElementById('err_no_telp').innerHTML = "No Telepon Harus Diisi";
                } else {
                    document.getElementById("err_no_telp").innerHTML = "";
                }

                if (nama && alamat && (document.getElementById('jkel1').checked || document.getElementById('jkel2').checked) && no_telp) {
                    $.ajax({
                        type: 'POST',
                        url: 'form_action.php',
                        data: data,
                        success: function() {
                            $('.data').load("data.php");
                            document.getElementById("id").value = "";
                            document.getElementById("form-data").reset();
                        },
                        error: function(response) {
                            console.log(response.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>