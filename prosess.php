<?php
    if (isset($_GET['nama']) AND isset($_GET['email']))
    {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
    }
    else
    {
        echo "Maaf, Anda harus mengakses halaman ini dari form.html<br><br>";
    }
    if (!empty($nama) AND !empty(email))
    {
        echo "Nama : $nama <br> Email: $email";
    }
    else
    {
        echo("Maaf, Anda harus mengisi data");
    }
?>
