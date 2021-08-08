<?php

class warga{
    var $nama;
    var $alamat;

    public function personAwal(){
        echo $nama_lengkap="Elvin mauladan";
        echo "<br>";
        echo $alamat="depok";
    }

    public function person(){
        echo $nama_lengkap=$this->nama;
        echo "<br>";
        echo $alamat=$this->alamat;
    }

    public function setPerson(){
        $this->nama="nama 1";
        echo "<br>";
        $this->alamat="alamat 1";
    }

    public function person3($nama,$alamat){
        echo $nama_lengkap=$nama;
        echo "<br>";
        echo $alamat=$alamat;
    }
}

?>