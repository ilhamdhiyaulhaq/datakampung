<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "datakampung";
    protected $koneksi;

    public function __construct()
    {
        $this->host;
        $this->username;
        $this->password;
        $this->db;
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->db) or die($this->koneksi->error);
        if (!$this->koneksi) {
            return false;
        }
    }
}

class Registrasi extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($table, $data)
    {
        if (isset($_POST["simpan"])) {
            if (empty($_POST["nama"]) || empty($_POST["tempat"]) || empty($_POST["ttl"]) || empty($_POST["nik"]) || empty($_POST["nkk"])) {
                echo "
                <script>
                    alert('Form wajib di isi seemua');
                </script>
                ";
            } else {
                $kolom = implode(',', array_keys($data));
                $values = '("' . join('","', array_values($data)) . '")';
                $sql = "INSERT INTO $table ($kolom) VALUES $values";
                $query = $this->koneksi->query($sql);
                if (!$query) {
                    echo "
                    <script>
                        alert('Registrasi Gagal');
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('Registrasi Berhasil');
                    </script>
                    ";
                }
            }
        }
    }
}
