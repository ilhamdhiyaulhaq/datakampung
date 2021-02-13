<?php  
require 'functions.php';

if(isset($_POST["simpan"])) {
    if(add_user($_POST) > 0) {
			echo "<script>
			Swal.fire({title: 'Regristrasi Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = '?page=user';
				}
			})</script>";
		} else {
			echo "<script>
			Swal.fire({title: 'Username / Password Tidak Memenuhi Syarat ! !',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = '?page=add_user';
				}
			})</script>";
    }
}
?>
<div class="card card-info">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fas fa-user-plus"></i> Tambah Data User
        </h3>
	</div>
	
    <form action="" method="post" >
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama User</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nama_user" placeholder="Masukan nama anda"required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="username" placeholder="Masukan username"required>
				</div>
			</div>

            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                <div class="input-group-prepend">
                    <input type="password" class="form-control" id="pass" name="password"  placeholder="Maukan password" required>
                    <div class="input-group-text"><i class="fas fa-eye" id="mybutton" onclick="change()" title="Show Password"></i></div>
                </div>
                </div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Konfirmasi Pasword</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" id="pass2" name="password2" placeholder="Masukan konfirmasi password"required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Level</label>
				<div class="col-sm-8">
                    <select name="level"  required class="rounded">
                        <option >-- Pilih --</option>
                        <option value="Administator">Administator</option>
                        <option value="Bendahara">Bendahara</option>
						<option value="Developer">Developer</option>
						<option value="User Publik">Publik</option>
                    </select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=user" title="Kembali" class="btn btn-secondary">Batal</a>
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
