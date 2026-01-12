<?php
require_once("funktsioonid.php");
global $yhendus;
if(!empty($_REQUEST["korras_id"])){
    slaalomKorras();
}
if(!empty($_REQUEST["vigane_id"])){
    slaalomVigane();
}

?>
<!doctype html>
<html>
<head>
    <title>Slaalom</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php require("header.php");?>
<h1>Slaalom</h1>
<table>
    <?php
        kuvatabel();
    ?>
</table>
<?php require("footer.php");?>
</body>
</html>