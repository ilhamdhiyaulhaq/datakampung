<?php  
require 'functions.php';
// tangkap id dri url
$id = $_GET["id"];
// menyiapkan isian value
$data = query("SELECT * FROM tb_rtrw WHERE id = $id")[0];
// cek jika tombol simpan di tekan
if(isset($_POST["simpan"])) {
    if(edit_rtrw($_POST) > 0) {
        echo "
        <script>
        Swal.fire({title: 'Edit Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = '?page=tb_rtrw';
            }
        })</script>
        ";
    } else {
        echo "<script>
        Swal.fire({title: 'Edit Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=tb_rtrw';
            }
        })</script>";
    }
}

?>
<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Update Data</h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">
        <input type="hidden" class="form-control" name="id" value="<?= $data['id']; ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>" placeholder="Maukan nama anda" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-4">
                    <textarea name="alamat" style="width:250px; height:100px;" value="<?= $data['alamat']; ?>" placeholder="masukan alamat anda"><?php if($data['alamat'] === $data['alamat'] ) echo  $data['alamat'] ?></textarea><br>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-8">
                    <select name="jabatan"  required class="rounded">
                        <option >-- Pilih --</option>
                        <option value="Ketua RW 04" <?php if($data['jabatan'] == "Ketua RW 04") echo "selected"?>>Ketua RW 04</option>
                        <option value="Ketua RT 01 RW 04" <?php if($data['jabatan'] == "Ketua RT 01 RW 04") echo "selected"?>>Ketua RT 01 RW 04</option>
                        <option value="Ketua RT 02 RW 04" <?php if($data['jabatan'] == "Ketua RT 02 RW 04") echo "selected"?>>Ketua RT 02 RW 04</option>
                        <option value="Ketua RT 03 RW 04" <?php if($data['jabatan'] == "Ketua RT 03 RW 04") echo "selected"?>>Ketua RT 03 RW 04</option>
                        <option value="Ketua RT 04 RW 04" <?php if($data['jabatan'] == "Ketua RT 04 RW 04") echo "selected"?>>Ketua RT 04 RW 04</option>
                        <option value="Ketua RT 05 RW 04" <?php if($data['jabatan'] == "Ketua RT 05 RW 04") echo "selected"?>>Ketua RT 05 RW 04</option>
                        <option value="Ketua RT 06 RW 04" <?php if($data['jabatan'] == "Ketua RT 06 RW 04") echo "selected"?>>Ketua RT 06 RW 04</option>
                        <option value="Ketua RT 07 RW 04" <?php if($data['jabatan'] == "Ketua RT 07 RW 04") echo "selected"?>>Ketua RT 07 RW 04</option>
                        <option value="Ketua RT 08 RW 04" <?php if($data['jabatan'] == "Ketua RT 08 RW 04") echo "selected"?>>Ketua RT 08 RW 04</option>
                        <option value="Ketua RT 09 RW 04" <?php if($data['jabatan'] == "Ketua RT 09 RW 04") echo "selected"?>>Ketua RT 09 RW 04</option>
                        <option value="Ketua RT 10 RW 04" <?php if($data['jabatan'] == "Ketua RT 10 RW 04") echo "selected"?>>Ketua RT 10 RW 04</option>
                    </select>
				</div>
			</div>
            
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Periode Jabatan</label>
				<div class="col-sm-8">
                    <select name="periode_jabatan"  required class="rounded">
                        <option >-- Pilih --</option>
                        <option value="2005 - 2010" <?php if($data['periode_jabatan'] == "2005 - 2010") echo "selected"?>>2005 - 2010</option>
                        <option value="2010 - 2015" <?php if($data['periode_jabatan'] == "2010 - 2015") echo "selected"?>>2010 - 2015</option>
                        <option value="2015 - 2020" <?php if($data['periode_jabatan'] == "2015 - 2020") echo "selected"?>>2015 - 2020</option>
                        <option value="2020 - 2025" <?php if($data['periode_jabatan'] == "2020 - 2025") echo "selected"?>>2020 - 2025</option>
                        <option value="2025 - 2030" <?php if($data['periode_jabatan'] == "2025 - 2030") echo "selected"?>>2025 - 2030</option>
                    </select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			<a href="?page=tb_rtrw" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

