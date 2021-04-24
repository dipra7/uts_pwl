<?php 

class Member{
    //merber1 var
    private $koneksi;

    //member2 konstruktor
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //merber3 method
    public function cekLogin($data){
        $sql = "SELECT * FROM member WHERE username=? AND password = SHA1(MD5(?))";

        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);

        $rs = $ps->fetch();
        
        return $rs;
    }
    
}

?>