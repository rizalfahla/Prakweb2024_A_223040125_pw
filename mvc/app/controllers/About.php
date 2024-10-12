<?php
class About
{
    public function index($nama = "Rizal Fahla", $pekerjaan = "Mahasiswa") {
        echo "Halo nama saya " . $nama . ", saya adalah seorang " . $pekerjaan . "<br>";
    }
public function page() {
    echo 'about/page';
}
}