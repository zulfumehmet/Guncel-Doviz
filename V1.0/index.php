<?php
include ("header.php");
?>
	<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">

					<div class="main-post">

						<div class="blog-post-inner">
						    <?php echo $anasayfareklam; ?>

							<h3 class="text-center">Güncel Döviz Kuru</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Sembol</th>
        <th>Birim Adı</th>
        <th>Alış</th>
        <th>Satış</th>
        <th>Fark</th>
      </tr>
    </thead>
    <tbody>
      
      
					  <tr>
						<td><span class="flag-icon flag-icon-us"></span></td>
						<td>ABD Dolar</td>
						<td><?php echo $dolaralis; ?></td>
						<td><?php echo $dolarsatis; ?></td>
							<td><?php 
							if ($dolaralis == $dolaralis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;">></i>';
                                    } elseif ($dolaralis > $dolaralis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($dolaralis < $dolaralis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
					  </tr>
					 
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
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=2 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$euroalis2= $row['alis'];
			$eurosatis2= $row['satis'];
 
			?>
				  
					  <tr>
						
						<td><span class="flag-icon flag-icon-eu"></td>
						<td>Euro</td>
						<td><?php echo $euroalis; ?></td>
						<td><?php echo $eurosatis; ?></td>
							<td><?php 
							if ($euroalis == $euroalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($euroalis > $euroalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($euroalis < $euroalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
					  
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
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=3 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$ingsalis2= $row['alis'];
			$ingsatis2= $row['satis'];
 
			?>
				  
					  <tr>
						
						<td><span class="flag-icon flag-icon-gb"></td>
						<td>İngiltere Sterlini</td>
						<td><?php echo $ingsalis; ?></td>
						<td><?php echo $ingssatis; ?></td>
							<td><?php 
								if ($ingsalis == $ingsalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($ingsalis > $ingsalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($ingsalis < $ingsalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
					  
        <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=4 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$kndalis= $row['alis'];
			$kndsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=4 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$kndalis2= $row['alis'];
			$kndatis2= $row['satis'];
 
			?>
				   
					  <tr>
						
						<td><span class="flag-icon flag-icon-ca"></td>
						<td>Kanada Doları</td>
						<td><?php echo $kndalis; ?></td>
						<td><?php echo $kndsatis; ?></td>
							<td><?php 
							if ($kndalis == $kndalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($kndalis > $kndalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($kndalis < $kndalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
        <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=5 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$isfalis= $row['alis'];
			$isfsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=6 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$isfalis2= $row['alis'];
			$isfatis2= $row['satis'];
 
			?>
				    
					  <tr>
						
						<td><span class="flag-icon flag-icon-ch"></td>
						<td>İsviçre Frangı</td>
						<td><?php echo $isfalis; ?></td>
						<td><?php echo $isfsatis; ?></td>
							<td><?php 
							if ($isfalis == $isfalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($isfalis > $isfalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($isfalis < $isfalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
        <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=6 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$sudralis= $row['alis'];
			$sudrsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=6 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$sudralis2= $row['alis'];
			$sudratis2= $row['satis'];
 
			?>
				    
					  <tr>
						
						<td><span class="flag-icon flag-icon-sa"></td>
						<td>Suudi Riyali</td>
						<td><?php echo $sudralis; ?></td>
						<td><?php echo $sudrsatis; ?></td>
							<td><?php 
							if ($sudralis == $sudralis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($sudralis > $sudralis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($sudralis < $sudralis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
					  
					  <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=7 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$jayalis= $row['alis'];
			$jaysatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=7 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$jayalis2= $row['alis'];
			$jayatis2= $row['satis'];
 
			?>
				  
					  <tr>
						
						<td><span class="flag-icon flag-icon-jp"></td>
						<td>Japon Yeni</td>
						<td><?php echo $jayalis; ?></td>
						<td><?php echo $jaysatis; ?></td>
							<td><?php 
							if ($jayalis == $jayalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($jayalis > $jayalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($jayalis < $jayalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
				  
				  <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=8 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$audalis= $row['alis'];
			$audsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=8 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$audalis2= $row['alis'];
			$audatis2= $row['satis'];
 
			?>
				  
					  <tr>
						
						<td><span class="flag-icon flag-icon-au"></td>
						<td>Avusturalya Doları</td>
						<td><?php echo $audalis; ?></td>
						<td><?php echo $audsatis; ?></td>
							<td><?php 
							if ($audalis == $audalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($audalis > $audalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($audalis < $audalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
				  
				  <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=9 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$nokalis= $row['alis'];
			$noksatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=9 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$nokalis2= $row['alis'];
			$nokatis2= $row['satis'];
 
			?>
				    
					  <tr>
						
						<td><span class="flag-icon flag-icon-no"></td>
						<td>Norveç Kronu</td>
						<td><?php echo $nokalis; ?></td>
						<td><?php echo $noksatis; ?></td>
							<td><?php 
							if ($nokalis == $nokalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($nokalis > $nokalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($nokalis < $nokalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
				  
				  <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=10 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$dakalis= $row['alis'];
			$daksatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=10 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$dakalis2= $row['alis'];
			$dakatis2= $row['satis'];
 
			?>
				    
					  <tr>
						
						<td><span class="flag-icon flag-icon-dk"></td>
						<td>Danimarka Kronu</td>
						<td><?php echo $dakalis; ?></td>
						<td><?php echo $daksatis; ?></td>
							<td><?php 
							if ($dakalis == $dakalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($dakalis > $dakalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($dakalis < $dakalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
				  
				  <?php
					$sql = $db->prepare("SELECT * FROM doviz WHERE kategori=11 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$isvkalis= $row['alis'];
			$isvksatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM doviz WHERE kategori=11 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$isvkalis2= $row['alis'];
			$isvkatis2= $row['satis'];
 
			?>
				   
					  <tr>
						
						<td><span class="flag-icon flag-icon-se"></td>
						<td>İsveç Kronu</td>
						<td><?php echo $isvkalis; ?></td>
						<td><?php echo $isvksatis; ?></td>
							<td><?php 
							if ($isvkalis == $isvkalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($isvkalis > $isvkalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($isvkalis < $isvkalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
    </tbody>
  </table>
						</div><!-- post-info -->


					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->

				<?php
include ("slider.php");
?>

	<section class="recomended-area section">
		<div class="container">
		    <h3>HABERLER</h3>
		    <div class="alert alert-danger" role="alert">
  Bu özellik yeni güncellemeler ile birlikte gelecektir.
</div>
			</div><!-- row -->

		</div><!-- container -->
	</section>
	
<?php
include ("footer.php");
?>