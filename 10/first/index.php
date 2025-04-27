<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <b>
    <?php 
    //print ("Hello Web!");
    /*
    Megyjegyzés    
    */

    /*
    //$szam1 = 6;
    //$szam2 = 14;
    $tarolo = "felhasznalo";
    $$tarolo = "Anna";
    // lehetne egyszerűen csak:
    // $felhasznalo = "Anna";
    // vagy
    // ${"felhasznalo"} = "Anna"
    3// persze ekkor nem kellenek dinamikus változók
    print "$felhasznalo<br>";
    print $$tarolo;
    print "<br>";
    print "${$tarolo}<br>";
    print "${'felhasznalo'}<br>";
    */

    /*
    $egyikValtozo = 42;
    // $masikValtozo = $egyikValtozo;
    // $masikValtozo-ba $egyikValtozo tartalmának másolata kerül
    $masikValtozo = &$egyikValtozo;
    // $masikValtozo-ba $egyikValtozo-ra mutató hivatkozás kerül
    $egyikValtozo = 325;
    print $masikValtozo; // kiírja, hogy 42
    */

    /*
    $proba = 5;
    print gettype($proba); // integer
    print "<br>"; // új sor, hogy ne follyanak össze a típusnevek
    $proba = "öt";
    print gettype($proba); // string
    print "<br>";
    $proba = 5.0;
    print gettype($proba); // double
    print "<br>";
    $proba = true;
    print gettype($proba); // boolean
    print "<br>";
    */

    /*
    $ki_tudja_milyen_tipusu = 3.14;
    print gettype( $ki_tudja_milyen_tipusu ); // double
    print " - $ki_tudja_milyen_tipusu<br>"; // 3.14
    settype( $ki_tudja_milyen_tipusu, "string" );
    print gettype( $ki_tudja_milyen_tipusu ); // string
    print " - $ki_tudja_milyen_tipusu<br>"; // 3.14
    settype( $ki_tudja_milyen_tipusu, "integer" );
    print gettype( $ki_tudja_milyen_tipusu ); // integer
    print " - $ki_tudja_milyen_tipusu<br>"; // 3
    settype( $ki_tudja_milyen_tipusu, "double" );
    print gettype( $ki_tudja_milyen_tipusu ); // double
    print " - $ki_tudja_milyen_tipusu<br>"; // 3.0
    settype( $ki_tudja_milyen_tipusu, "boolean" );
    print gettype( $ki_tudja_milyen_tipusu ); // boolean
    print " - $ki_tudja_milyen_tipusu<br>"; // 1

    define("konstans",2);
    print konstans;
    */

    /*
    $hangulat = "boldog";
    if ( $hangulat == "boldog" )
    {
    print "Hurrá, jó kedvem van!";
    }
    else
    {
    print "$hangulat vagyok, nem boldog.";
    }
    */

    /*
    $hetnapja = "Vasárnap";
    switch( $hetnapja )
    {
    case "Péntek":
    print "Kikapcsolni a vekkert, holnap nem kell dolgozni!<br>";
    case "Hétfõ":
    case "Szerda":
    print "Ma délelõtt dolgozom<br>";
    break;
    case "Kedd":
    case "Csütörtök":
    print "Ma délután dolgozom<br>";
    break;
    case "Vasárnap":
    print "Bekapcsolni a vekkert!<br>";
    case "Szombat":
    print "Hurrá, szabadnap!<br>";
    break;
    default:
    print "Azt hiszem ideje lenne egy új programoz ót és/vagy egy jobb naptárat
    keríteni<br>";
    break;
    }
    */

    /*
    $szamlalo = 1;
    while ( $szamlalo <= 12 )
    {
    print "$szamlalo kétszerese ".($szamlalo*2)."<br>";
    $szamlalo++;
    */

    /*
    $szam = 200;
    do
    {
    print "Végrehajtások száma: $szam<br>\n";
    $szam++;
    } while ( $szam > 200 && $szam < 400 );
    */

    /*
    $szamlalo = -4;
    for ( ; $szamlalo <= 10; $szamlalo++ )
    {
    if ( $szamlalo == 0 )
    continue;
    $seged = 4000/$szamlalo;
    print "4000 $szamlalo részre osztva $seged.<br>";
    }
    */

    /*
    print "<table border=1>\n"; // HTML táblázat kezdete
    for ( $y=1; $y<=15; $y++ )
    {
    print "<tr>\n"; // sor kezdete a HTML táblázatban
    for ( $x=1; $x<=15; $x++ )
    {
    print "\t<td>"; // cella kezdete
    print ($x*$y);
    print "</td>\n"; // cella vége
    }
    print "</tr>\n"; // sor vége
    }
    print "</table>\n"; // táblázat vége
    */

    /*
    function nagyHello()
    {
    print "<h1>HELLO!</h1>";
    }
    nagyHello();
    */

    /*
    function sorKiir( $sor )
    {
    print ("$sor<br>\n");
    }
    sorKiir("Ez egy sor");
    sorKiir("Ez már egy másik sor");
    sorKiir("Ez megint egy új sor"); 
    */

    /*
    function osszead( $elsoszam, $masodikszam )
    {
    $eredmeny = $elsoszam + $masodikszam;
    return $eredmeny;
    }
    print osszead(3,5); // kiírja, hogy "8„ 
    */

    /*
    function koszon()
    {
    print "Jó napot!<br>";
    }
    $fuggveny_tarolo = "koszon";
    $fuggveny_tarolo()
    */

    /*
    $elet=42;
    function eletErtelme()
    {
    global $elet;
    print "Az élet értelme: $elet<br>";
    }
    eletErtelme();
    */

    /*
    function szamozottCimsor( $cimszoveg )
    {
    static $fvHivasokSzama = 0;
    $fvHivasokSzama++;
    print "<h1>$fvHivasokSzama. $cimszoveg</h1>";
    }
    szamozottCimsor("Alkatrészek");
    print("Az alkatrészek széles skáláját gyártjuk<p>");
    szamozottCimsor("Mütyürök");
    print("A legjobbak a világon<p>");  
    */
    
    /*
    function meretez( $szoveg, $meret )
    {
    print "<font size=\"$meret\" face=\"Helvetica,Arial,Sans-Serif\"> $szoveg</font>";
    }
    meretez("Egy címsor<br>",5);
    meretez("szöveg<br>",3);
    meretez("újabb szöveg<BR>",3);
    meretez("még több szöveg<BR>",3);
    */


    /*
    function meretez( $szoveg, $meret = 3)
    {
    print "<font size=\"$meret\" face=\"Helvetica,Arial,Sans-Serif\"> $szoveg</font>";
    }
    meretez("Egy címsor<br>",5);
    meretez("szöveg<br>");
    meretez("újabb szöveg<BR>");
    meretez("még több szöveg<BR>"); 
    */

    /*
    function ottelTobb( $szam )
    {
    $szam += 5;
    }
    $regiSzam = 10;
    // Pointer error TODO
    // ottelTobb(&$regiSzam)
    ottelTo bb( $regiSzam );
    print( $regiSzam );
    */

    /*
    $karakter = array
    (
    array (
    "nev" => "János",
    "tevekenyseg" => "szuperhős",
    "eletkor" => 30,
    "kulonleges kepesseg" => "röntgenszem"
    ),
    array (
    "nev" => "Szilvia",
    "tevekenyseg" => "szuperhős",
    "eletkor" => 24,
    "kulonleges kepesseg" => "nagyon erős"
    ),
    array (
      "nev" => "Mari",
      "tevekenyseg" => "főgonosz",
      "eletkor" => 63,
      "kulonleges kepesseg" => "nanotechnológia"
      )
    );
    print $karakter[0]["tevekenyseg"]; // kiírja, hogy szuperhős
    */
    
    /*
    // key - value
    // "hashmap"
    $karakter = array(
      "nev" => "János",
      "tevekenyseg" => "szuperhős",
      "eletkor" => 30,
      "kulonleges kepesseg" => "röntgenszem"
    );

    foreach($karakter as $kulcs => $ertek){
      print "$kulcs = $ertek<br>";
    } 
    */

    /*
    // merge 2 arrays
    $elso = array("a", "b", "c");
    $masodik = array(1,2,3);
    $harmadik = array_merge($elso,$masodik);
    foreach($harmadik as $ertek){
      print "$ertek<br>";
    }
    */

    /*
    $elso = array("a", "b", "c");
    $elemszam = array_push($elso, 1, 2, 3);
    print "Összesen $elemszam elem van az \$elso tömbben<P>";
    foreach($elso as $ertek){
      print "$ertek<br>";
    }
    */

    /*
    $egy_tomb = array("a", "b", "c");
    while(count($egy_tomb)){
      $ertek = array_shift($egy_tomb);
      print "$ertek<br>";
      print "$egy_tomb-ben most " . count($egy_tomb). " elem van<br>";
    }
    */

    /*
    $tomb = array(10, 2, 9);
    sort($tomb);
    print '__Rendezés szám szerint__<br>';
    foreach($tomb as $elem){
      print "$elem<br>";
    }
    $tomb[] = "a";
    sort($tomb);
    print '__Rendezés ábécésorrend szerint__<br>';
    foreach($tomb as $elem){
      print "$elem<br>";
    }
    */
    
    /*
    $a_tomb = array("elso" => 5, "masodik" => 2, "harmadik" => 1);
    asort($a_tomb); // A karakterlánc kulcsok megmaradnak
    foreach($a_tomb as $kulcs => $ertek){
      print "$kulcs = $ertek<br>";
    }
    */

    $tomb = array("x" => 5, "a" => 2, "f" => 1);
    ksort($tomb); // kulcs alapján rendezi
    foreach($tomb as $kulcs => $ertek){
      print "$kulcs = $ertek<br>";
    }
    ?>
    </b>
  </body>
</html>
