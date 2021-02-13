<?php 
require 'functions.php';

// ambil id dari url
$id = $_GET["id"];
// jika proses delte berhasil akan mengemmbalikan nilai 1
if(del_rtrw($id) > 0) {
    echo "<script>
        Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=tb_rtrw';
            }
        })</script>";
} else {
    echo "<script>
        Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value){
            window.location = '?page=tb_rtrw';
            }
        })</script>";
}
?>