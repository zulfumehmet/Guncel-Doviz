<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=db_adi", "kullanici_adi", "sifre");
} catch ( PDOException $e ){
     print $e->getMessage();
}

// reklam kodları //

$sidebaryanreklam = '<a href="#" title="Side Bar Rekalm Alani"><img src="images/reklam-300-250.png"></a>';
$anasayfareklam = '<a href="#" title="Side Bar Rekalm Alani"><img src="images/reklam-728x90.jpg"></a>';

?>