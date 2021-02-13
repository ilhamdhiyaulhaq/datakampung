<?php  
$conn = mysqli_connect("sql110.epizy.com","epiz_26741992","nmCGZT8Ci6cv","epiz_26741992_datakamp_system");

// -------------------------------------FUNCTIN DATA WARGA------------------------------------------------
// function tampilkan data warga
function query($query) {
    global $conn;
    // simpan data warga kedalam variable $result
    $result = mysqli_query($conn,$query);
    // menyiapkan array kosong untuk wadah $result
    $rows = [];
    // pindah data $row kedalam array kosong $rows
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function add data warga
function add_warga($data) {
    global $conn;
    // ambil name dari form
    $nama = $data["nama"];
    $tempat = $data["tempat"];
    $ttl = $data["ttl"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $rt = $data["rt"];
    $nik = $data["nik"];
    $nkk = $data["nkk"];
    // simpan syntak sql kedalam variable $query
    $add = "INSERT INTO tb_warga VALUES 
    ('','$nama','$tempat','$ttl','$jenis_kelamin','$rt','$nik','$nkk')";
    // proses penyimpanan
    mysqli_query($conn,$add);

    return mysqli_affected_rows($conn);
}

// functions del_warga
function del_warga($id) {
    global $conn;
    // query sql
    mysqli_query($conn,"DELETE FROM tb_warga WHERE id = $id");
    // kembalikan nilai rows
    return mysqli_affected_rows($conn);
}

// function edit data warga
function edit_warga($data) {
    global $conn;
    // ambil nama dari form
    $id = $data["id"];
    $nama = $data["nama"];
    $tempat = $data["tempat"];
    $ttl = $data["ttl"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $rt = $data["rt"];
    $nik = $data["nik"];
    $nkk = $data["nkk"];
    // simpan sytax sql kedalam variable $edit
    $edit = "UPDATE tb_warga SET
        nama_warga= '$nama',
        tempat = '$tempat',
        ttl = '$ttl',
        jenis_kelamin = '$jenis_kelamin',
        rt = '$rt',
        nik = '$nik',
        nkk = '$nkk'
        WHERE id = $id";
    // jalankan proses update
    mysqli_query($conn,$edit);
    // kembalikan nilai rows
    return mysqli_affected_rows($conn);
}

// -------------------------------------FUNCTIN AGENDA--------------------------------------------------
// function kegiatan
function agenda($query) {
    global $conn;
    // siapkan data dari tb_agenda
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function add kegiatan
function add_agenda($data) {
    global $conn;
    // ambil name dari form
    $tgl = $data["tgl_kegiatan"];
    $nama_kegiatan = $data["nama_kegiatan"];
    $keterangan = $data["keterangan"];
    // simpan syntak sql kedalam variable $query
    $add = "INSERT INTO tb_agenda VALUES 
    ('','$tgl','$nama_kegiatan','$keterangan')";
    // proses penyimpanan
    mysqli_query($conn,$add);

    return mysqli_affected_rows($conn);
}

// functions del_warga
function del_agenda($id) {
    global $conn;
    // query sql
    mysqli_query($conn,"DELETE FROM tb_agenda WHERE id = $id");
    // kembalikan nilai rows
    return mysqli_affected_rows($conn);
}

// function edit data warga
function edit_agenda($data) {
    global $conn;
    // ambil nama dari form
    $id = $data["id"];
    $tgl = $data["tgl_kegiatan"];
    $nama_kegiatan = $data["nama_kegiatan"];
    $keterangan = mysqli_real_escape_string($conn,$data["keterangan"]);
    // simpan sytax sql kedalam variable $edit
    $edit = "UPDATE tb_agenda SET
        tgl_kegiatan = '$tgl',
        nama_kegiatan = '$nama_kegiatan',
        keterangan = '$keterangan'
        WHERE id = $id";
    // jalankan proses update
    mysqli_query($conn,$edit);
    // kembalikan nilai rows
    return mysqli_affected_rows($conn);
}

// -------------------------------------FUNCTIN DATA RT & RW------------------------------------------------

// function tampilkan data RT RW
function rtrw($query) {
    global $conn;
    // siapkan data rt rw
    $result = mysqli_query($conn,$query);
    // siapkan array kosong
    $rows = [];
    // pindahkan data result kedalam array kosong
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // kembalikan nilai rows
    return $rows;
}

// function tambah data RT RW
function add_rtrw($data) {
    global $conn;
    // mengambil nama dari form
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $jabatan = $data["jabatan"];
    $per_jabatan = $data["per_jabatan"];
    // menyimpan syntax sql kedalam variable
    $query = "INSERT INTO tb_rtrw VALUES 
    ('','$nama','$alamat','$jabatan','$per_jabatan')";
    // proses menyimpan data
    mysqli_query($conn,$query);
    // kembalikan nilai 1 jika berhasil menyimpan 0 jika gagal
    return mysqli_affected_rows($conn);
}

// functions delete rt rw
function del_rtrw($id) {
    global $conn;
    // query delete
    mysqli_query($conn,"DELETE FROM tb_rtrw WHERE id = $id");
    // kembalikan nilai 1 jika berhasil 
    return mysqli_affected_rows($conn);
}

// function edit data rt rw
function edit_rtrw($data) {
    global $conn;
    // mengambil nama dari form 
    $id = $data["id"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $jabatan = $data["jabatan"];
    $per_jabatan = $data["periode_jabatan"];
    // menyimpan syntax sql kedalam variable
    $sql = "UPDATE tb_rtrw SET
    nama = '$nama',
    alamat = '$alamat',
    jabatan = '$jabatan',
    periode_jabatan = '$per_jabatan'
    WHERE id = $id";
    // jalankan proses update
    mysqli_query($conn,$sql);
    // kembalikan nilai 1 jika update berhasil
    return mysqli_affected_rows($conn);
}

// -------------------------------------FUNCTIN DATA USER------------------------------------------------

// membuat function tampil data user
function admin($query) {
    global $conn;
    // siapkan data user
    $result = mysqli_query($conn,$query);
    // siapkan array ksosng
    $rows = [];
    // apindahkan data result
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function add user
function add_user($data) {
    global $conn;
    // ambil name dari form user
    $nama_user = $data["nama_user"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    $level = $data["level"];

    // cek jika ada username uang sma
    $result = mysqli_query($conn,"SELECT * FROM level WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
            return false;
    }

    if($password !== $password2) {
            return false;
    }
    
    // menyimpan syntax sql kedalam variable
    $user = "INSERT INTO level VALUES
    ('','$nama_user','$username','$password','$level')";
    // prosess tambah data
    mysqli_query($conn,$user);
    return mysqli_affected_rows($conn);
}

// function del_user
function del_user($id) {
    global $conn;
    // proses delete
    mysqli_query($conn,"DELETE FROM level WHERE id = $id");
    // kembalikan nilai 1 jika berhasil
    return mysqli_affected_rows($conn);
}

// function edit data user
function edit_user($data) {
    global $conn;
    // ambil nama dari form
    $id = $data["id"];
    $nama_user = $data["nama_user"];
    $username = $data["username"];
    $password = $data["password"];
    $password2 = $data["password2"];
    $level = $data["level"];

    // query
    $query = "UPDATE level SET
            nama_user = '$nama_user',
            username = '$username',
            password = '$password',
            level = '$level'
            WHERE id = $id
            ";
    // proses edit
    mysqli_query($conn,$query);
    // kembalikan nilai 1 jika proses edit berhasil
    return mysqli_affected_rows($conn);
}



// -------------------------------------FUNCTIN KAS keluar----------------------------------------------------
function kaswarga($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    // siapkan array kosong
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// membuat fungsi rupiah
function rupiah($angka) {
    $rupiah = "Rp " . number_format($angka,2,',','.');
    return $rupiah;
}
// function tambah data pengeluaran
function add_outkas($data) {
    global $conn;
    // mengamil nama dari form
    $tanggal = $data["tanggal"];
    $uraian = $data["uraian"];
    $keluar = $data["keluar"];
    $keluar_hasil=preg_replace("/[^0-9]/", "", $keluar);
    // query sql
    $query = "INSERT INTO kas_warga VALUES 
    ('','$tanggal','$uraian','0','$keluar_hasil')";
    // proses tambah data
    mysqli_query($conn,$query);
    // kembalikan nilai 1 jika berhasil
    return mysqli_affected_rows($conn);
}
// function delete data kas keluar
function del_kas($id) {
    global $conn;
    // proses delte
    mysqli_query($conn,"DELETE FROM kas_warga WHERE id = $id");
    // kembalikan nilai 1 jika succes
    return mysqli_affected_rows($conn);
}
// function kas keluar
function update_kas($data) {
    global $conn;
    // simpam syntax sql
    $id = $data["id"];
    $tanggal = $data["tanggal"];
    $uraian = $data["uraian"];
    $keluar = $data["keluar"];
    // query update
    $query = "UPDATE kas_warga SET 
        tanggal = '$tanggal',
        uraian = '$uraian',
        keluar = '$keluar'
        WHERE id = $id";
    // jalankan proses update
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
// -------------------------------------FUNCTIN KAS MASUK----------------------------------------------------
function add_inkas($data) {
    global $conn;
    $tanggal = $data["tanggal"];
    $uraian = $data["uraian"];
    $masuk = $data["masuk"];
    $masuk_hasil=preg_replace("/[^0-9]/", "", $masuk);
     // query sql
     $query = "INSERT INTO kas_warga VALUES 
     ('','$tanggal','$uraian','$masuk_hasil','0')";
     // proses tambah data
    mysqli_query($conn,$query);
    // kembalikan nilai 1 jika berhasil
    return mysqli_affected_rows($conn);
}

// function delete data kas masuk
function i_del_kas($id) {
    global $conn;
    // proses delte
    mysqli_query($conn,"DELETE FROM kas_warga WHERE id = $id");
    // kembalikan nilai 1 jika succes
    return mysqli_affected_rows($conn);
}

// function update kas masuk
function i_update_kas($data) {
    global $conn;
    // simpam syntax sql
    $id = $data["id"];
    $tanggal = $data["tanggal"];
    $uraian = $data["uraian"];
    $masuk = $data["masuk"];
    // query update
    $query = "UPDATE kas_warga SET 
        tanggal = '$tanggal',
        uraian = '$uraian',
        masuk = '$masuk'
        WHERE id = $id";
    // jalankan proses update
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function registrasi($data) {
    global $conn;
    // ambil nama dari form registrasi
    $nama_user = strtolower(stripslashes($data["nama_user"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    $level_user = $data["level"];
    
    // inputan tidak boleh kososng
    // cek jika ada username yanng sama
    $result = mysqli_query($conn,"SELECT * FROM level WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('Username sudah digunakan !');
        </script>
        ";
        return false;
    }
    // cek jika password 1 dan 2 tidak sama
    if($password !== $password2) {
        
        echo "
        <script>
            alert('Konfirmasi password salah !');
        </script>
        ";
        return false;
    }
    // memasukan data register kedalam user
    mysqli_query($conn,"INSERT INTO level VALUES('','$nama_user','$username','$password','$level_user')");

    return mysqli_affected_rows($conn);
}

?>