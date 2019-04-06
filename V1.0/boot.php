<?php
include ("inc/db.php");
?>	 
 

<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Döviz Kurları
              </h1>
            </div>
            <div class="card">
              <table class="table card-table">
                <tr>
                  <th></th>
                  <th></th>
                  <th>Döviz</th>
				  <th>Alış</th>
                  <th>Satış</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>ABD Doları</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$dolar_alis = $bit[0][0];
echo "dolar alis" .$dolar_alis;


 $usd_buying =  mb_substr($dolar_alis,  13,  6);
				  echo $usd_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$dolar_satis = $bit[0][1];
echo $dolar_satis;

$usd_selling =  mb_substr($dolar_satis,  13,  6);
				  echo $usd_selling

?>
                </tr>
				
                <tr>
                  <td>2</td>
                  <td>Euro</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$euro_alis = $bit[0][2];
echo "<br>ero alis" .$euro_alis;
$euro_buying =  mb_substr($euro_alis,  13,  6);
				  echo $euro_buying



?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$euro_satis = $bit[0][3];
echo $euro_satis;
$euro_selling =  mb_substr($euro_satis,  13,  6);
				  echo $euro_selling

?>
                </tr>
				
                <tr>
                  <td>3</td>
                  <td>İngiliz Sterlini</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$ings_alis = $bit[0][4];
echo "<br>sterlin alis" .$ings_alis;
$ings_buying =  mb_substr($ings_alis,  13,  6);
				  echo $ings_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$ings_satis = $bit[0][5];
echo $ings_satis;
$ings_selling =  mb_substr($ings_satis,  13,  6);
				  echo $ings_selling


?>
                </tr>	

                <tr>
                  <td>4</td>
                  <td>Kanada Doları</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$kdolar_alis = $bit[0][6];
echo "<br>Kanada Dolar alis" .$kdolar_alis;
$kdolar_buying =  mb_substr($kdolar_alis,  13,  6);
				  echo $kdolar_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$kdolar_satis = $bit[0][7];
echo $kdolar_satis;
$kdolar_selling =  mb_substr($kdolar_satis,  13,  6);
				  echo $kdolar_selling

?>              </tr>

                <tr>
                  <td>5</td>
                  <td>İsviçre Frangı</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];


?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$isf_alis = $bit[0][8];
echo "<br>isf alis" .$isf_alis;
$isf_buying =  mb_substr($isf_alis,  13,  6);
				  echo $isf_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$isf_satis = $bit[0][9];
echo $isf_satis;
$isf_selling =  mb_substr($isf_satis,  13,  6);
				  echo $isf_selling

?>
                </tr>

                <tr>
                  <td>6</td>
                  <td>Suudi Riyali</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$sar_alis = $bit[0][10];
echo "<br>isf alis" .$sar_alis;
$sar_buying =  mb_substr($sar_alis,  13,  6);
				  echo $sar_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$sar_satis = $bit[0][11];
echo $sar_satis;
$sar_selling =  mb_substr($sar_satis,  13,  6);
				  echo $sar_selling
?>
                </tr>

                <tr>
                  <td>7</td>
                  <td>100 Japon Yeni</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$jay_alis = $bit[0][12];
echo "<br>isf alis" .$jay_alis;
$jay_buying =  mb_substr($jay_alis,  13,  6);
				  echo $jay_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$jay_satis = $bit[0][13];
echo $jay_satis;
$jay_selling =  mb_substr($jay_satis,  13,  6);
				  echo $jay_selling

?>
                </tr>

                <tr>
                  <td>8</td>
                  <td>Avustralya Doları</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$audolar_alis = $bit[0][14];
echo "<br>isf alis" .$audolar_alis;
$audolar_buying =  mb_substr($audolar_alis,  13,  6);
				  echo $audolar_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$audolar_satis = $bit[0][15];
echo $audolar_satis;
$audolar_selling =  mb_substr($audolar_satis,  13,  6);
				  echo $audolar_selling
?>
   </tr>	

                <tr>
                  <td>9</td>
                  <td>Norveç Kronu</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$nrk_alis = $bit[0][16];
echo "<br>isf alis" .$nrk_alis;
$nrk_buying =  mb_substr($nrk_alis,  13,  6);
				  echo $nrk_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$nrk_satis = $bit[0][17];
