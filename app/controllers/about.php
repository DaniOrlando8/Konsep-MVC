<?php

class about {
    public function index($nama = 'Dani', $pekerjaan = 'Mahasiswa'){
        echo "Nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page(){
        echo 'about/page';
    }
}