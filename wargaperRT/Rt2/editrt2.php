<?php  
require 'functions.php';
// ambil id dari url
$id = $_GET["id"];
// siapkan data untuk value
$result = query("SELECT * FROM tb_warga WHERE id=$id")[0];
// cek jika tombol simpan di tekan
if(isset($_POST["simpan"])) {
    if(edit_warga($_POST) > 0) {
            echo "<script>
            Swal.fire({title: 'Update Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = '?page=Rt2';
                }
            })</script>";
    } else{
            echo "<script>
            Swal.fire({title: 'Update Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = '?page=Rt2';
                }
            })</script>";
    } 
}
?>
<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Update Data Warga RT 2</h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">
        <input type="hidden" class="form-control" name="id" value="<?= $result["id"];?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" value="<?= $result["nama_warga"];?>" placeholder="Maukan nama anda" required>
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tempat/Tgl lahir</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" name="tempat" value="<?= $result["tempat"];?>" placeholder="Masukan tempat lahir">
				</div>
				<div class="col-sm-4">
                    <input type="date" class="form-control" name="ttl" value="<?= $result["ttl"];?>">
				</div>
			</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-2">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($result["jenis_kelamin"] == "Laki-laki") echo "checked" ?> id="jeniskelamin" required>
                    Laki-laki
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($result["jenis_kelamin"] == "Perempuan") echo "checked" ?> id="jeniskelamin" required>
                    Perempuan
                </div>
			</div>
            
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pilih RT</label>
				<div class="col-sm-8">
                    <select name="rt" id="" id="rt" required class="rounded">
                        <option >-- Pilih --</option>
                        <option value="01" <?php if($result["rt"] == "01") echo "selected" ?>>01</option>
                        <option value="02" <?php if($result["rt"] == "02") echo "selected" ?>>02</option>
                        <option value="03" <?php if($result["rt"] == "03") echo "selected" ?>>03</option>
                        <option value="04" <?php if($result["rt"] == "04") echo "selected" ?>>04</option>
                        <option value="05" <?php if($result["rt"] == "05") echo "selected" ?>>05</option>
                        <option value="06" <?php if($result["rt"] == "06") echo "selected" ?>>06</option>
                        <option value="07" <?php if($result["rt"] == "07") echo "selected" ?>>07</option>
                        <option value="08" <?php if($result["rt"] == "08") echo "selected" ?>>08</option>
                        <option value="09" <?php if($result["rt"] == "09") echo "selected" ?>>09</option>
                        <option value="10" <?php if($result["rt"] == "10") echo "selected" ?>>10</option>
                    </select>
				</div>
			</div>
            
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Masukan NIK</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="uraian_km" name="nik" value="<?= $result["nik"];?>" placeholder="Maukan NIK anda" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Masukan NKK</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="uraian_km" name="nkk" value="<?= $result["nkk"];?>" placeholder="Maukan NKK anda" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			<a href="?page=Rt2" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

