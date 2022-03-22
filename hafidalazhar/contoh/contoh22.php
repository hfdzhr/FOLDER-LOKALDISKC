<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Pengolahan form</h2></center>
<form action="" method="post" name="input">
        Nama Anda : <input type="text" name="nama" required><br>
        <input type="submit" name="kirim" value="Kirim">
    </form>
</body>
</html>
<?php
if (isset($_POST['kirim'])) {
    $nami = $_POST['nama'];
    echo "Nama Anda : <b>$nami</b>";
}
?>