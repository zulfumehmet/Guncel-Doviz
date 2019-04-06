<?php
$gelen_deger=$_GET["doviz"];

include ("header.php");
?>

	<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">

					<div class="main-post">

						<div class="blog-post-inner">
						    
<div id="grafikcontainer" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


        <script id="rendered-js">
          
Highcharts.chart('grafikcontainer', {
  chart: {
    type: 'line' },

  title: {
    text: '<?php
if ($gelen_deger == 1) {
    echo "Haftalık ABD Dolar Kuru";
} elseif ($gelen_deger == 2) {
    echo "Haftalık Euro Kuru";
} elseif ($gelen_deger == 3) {
    echo "Haftalık İngiltere Sterlin Kuru";
} elseif ($gelen_deger == 4) {
    echo "Haftalık Kanada Dolar Kuru";
} elseif ($gelen_deger == 5) {
    echo "Haftalık İsviçre Frang Kuru";
} elseif ($gelen_deger == 6) {
    echo "Haftalık Suudi Riyal Kuru";
} elseif ($gelen_deger == 7) {
    echo "Haftalık Japon Yen Kuru";
} elseif ($gelen_deger == 8) {
    echo "Haftalık Avusturalya Dolar Kuru";
} elseif ($gelen_deger == 9) {
    echo "Haftalık Norveç Kron Kuru";
} elseif ($gelen_deger == 10) {
    echo "Haftalık Danimarka Kron Kuru";
} elseif ($gelen_deger == 1) {
    echo "Haftalık İsveç Kuru";
} 

else {
    echo "Değer Hatalı Kontrol Ediniz";
}
?>' },

  subtitle: {
    text: 'zulfumehmet.com' },

  xAxis: {
    categories: [<?php
						$query = $db->query("SELECT * FROM doviz WHERE kategori = $gelen_deger AND id %3 =1 LIMIT 70", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          print '"'.$row['tarih'] .'",';
     }
}?>] },

  yAxis: {
    title: {
      text: 'TL' } },


  plotOptions: {
    line: {
      dataLabels: {
        enabled: true },

      enableMouseTracking: false } },


  series: [{
    name: '<?php
if ($gelen_deger == 1) {
    echo "ABD Dolar / TL";
} elseif ($gelen_deger == 2) {
    echo "Euro / TL";
} elseif ($gelen_deger == 3) {
    echo "GBP / TL";
} elseif ($gelen_deger == 4) {
    echo "CAD / TL";
} elseif ($gelen_deger == 5) {
    echo "CHF / TL ";
} elseif ($gelen_deger == 6) {
    echo "SR / TL";
} elseif ($gelen_deger == 7) {
    echo "JPY / TL";
} elseif ($gelen_deger == 8) {
    echo "AUD / TL";
} elseif ($gelen_deger == 9) {
    echo "NOK / TL";
} elseif ($gelen_deger == 10) {
    echo "DKK / TL";
} elseif ($gelen_deger == 11) {
    echo "SEK / TL";
} 
else {
    echo "a küçüktür b";
}
?>',
    data: [<?php $query = $db->query("SELECT * FROM doviz WHERE kategori = $gelen_deger AND id %3 =1 LIMIT 70", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          print ''.str_replace(",",".",$row['alis']).', ';
     }
}
							
						?>] },
  ] });
          //# sourceURL=pen.js
        </script>




	
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Tarih</th>
      <th scope="col">Alış</th>
      <th scope="col">Satış</th>
    </tr>
  </thead>
  <?php
						$query = $db->query("SELECT * FROM doviz WHERE kategori = $gelen_deger AND id %3 =1 LIMIT 70", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          print '<tbody><tr><th scope="row">'.$row["tarih"].'</th><td>'.$row["alis"].'</td><td>'.$row["satis"].'</td></tr></tbody>';
     }
}?>
  
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