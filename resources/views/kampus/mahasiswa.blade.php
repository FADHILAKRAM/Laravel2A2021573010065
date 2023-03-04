<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>DAFTAR MAHASISWA</h1>
        <OL>
            <?php foreach ($mahasiswa as $arrmahasiswa) {
            echo"<li>$arrmahasiswa</li>";
            }
            ?>
        </OL>
        <div>
            copyright&copy;<?php echo date("Y");?>Program studi teknik informatika-pnl
        </div>
</body>
</html>