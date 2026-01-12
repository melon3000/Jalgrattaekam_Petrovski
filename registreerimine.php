<?php
require_once("konf.php");
global $yhendus;
 if(isSet($_REQUEST["sisestusnupp"])){
 $kask=$yhendus->prepare(
 "INSERT INTO jalgrattaeksam(eesnimi, perekonnanimi) VALUES (?, ?)"); $kask->bind_param("ss", $_REQUEST["eesnimi"], $_REQUEST["perekonnanimi"]); $kask->execute();
$yhendus->close();
header("Location: teooriaeksam.php?lisatudeesnimi=" . urlencode($_REQUEST['eesnimi']));
     exit();
 }
?>
<!doctype html>
<html>
 <head>
 <title>Kasutaja registreerimine</title>
     <link rel="stylesheet" href="style/style.css">
 </head>
 <body>
 <h1>Registreerimine</h1>
 <?php
 include("header.php");
 if(isSet($_REQUEST["lisatudeesnimi"])){
 echo "Lisati $_REQUEST[lisatudeesnimi]";
 }
 ?>
<form action="?">
 <dl>
 <dt>Eesnimi:</dt>
<dd><input type="text" name="eesnimi" /></dd>
 <dt>Perekonnanimi:</dt>
<dd><input type="text" name="perekonnanimi" /></dd>
 <dt><input type="submit" name="sisestusnupp" value="sisesta" /></dt>  </dl>
</form>
 <?php include("footer.php"); ?>
 </body>
</html>