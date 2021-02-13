<?php  
require 'functions.php';

if(isset($_POST["simpan"])) {
    if(add_outkas($_POST) > 0) {
        echo "<script>
        Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=o_kas_keluar';
            }
        })</script>";
    } else {
        echo "<script>
        Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = 'o_add_keluar';
            }
        })</script>";
    }
}
?>
<div class="card card-info">
	<div class="card-header bg-info">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pengeluaran
        </h3>
	</div>
    <form action="" method="post" >
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tanggal" name="tanggal" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Uraian</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" id="uraian" name="uraian" placeholder="Masukan uraian pengeluaran"required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengeluaran (Rp.)</label>
				<div class="col-sm-4">
                    <input type="text" class="form-control" id="keluar" name="keluar" placeholder="Masukan total pengeluaran"required>
				</div>
			</div>
			
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=kas_keluar" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<!-- jika saldo dimasukan auto Rp -->
<script type="text/javascript">
       var keluar = document.getElementById('keluar');
       keluar.addEventListener('keyup', function (e) {
         // tambahkan 'Rp.' pada saat form di ketik
         // gunakan fungsi formatkeluar() untuk mengubah angka yang di ketik menjadi format angka
         keluar.value = formatkeluar(this.value, 'Rp ');
       });
     
       /* Fungsi formatkeluar */
       function formatkeluar(angka, prefix) {
         var number_string = angka.replace(/[^,\d]/g, '').toString(),
           split = number_string.split(','),
           sisa = split[0].length % 3,
           keluar = split[0].substr(0, sisa),
           ribuan = split[0].substr(sisa).match(/\d{3}/gi);
     
         // tambahkan titik jika yang di input sudah menjadi angka ribuan
         if (ribuan) {
           separator = sisa ? '.' : '';
           keluar += separator + ribuan.join('.');
         }
     
         keluar = split[1] != undefined ? keluar + ',' + split[1] : keluar;
         return prefix == undefined ? keluar : (keluar ? 'Rp ' + keluar : '');
       }
     </script>