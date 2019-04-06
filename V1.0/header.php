<?php
include ("inc/db.php");
?>
<!DOCTYPE HTML>
<html lang="TR">
<head>
	<title>Güncel Döviz Kurları | Zulfu Mehmet</title>
	<base href="https://www.zulfumehmet.tk">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- Stylesheets -->
	<link href="common-css/bootstrap.css" rel="stylesheet">
	<link href="common-css/ionicons.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/flag-icon.css" rel="stylesheet">
    <script src="js/highcharts.js"></script>
    <script src="js/modules/exporting.js"></script>
    <script src="js/modules/export-data.js"></script>

</head>
<body >

	<header>
		<div class="container position-relative no-side-padding">

			<a href="//zulfumehmet.tk" class="logo">LOGO</a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="//zulfumehmet.tk">Ana Sayfa</a></li>
				<li><a href="doviz">Döviz</a></li>
				<li><a href="altin">Altın</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Ne Aramıştınız">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>
	<?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=1 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$dolaralis= $row['alis'];
			$dolarsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=1 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$dolaralis2= $row['alis'];
			$dolarsatis2= $row['satis'];
 
			?>
<div class="container">
  <div class="row grid-columns responsive-table">
  <div class="col-md-2 col">
<table border="0" width="100%">
<tr align="right">
<td><span class="flag-icon flag-icon-us"></td>
<td><?php 
							if ($dolaralis == $dolaralis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($dolaralis > $dolaralis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($dolaralis < $dolaralis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
</tr>

<tr align="center">
<td >Alış:</td>
<td ><?php echo $dolaralis; ?></td>
</tr>
<tr align="center">
<td >Satış:</td>
<td ><?php echo $dolarsatis; ?></td>
</tr>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block btn-sm"><a href="detaydoviz-1.html">Detay</a></button>
</div>
<?php
                    $sql = $db->prepare("SELECT * FROM doviz WHERE kategori=2 ORDER BY tarih DESC");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $euroalis= $row['alis'];
            $eurosatis= $row['satis'];
 
            ?>
                <?php
                    $sql = $db->prepare("   SELECT * FROM doviz WHERE kategori=2 ORDER BY tarih DESC LIMIT 1,1");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $euroalis2= $row['alis'];
            $eurosatis2= $row['satis'];
 
            ?>
  <div class="col-md-2 col">
<table  border="0" width="100%">
<tr align="right">
<td><span class="flag-icon flag-icon-eu"></td>
<td><?php 
                            if ($euroalis == $euroalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($euroalis > $euroalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($euroalis < $euroalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
</tr>

<tr align="center">
<td >Alış:</td>
<td ><?php echo $euroalis; ?></td>
</tr>
<tr align="center">
<td >Satış:</td>
<td ><?php echo $eurosatis; ?></td>
</tr>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block btn-sm"><a href="detaydoviz-2.html">Detay</a></button>
</div>
<?php
                    $sql = $db->prepare("SELECT * FROM doviz WHERE kategori=3 ORDER BY tarih DESC");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $ingsalis= $row['alis'];
            $ingssatis= $row['satis'];
 
            ?>
                <?php
                    $sql = $db->prepare("   SELECT * FROM doviz WHERE kategori=3 ORDER BY tarih DESC LIMIT 1,1");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $ingsalis2= $row['alis'];
            $ingssatis2= $row['satis'];
 
            ?>

  <div class="col-md-2 col">
<table border="0" width="100%">
<tr align="right">
<td><span class="flag-icon flag-icon-gb"></td>
<td><?php 
                            if ($ingsalis == $ingsalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($ingsalis > $ingsalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($ingsalis < $ingsalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
</tr>

<tr align="center">
<td >Alış:</td>
<td ><?php echo $ingsalis; ?></td>
</tr>
<tr align="center">
<td >Satış:</td>
<td ><?php echo $ingssatis; ?></td>
</tr>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block btn-sm"><a href="detaydoviz-3.html">Detay</a></button>
</div>
<?php
                    $sql = $db->prepare("SELECT * FROM altin WHERE kategori=1 ORDER BY tarih DESC");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $altinalis= $row['alis'];
            $altinsatis= $row['satis'];
 
            ?>
                <?php
                    $sql = $db->prepare("   SELECT * FROM altin WHERE kategori=1 ORDER BY tarih DESC LIMIT 1,1");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $altinalis2= $row['alis'];
            $altinsatis2= $row['satis'];
 
            ?>

  <div class="col-md-2 col"><table border="0" width="100%">
<tr align="right">
<td>Gram Altın</td>
<td><?php 
                            if ($altinalis == $altinalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($altinalis > $altinalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($altinalis < $altinalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
</tr>

<tr align="center">
<td >Alış:</td>
<td ><?php echo $altinalis; ?></td>
</tr>
<tr align="center">
<td >Satış:</td>
<td ><?php echo $altinsatis; ?></td>
</tr>
</table><button type="button" class="btn btn-primary btn-lg btn-block btn-sm"><a href="detayaltin-1.html">Detay</a></button></div>
<?php
                    $sql = $db->prepare("SELECT * FROM altin WHERE kategori=3 ORDER BY tarih DESC");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $onsalis= $row['alis'];
            $onssatis= $row['satis'];
 
            ?>
                <?php
                    $sql = $db->prepare("   SELECT * FROM altin WHERE kategori=3 ORDER BY tarih DESC LIMIT 1,1");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $onsalis2= $row['alis'];
            $onssatis2= $row['satis'];
 
            ?>
  <div class="col-md-2 col"><table border="0" width="100%">
<tr align="right">
<td>Ons Fiyatı</td>
<td><?php 
                            if ($onsalis == $onsalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($onsalis > $onsalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($onsalis < $onsalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
</tr>

<tr align="center">
<td >Alış:</td>
<td ><?php echo $onsalis; ?></td>
</tr>
<tr align="center">
<td >Satış:</td>
<td ><?php echo $onssatis; ?></td>
</tr>
</table><button type="button" class="btn btn-primary btn-lg btn-block btn-sm"><a href="detayaltin-3.html">Detay</a></button></div>
<?php
                    $sql = $db->prepare("SELECT * FROM altin WHERE kategori=2 ORDER BY tarih DESC");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $bilezikalis= $row['alis'];
            $bileziksatis= $row['satis'];
 
            ?>
                <?php
                    $sql = $db->prepare("   SELECT * FROM altin WHERE kategori=2 ORDER BY tarih DESC LIMIT 1,1");
            $sql->execute(array(
                '5'
            ));

            $row=$sql->fetch(PDO::FETCH_ASSOC);
            $bilezikalis2= $row['alis'];
            $bileziksatis2= $row['satis'];
 
            ?>


  <div class="col-md-2 col"><table border="0" width="100%">
<tr align="right">
<td>Bilezik</td>
<td><?php 
                            if ($bilezikalis == $bilezikalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($bilezikalis > $bilezikalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($bilezikalis < $bilezikalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
</tr>

<tr align="center">
<td >Alış:</td>
<td ><?php echo $bilezikalis; ?></td>
</tr>
<tr align="center">
<td >Satış:</td>
<td ><?php echo $bileziksatis; ?></td>
</tr>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block btn-sm"><a href="detayaltin-1.html">Detay</a></button>
</div>
</div>

</div>
