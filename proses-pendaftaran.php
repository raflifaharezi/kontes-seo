<?php

include("koneksi.php");

if(isset($_POST['daftar']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no_telephone = intval( $_POST['no_telephone']);
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $url_website = $_POST['url_website'];
    $url_facebook = $_POST['url_facebook'];
    $url_instagram = $_POST['url_instagram'];

    $sql = "INSERT INTO users (name, email, no_telephone, address, city, province, url_website, url_facebook, url_instagram )
            VALUE ('$name', '$email', '$no_telephone', '$address', '$city', '$province', '$url_website', '$url_facebook', '$url_instagram')";
    $query = mysqli_query($koneksi,$sql);

    if( $query ) {
        header('Location: peserta-kontes.php?status=sukses');
    } else {
        header('Location: peserta-kontes.php?status=gagal');
    }
}

?>