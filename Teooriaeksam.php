<?php
global $yhendus;
require_once ("funktsioonid.php");

if(!empty($_REQUEST['teooriatulemus'])){
    teooriatulemus($_REQUEST['teooriatulemus'],$_REQUEST['id']);
}
?>
<!doctype html>
<html>
<head>
    <title>Teooriaeksam</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
    <h1>Jalgrattaeksami süsteem</h1>
    <p>Registreerimine ja eksamite haldamine</p>
</header>
<nav>
    <a href="registreerimine.php">Registreerimine</a>
    <a href="Teooriaeksam.php">Teooriaeksam</a>
    <a href="Slaalom.php">Slaalom</a>
    <a href="Ringtee.php">Ringtee</a>
    <a href="Tänav.php">Tänavasõit</a>
    <a href="Lubadeleht.php">Lubadeleht</a>
</nav>
<main>
    <h1>Teooriaeksam</h1>
    <table>
        <?php
        kuvatabel();
        ?>
    </table>
</main>
</body>
</html>