echo $nrk_satis;
$nrk_selling =  mb_substr($nrk_satis,  13,  6);
				  echo $nrk_selling

?>
                </tr>					
							

                <tr>
                  <td>10</td>
                  <td>Danimarka Kronu</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$dkron_alis = $bit[0][18];
echo "<br>dkron alis" .$dkron_alis;
$dkron_buying =  mb_substr($dkron_alis,  13,  6);
				  echo $dkron_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$dkron_satis = $bit[0][19];
echo $dkron_satis;
$dkron_selling =  mb_substr($dkron_satis,  13,  6);
				  echo $dkron_selling
?>
                </tr>	

                <tr>
                  <td>11</td>
                  <td>İsveç Kronu</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$isk_alis = $bit[0][20];
echo "<br>dkron alis" .$isk_alis;
$isk_buying =  mb_substr($isk_alis,  13,  6);
				  echo $isk_buying
?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/doviz");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$isk_satis = $bit[0][21];
echo $isk_satis;
$isk_selling =  mb_substr($isk_satis,  13,  6);
				  echo $isk_selling
?>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>

<?php 

echo 'USD Alış: '.$usd_buying.'<br>USD Satış: '.$usd_selling.'<br>';
echo 'EUR Alış: '.$euro_buying.'<br>EUR Satış: '.$euro_selling.'<br>';
echo 'INGS Alış: '.$ings_buying.'<br>INGS Satış: '.$ings_selling.'<br>';
echo 'CAD Alış: '.$kdolar_buying.'<br>CAD Satış: '.$kdolar_selling.'<br>';
echo 'ISF Alış: '.$isf_buying.'<br>ISF Satış: '.$isf_selling.'<br>';
echo 'SAR Alış: '.$sar_buying.'<br>SAR Satış: '.$sar_selling.'<br>';
echo 'JAY Alış: '.$jay_buying.'<br>JAY Satış: '.$jay_selling.'<br>';
echo 'AUD Alış: '.$audolar_buying.'<br>AUD Satış: '.$audolar_selling.'<br>';
echo 'NRK Alış: '.$nrk_buying.'<br>NRK Satış: '.$nrk_selling.'<br>';
echo 'DAK Alış: '.$dkron_buying.'<br>DAK Satış: '.$dkron_selling.'<br>';
echo 'ISK Alış: '.$isk_buying.'<br>ISK Satış: '.$isk_selling.'<br>';



$query = $db->prepare("INSERT INTO doviz SET kategori = ?,alis = ?,satis =?");
$insert = $query->execute(array(1,$usd_buying, $usd_selling));
$insert1 = $query->execute(array(2,$euro_buying, $euro_selling));
$insert2 = $query->execute(array(3,$ings_buying , $ings_selling));
$insert3 = $query->execute(array(4,$kdolar_buying , $kdolar_selling));
$insert4 = $query->execute(array(5,$isf_buying , $isf_selling));
$insert5 = $query->execute(array(6,$sar_buying , $sar_selling));
$insert6 = $query->execute(array(7,$jay_buying , $jay_selling));
$insert7 = $query->execute(array(8,$audolar_buying , $audolar_selling));
$insert8 = $query->execute(array(9,$nrk_buying , $nrk_selling));
$insert9 = $query->execute(array(10,$dkron_buying , $dkron_selling));
$insert10 = $query->execute(array(11,$isk_buying , $isk_selling));





if ( $insert && $insert2 && $inster3 ){
    $last_id = $db->lastInsertId();
    print "Kayıt işlemi başarılı!";
}
?>



<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
               Altin Kurları
              </h1>
            </div>
            <div class="card">
              <table class="table card-table">
                <tr>
                  <th></th>
                  <th></th>
                  <th>Döviz</th>
				  <th>Alış</th>
                  <th>Satış</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Gram</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$gram_alis = $bit[0][0];
echo "gram alis" .$gram_alis;


 $gram_buying =  mb_substr($gram_alis,  13,  6);
				  echo $gram_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$gram_satis = $bit[0][1];
echo $gram_satis;

$gram_selling =  mb_substr($gram_satis,  13,  6);
				  echo $gram_selling

?>
                </tr>
				 <tr>
                  <td>1</td>
                  <td>blezik</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$blezik_alis = $bit[0][2];
echo "blezik alis" .$blezik_alis;


 $blezik_buying =  mb_substr($blezik_alis,  13,  6);
				  echo $blezik_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$blezik_satis = $bit[0][3];
