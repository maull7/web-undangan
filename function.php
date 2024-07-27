<?php 
$koneksi = mysqli_connect("localhost","root","","tamu") ;

function tambah() {
    global $koneksi ;
    $nama = htmlspecialchars($_POST["nama"]) ;
    $jumlah = htmlspecialchars($_POST["jumlah"]) ;
    $informasi = htmlspecialchars($_POST["informasi"]) ;

    $query = "INSERT INTO tamu_undangan VALUES 
               ('','$nama','$jumlah','$informasi')" ;

    mysqli_query($koneksi,$query) ;
    return mysqli_affected_rows($koneksi) ;
}

?>