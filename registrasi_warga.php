<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "insert.php";

$object = new Registrasi();

$data = [
    "nama_warga" => @$_POST["nama"], "tempat" => @$_POST["tempat"], "ttl" => @$_POST["ttl"], "jenis_kelamin" => @$_POST["jenis_kelamin"], "rt" => @$_POST["rt"], "nik" => @$_POST["nik"], "nkk" => @$_POST["nkk"]
];

$object->insert("tb_warga", $data);

?>
<!doctype html>
<html lang="en">

<head>
    <style>
    .btn {
        margin-left:5px;
    }
    .form {
        margin-top:10px;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.3);
    }
    label {
        font-weight: bold;
    }
    </style>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card form">
                    <div class="card-header">
                        Form Registrasi Warga Baru
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nama" placeholder="Maukan nama anda">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tempat/Tgl lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tempat" placeholder="Masukan tempat lahir">
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="ttl">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-3">
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jeniskelamin">
                                    Laki-laki
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="jeniskelamin">
                                    Perempuan
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Pilih RT</label>
                                <div class="col-sm-8">
                                    <select name="rt" id="" id="rt" class="rounded">
                                        <option>-- Pilih --</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Masukan NIK</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nik" placeholder="Maukan NIK anda">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Masukan NKK</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="uraian_km" name="nkk" placeholder="Maukan NKK anda">
                                </div>
                            </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary float-right">
                    <input type="reset" name="reset" class="btn btn-danger float-right" value="Reset">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>