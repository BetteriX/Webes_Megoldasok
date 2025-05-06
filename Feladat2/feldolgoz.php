<?php
function decode_file($filename)
{
    $key = [5, -14, 31, -9, 3];
    $lines = file($filename);
    $decoded = [];

    foreach ($lines as $line) {
        $line = rtrim($line, "\n");
        $decoded_line = "";
        $key_index = 0;

        for ($i = 0; $i < strlen($line); $i++) {
            $ascii = ord($line[$i]);

            $char = chr($ascii - $key[$key_index]);
            $decoded_line .= $char; // Hozzáfűzi

            $key_index = ($key_index + 1) % count($key);
        }

        $parts = explode('*', $decoded_line);
        if (count($parts) == 2) {
            //echo $parts[0] . ' ' . $parts[1] . "\n\n";
            $decoded[$parts[0]] = $parts[1];
        }
    }
    return $decoded;
}

$email = $_POST['email'];
$password = $_POST['pass'];

$users = decode_file('password.txt');

if (!isset($users[$email])) {
    echo "<p>Nincs ilyen felhasználó.</p>";
    exit;
}

if ($users[$email] != $password) {
    echo "<p>Hibás jelszó. Átírányítás a rendőrségre...</p>";
    header("refresh:3; url=https://www.police.hu");
    exit;
}

// Adatbázis bejelentkezési adatok
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "adatok";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);
$colors = [ // Magyar->Angol
    "piros" => "red",
    "zold" => "green",
    "sarga" => "yellow",
    "kek" => "blue",
    "fekete" => "black",
    "feher" => "white"
];

$result = $conn->query("SELECT titkos FROM tabla WHERE username = '$email'");
$color = $colors[$result->fetch_assoc()['titkos']];

echo
    "<!DOCTYPE html>
    <html lang='hu'>
    
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Final</title>
        <style>
        body {
            background-color: $color;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.4);
            padding: 40px;
            border-radius: 20px;
        }
        </style>
    </head>
    
    <body>
    <div class='container'>
        <h2>Üdv, $email!</h2>
        <h3>A kedvenc színed: $color</h3>
    </div>

    </body>

    </html>
    ";
?>