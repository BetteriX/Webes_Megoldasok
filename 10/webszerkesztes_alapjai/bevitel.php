<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print '<form action ="feldolg2.php" method="POST">
        Vezeték név : <input type="text" name="v_nev"> <br>
        Kereszt név : <input type="text" name="k_nev"> <br>
        Jelszó : <input type="password" name="pwd"><br>
        Rádió gombok: <br>
        Első <input type="radio" name="radio" value="egyes"> <br>
        Második <input type="radio" name="radio" value="kettes"> <br>
        Harmadik <input type="radio" name="radio" value="hármas"> <br>
        Negyedik <input type="radio" name="radio" value="négyes"> <br>
        Check Box<br>
        Első <input type="checkbox" name="egyes_chk"> <br>
        Második <input type="checkbox" name="kettes_chk"> <br>
        <input type="submit" value="OK"> &nbsp; <input type="reset"
        value="Törlés">
        </form>
        ';
    ?>
</body>

</html>