echo $blezik_satis;

$blezik_selling =  mb_substr($blezik_satis,  13,  6);
				  echo $blezik_selling

?>
                </tr>
                    <tr>
                  <td>1</td>
                  <td>ons</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$ons_alis = $bit[0][4];
echo "ons alis" .$ons_alis;


 $ons_buying =  mb_substr($ons_alis,  13,  5);
				  echo $ons_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$ons_satis = $bit[0][5];
echo $ons_satis;

$ons_selling =  mb_substr($ons_satis,  13,  5);
				  echo $ons_selling

?>
                </tr>
                                  <td>1</td>
                  <td>has</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$has_alis = $bit[0][6];
echo "has alis" .$has_alis;


 $has_buying =  mb_substr($has_alis,  13,  6);
				  echo $has_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$has_satis = $bit[0][7];
echo $has_satis;

$has_selling =  mb_substr($has_satis,  13,  6);
				  echo $has_selling

?>
                </tr>
                     <tr>
                  <td>1</td>
                  <td>cumhuriyet</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$cumhuriyet_alis = $bit[0][12];
echo "cumhuriyet alis" .$cumhuriyet_alis;


 $cumhuriyet_buying =  mb_substr($cumhuriyet_alis,  13,  5);
				  echo $cumhuriyet_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$cumhuriyet_satis = $bit[0][13];
echo $cumhuriyet_satis;

$cumhuriyet_selling =  mb_substr($cumhuriyet_satis,  13,  5);
				  echo $cumhuriyet_selling

?>
                </tr>
                     <tr>
                  <td>1</td>
                  <td>tama</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$tama_alis = $bit[0][14];
echo "tama alis" .$tama_alis;


 $tama_buying =  mb_substr($tama_alis,  13,  5);
				  echo $tama_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$tama_satis = $bit[0][15];
echo $tama_satis;

$tama_selling =  mb_substr($tama_satis,  13,  5);
				  echo $tama_selling

?>
                </tr>
                     <tr>
                  <td>1</td>
                  <td>yarim</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$yarim_alis = $bit[0][16];
echo "yarim alis" .$yarim_alis;


 $yarim_buying =  mb_substr($yarim_alis,  13,  6);
				  echo $yarim_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$yarim_satis = $bit[0][17];
echo $yarim_satis;

$yarim_selling =  mb_substr($yarim_satis,  13,  6);
				  echo $yarim_selling

?>
                </tr>
                     <tr>
                  <td>1</td>
                  <td>ceyrek</td>
				  
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="time">(.*?)</td>@si',$veri,$bit);

echo $bit[0][0];

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin/");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$ceyrek_alis = $bit[0][18];
echo "ceyrek alis" .$ceyrek_alis;


 $ceyrek_buying =  mb_substr($ceyrek_alis,  13,  6);
				  echo $ceyrek_buying

?>
				  <?php
$veri=file_get_contents("http://uzmanpara.milliyet.com.tr/altin");
preg_match_all('@<td class="">(.*?)</td>@si',$veri,$bit);

$ceyrek_satis = $bit[0][19];
echo $ceyrek_satis;

$ceyrek_selling =  mb_substr($ceyrek_satis,  13,  6);
				  echo $ceyrek_selling

?>
                </tr>
                
              </table>
            </div>
          </div>
        </div>
      </div>

<?php 



$query = $db->prepare("INSERT INTO altin SET kategori = ?,alis = ?,satis =?");
$insert = $query->execute(array(1,$gram_buying, $gram_selling));
$insert1 = $query->execute(array(2,$blezik_buying, $blezik_selling));
$insert2 = $query->execute(array(3,$ons_buying , $ons_selling));
$insert3 = $query->execute(array(4,$has_buying , $has_selling));
$insert4 = $query->execute(array(5,$cumhuriyet_buying , $cumhuriyet_selling));
$insert5 = $query->execute(array(6,$tama_buying , $tama_selling));
$insert6 = $query->execute(array(7,$yarim_buying , $yarim_selling));
$insert7 = $query->execute(array(8,$ceyrek_buying , $ceyrek_selling));

if ( $insert && $insert2 && $inster3 && $inster4 && $inster5 && $inster6 && $inster7 && $inster8 ){
    $last_id = $db->lastInsertId();
    print "Kayıt işlemi başarılı!";
}
?>


