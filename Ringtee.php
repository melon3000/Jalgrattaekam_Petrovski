<?php
require_once("funktsioonid.php");
global $yhendus;
if(!empty($_REQUEST["korras_id"])){
    RingteeKorras($_REQUEST["korras_id"]);
}

if(!empty($_REQUEST["vigane_id"])){
    RingteeVigane($_REQUEST["vigane_id"]);
}

?>
<!doctype html>
<html>
<head>
    <title>Ringtee</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1>Ringtee</h1>
<table>
    <?php
        ringteeTabel();
    ?>
</table>
</body>
</html> 