<?php  
require 'functions.php';
// ambil id dari url
$id = $_GET["id"];
// siapkan data value
$edit = admin("SELECT * FROM level WHERE id =$id")[0];

if(isset($_POST["simpan"])) {
    if(edit_user($_POST) > 0) {
        echo "<script>
			Swal.fire({title: 'Update Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = '?page=administator';
				}
			})</script>";
    } else {
        echo "<script>
			Swal.fire({title: 'Gagal mengupdate data',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = '?page=user';
				}
			})</script>";
    }
}
?>
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Update Data Pengguna</h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">
        <input type="hidden" class="form-control" name="id" value="<?= $edit['id']; ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nama_user" value="<?= $edit['nama_user']; ?>"  required placeholder="Masukan nama anda">
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" name="username" value="<?= $edit['username']; ?>" placeholder="Maukan username" required>
				</div>
			</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                <div class="input-group-prepend">
                    <input type="password" class="form-control" id="pass" name="password" value="<?= $edit['password'];?>" placeholder="Maukan password" required>
                    <div class="input-group-text"><i class="fas fa-eye" id="mybutton" onclick="change()" title="Show Password"></i></div>
                </div>
                </div>
			</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
				<div class="col-sm-4">
                    <input type="password" class="form-control" id="pass2" name="password2" value="<?= $edit['password']; ?>" placeholder="Maukan username" required>
				</div>
			</div>
    
            <div class="input-group mb-3">
              <input class="form-control" type="hidden" name="level" value="Administator" readonly>
            </div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=administator" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;
    var y = document.getElementById('pass2').type;
    if (x == 'password' && y == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('pass2').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('pass2').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>
