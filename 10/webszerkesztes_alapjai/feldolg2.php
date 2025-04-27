<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Kedves ";
    echo $_POST['v_nev'];
    echo " ";
    echo $_POST['k_nev'];
    echo " üdvözöllek a PHP világában";
    echo "<br>Az Ön által begépelt jelszó a következő: " . $_POST['pwd'] . "<br>";
    echo "A következő rádió gomb volt bekapcsolva : " . $_POST['radio'] . "<br>";
    echo "Első check box állapota : " . $_POST['egyes_chk'] . "<br>";
    echo "Második check box állapota : " . $_POST['kettes_chk'] . "<br>";
    ?>
</body>

</html>