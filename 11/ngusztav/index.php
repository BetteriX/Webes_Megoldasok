<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    $filename = "file.txt";
    if (file_exists($filename)) {
        echo "The file $filename exists";
    } else {
        echo "The file $filename does not exist";
    }
    */


    /*
    $file = "file.txt";
    if (!unlink($file)) {
        echo "Error deleting $file";
    } else {
        echo "Deleted $file";
    }
    */

    //mkdir("/opt/lampp/htdocs/testing", 0700);
    
    /*
    // Könyvtér bejárása
    $dir = opendir("/opt/lampp/htdocs");
    while (($file = readdir($dir)) !== false) {
        echo "filename: " . $file . "<br>";
    }
    closedir($dir);
    */

    // r -> read, w -> write, a -> append
    $file = fopen("file.txt", "r") or exit("Unable to open file!");

    // Fájl végéig bejárja
    while (!feof($file)) {
        //echo fgets($file) . "<br>"; // soronként
        echo fgetc($file);
    }

    fclose($file);
    ?>
</body>

</html>