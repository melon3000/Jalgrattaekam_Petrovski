<?php
global $yhendus;
require_once ("funktsioonid.php");

if(!empty($_REQUEST["teooriatulemus"])){
    teoriatulemus($_REQUEST["teooriatulemus"],$_REQUEST["id"]);
}
?>
<!doctype html>
<html>
<head>
    <title>Teooriaeksam</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php include ("header.php")?>
<main>
    <h1>Teooriaeksam</h1>
    <table>
        <?php
        kuvatabel();
        ?>
    </table>
</main>
<?php require("footer.php");?>
</body>
</html>