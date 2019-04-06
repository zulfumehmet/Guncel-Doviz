<?php
include ("header.php");
?>

	<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">

					<div class="main-post">

						<div class="blog-post-inner">

							<h3>Güncel Altın Fiyatları</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Birim Adı</th>
        <th>Alış</th>
        <th>Satış</th>
        <th>Fark</th>
      </tr>
    </thead>
    <tbody>
      
      
					  <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=1 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$altinalis= $row['alis'];
			$altinsatis= $row['satis'];
 
			?>

<tr>
						<td><a href="detayaltin-1.html">Gram Altın</a></td>
						<td><?php echo $altinalis; ?></td>
						<td><?php echo $altinsatis; ?></td>
							<td><?php 
							if ($altinalis == $altinalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;">></i>';
                                    } elseif ($altinalis > $altinalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($altinalis < $altinalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?></td>
					  </tr>
					 
        <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=2 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$blezikalis= $row['alis'];
			$bleziksatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=2 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$blezikalis2= $row['alis'];
			$bleziksatis2= $row['satis'];
 
			?>
				  
					  <tr>
						<td><a href="detayaltin-2.html">22 Ayar Bilezik</a></td>
						<td><?php echo $blezikalis; ?></td>
						<td><?php echo $bleziksatis; ?></td>
							<td><?php 
							if ($blezikalis == $blezikalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($blezikalis > $blezikalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($blezikalis < $blezikalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
					  
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
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=3 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$onsalis2= $row['alis'];
			$onssatis2= $row['satis'];
 
			?>
				  
					  <tr>
						<td><a href="detayaltin-3.html">Ons</a></td>
						<td><?php echo $onsalis; ?></td>
						<td><?php echo $onssatis; ?></td>
							<td><?php 
								if ($onsalis == $onsalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($onsalis > $onsalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($onsalis < $onsalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
					  
        <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=4 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$hasalis= $row['alis'];
			$hassatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=4 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$hasalis2= $row['alis'];
			$hasatis2= $row['satis'];
 
			?>
				   
					  <tr>
						<td><a href="detayaltin-4.html">Has Altın</a></td>
						<td><?php echo $hasalis; ?></td>
						<td><?php echo $hassatis; ?></td>
							<td><?php 
							if ($hasalis == $hasalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($hasalis > $hasalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($hasalis < $hasalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
        <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=5 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$cumhuriyetalis= $row['alis'];
			$cumhuriyetsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=6 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$cumhuriyetalis2= $row['alis'];
			$cumhuriyetatis2= $row['satis'];
 
			?>
				    
					  <tr>
						<td><a href="detayaltin-5.html">Cumhuriyet Altını</a></td>
						<td><?php echo $cumhuriyetalis; ?></td>
						<td><?php echo $cumhuriyetsatis; ?></td>
							<td><?php 
							if ($cumhuriyetalis == $cumhuriyetalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($cumhuriyetalis > $cumhuriyetalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($cumhuriyetalis < $cumhuriyetalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
        <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=6 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$tamaalis= $row['alis'];
			$tamasatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=6 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$tamaalis2= $row['alis'];
			$tamasatis2= $row['satis'];
 
			?>
				    
					  <tr>
						<td><a href="detayaltin-6.html">Tam Altın</a></td>
						<td><?php echo $tamaalis; ?></td>
						<td><?php echo $tamasatis; ?></td>
							<td><?php 
							if ($tamaalis == $tamaalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($tamaalis > $tamaalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($tamaalis < $tamaalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
					  
					  <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=7 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$yarimalis= $row['alis'];
			$yarimsatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=7 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$yarimalis2= $row['alis'];
			$yarimatis2= $row['satis'];
 
			?>
				  
					  <tr>
						<td><a href="detayaltin-7.html">Yarım Altın</a></td>
						<td><?php echo $yarimalis; ?></td>
						<td><?php echo $yarimsatis; ?></td>
							<td><?php 
							if ($yarimalis == $yarimalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($yarimalis > $yarimalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($yarimalis < $yarimalis2){
                                echo '<i class="fas fa-chevron-down" style="color:red;"></i>';
                                    }
                                ?>
                        </td>
					  </tr>
				  
				  <?php
					$sql = $db->prepare("SELECT * FROM altin WHERE kategori=8 ORDER BY tarih DESC");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$ceyrekalis= $row['alis'];
			$ceyreksatis= $row['satis'];
 
			?>
				<?php
					$sql = $db->prepare("	SELECT * FROM altin WHERE kategori=8 ORDER BY tarih DESC LIMIT 1,1");
			$sql->execute(array(
				'5'
			));

			$row=$sql->fetch(PDO::FETCH_ASSOC);
			$ceyrekalis2= $row['alis'];
			$ceyrekatis2= $row['satis'];
 
			?>
				  
					  <tr>
						<td><a href="detayaltin-8.html">Çeyrek Altın</a></td>
						<td><?php echo $ceyrekalis; ?></td>
						<td><?php echo $ceyreksatis; ?></td>
							<td><?php 
							if ($ceyrekalis == $ceyrekalis2) {
                                echo '<i class="fas fa-equals" style="color:aqua;"></i>';
                                    } elseif ($ceyrekalis > $ceyrekalis2) {
                                echo '<i class="fas fa-chevron-up" style="color:Deepskyblue;"></i>';
                                    } elseif ($ceyrekalis < $ceyrekalis2){
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


	
<?php
include ("footer.php");
?>