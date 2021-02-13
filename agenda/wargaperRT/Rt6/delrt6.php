<?php  
require 'functions.php';

$id = $_GET["id"];

if(del_warga($id) > 0) {
    echo "
    <script>
    Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
    }).then((result) => {
        if (result.value) {
            window.location = '?page=Rt6';
        }
    })</script>
    ";
} else {
    echo "
    <script>
    Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {
        if (result.value) {
            window.location = '?page=Rt6';
        }
    })</script>
    ";
}
?>