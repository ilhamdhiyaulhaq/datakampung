<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Warga</h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" placeholder="Maukan nama anda" required>
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tempat/Tgl lahir</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" name="tempat" placeholder="Masukan tempat lahir">
				</div>
				<div class="col-sm-4">
                    <input type="date" class="form-control" name="ttl">
				</div>
			</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-2">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jeniskelamin" required>
                    Laki-laki
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="jeniskelamin" required>
                    Perempuan
                </div>
			</div>
            
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pilih RT</label>
				<div class="col-sm-8">
                    <select name="rt" id="" id="rt" required class="rounded">
                        <option >-- Pilih --</option>
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
				<label class="col-sm-2 col-form-label">Masukan NIK</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nik" placeholder="Maukan NIK anda" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Masukan NKK</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="uraian_km" name="nkk" placeholder="Maukan NKK anda" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=tb_warga" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php 
require 'functions.php';

    if(isset($_POST["simpan"])) {
            if(add_warga($_POST) > 0) {
                    echo "<script>
                    Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                    }).then((result) => {if (result.value){
                        window.location = '?page=tb_warga';
                        }
                    })</script>";
            } else{
                    echo "<script>
                    Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                    }).then((result) => {if (result.value){
                        window.location = '?page=tb_warga';
                        }
                    })</script>";
            } 
    }
?>