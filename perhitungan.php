<!DOCTYPE html>
<html>
<head>
  <title>FP-Statkom Perhitungan</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <link href="css/animate.css" rel="stylesheet">
</head>


<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div> 
      <div id="main-nav" class="collapse navbar-collapse navStyle">
      	<ul class="nav navbar-nav" id="mainNav">
        <li><a href="index.php">Kembali</a></li>
      </ul>
      </div> 
    </nav>
    </div>
  </div>
</header>
<!--Header_section--> 
<marquee scrolldelay="100" style="font-family:arial; font-size:20px; color:#000000;" bgcolor="FF4500"><b>Hasil Perhitungan</marquee> 


<body>
<section id="tes_asma">
<div class="inner_wrapper">
<div class="container">
<table border="3" align="center" width="850" style="border-color:#FF0000; background-color:#000000;">
	<tr>
	</tr>
		<tr>
			<td style="color:#F8F8FF;">	

<?php 

 $input1 = $_POST['input1'];
 $input2 = $_POST['input2'];
 $input3 = $_POST['input3'];
 $input4 = $_POST['input4'];
 $input5 = $_POST['input5'];
 $input6 = $_POST['input6'];
 $input7 = $_POST['input7'];

 $prob_lancar = 9/20;
 $prob_kurang_lancar = 4/20;
 $prob_tidak_lancar = 7/20;

 #===========Jenis Kelamin==============
 $ll = 5/9;
 $lkl = 2/4;
 $ltl = 4/7;

 $pl = 4/9;
 $pkl = 2/4;
 $ptl = 3/7;

 #=============Usia=================
$usia3l = 7/9;
$usia3kl = 2/4;
$usia3tl = 3/7;

$usia2l = 2/9;
$usia2kl = 1/4;
$usia2tl = 3/7;

$usia4l = 0/9;
$usia4kl = 1/4;
$usia4tl = 1/7;

#==============Status===================
$kawinl = 4/9;
$kawinkl = 4/4;
$kawintl = 6/7;

$bkawinl = 5/9;
$bkawinkl = 0/4;
$bkawintl = 1/7;

#===========Pekerjaan================
$wl = 6/9;
$wkl = 2/4;
$wtl = 2/7;

$pl = 3/9;
$pkl = 2/4;
$ptl = 2/7;

$psl = 0/9;
$pskl = 0/4;
$pstl = 3/7; 

#============Penghasilan===============//
$p2l = 5/9;
$p2kl = 3/4;
$p2tl = 4/7;

$p3l = 2/9;
$p3kl = 1/4;
$p3tl = 3/7;                                              

$p5l = 2/9;
$p5kl = 0/4;
$p5tl = 0/7;

#===========Asuransi================
$a5l = 2/9;
$a5kl = 1/4;
$a5tl = 2/7;

$a10l = 7/9;
$a10kl = 1/4;
$a10tl = 4/7;

$a15l = 0/9;
$a15kl = 2/4;
$a15tl = 1/7;

#===========Cara Pembayaran================
$sml = 3/9;
$smkl = 1/4;
$smtl = 1/7;

$thl = 3/9;
$thkl = 2/4;
$thtl = 3/7;

$trl = 3/9;
$trkl = 1/4;
$trtl = 3/7;

#===============================
if ($input1 == 'input1a'){
  $temp1 = $input1;
  $lancar1 = $ll;
  $k_lancar1 = $lkl;
  $t_lancar1 = $ltl;
}

if ($input1 == 'input1b'){
  $temp1 = $input1;
  $lancar1 = $pl;
  $k_lancar1 = $pkl;
  $t_lancar1 = $ptl;
}
#===============================
if ($input2 == 'input2b'){ //30-40 th
  $temp2 = $input2;
  $lancar2 = $usia3l;
  $k_lancar2 = $usia3kl;
  $t_lancar2 = $usia3tl;
}

if ($input2 == 'input2c'){ //20 th
  $temp2 = $input2;
  $lancar2 = $usia2l;
  $k_lancar2 = $usia2kl;
  $t_lancar2 = $usia2tl;
}

if ($input2 == 'input2a'){ // > 40 th
  $temp2 = $input2;
  $lancar2 = $usia4l;
  $k_lancar2 = $usia4kl;
  $t_lancar2 = $usia4tl;
}
#===============================
if ($input3 == 'input3a'){
  $temp3 = $input3;
  $lancar3 = $kawinl;
  $k_lancar3 = $kawinkl;
  $t_lancar3 = $kawintl;
}

if ($input3 == 'input3b'){
  $temp3 = $input3;
  $lancar3 = $bkawinl;
  $k_lancar3 = $bkawinkl;
  $t_lancar3 = $bkawintl;
}
#===============================
if ($input4 == 'input4a'){
  $temp4 = $input4;
  $lancar4 = $wl;
  $k_lancar4 = $wkl;
  $t_lancar4 = $wtl;
}

if ($input4 == 'input4b'){
  $temp4 = $input4;
  $lancar4 = $pl;
  $k_lancar4 = $pkl;
  $t_lancar4 = $ptl;
}

if ($input4 == 'input4c'){
  $temp4 = $input4;
  $lancar4 = $psl;
  $k_lancar4 = $pskl;
  $t_lancar4 = $pstl;
}
#===============================
if ($input5 == 'input5c'){ //penghasilan <25 jt
  $temp5 = $input5;
  $lancar5 = $p2l;
  $k_lancar5 = $p2kl;
  $t_lancar5 = $p2tl;
}

if ($input5 == 'input5b'){ //penghasilan 30 jt (25 - 50)
  $temp5 = $input5;
  $lancar5 = $p3l;
  $k_lancar5 = $p3kl;
  $t_lancar5 = $p3tl;
}

if ($input5 == 'input5a'){ //penghasilan > 50 JT
  $temp5 = $input5;
  $lancar5 = $p5l;
  $k_lancar5 = $p5kl;
  $t_lancar5 = $p5tl;
}
#===============================
if ($input6 == 'input6c'){
  $temp6 = $input6;
  $lancar6 = $a5l;
  $k_lancar6 = $a5kl;
  $t_lancar6 = $a5tl;
}

if ($input6 == 'input6b'){
  $temp6 = $input6;
  $lancar6 = $a10l;
  $k_lancar6 = $a10kl;
  $t_lancar6 = $a10tl;
}

if ($input6 == 'input6a'){
  $temp6 = $input6;
  $lancar6 = $a15l;
  $k_lancar6 = $a15kl;
  $t_lancar6 = $a15tl;
}
#===============================
if ($input7 == 'input7b'){
  $temp7 = $input7;
  $lancar7 = $sml;
  $k_lancar7 = $smkl;
  $t_lancar7 = $smtl;
}

if ($input7 == 'input7c'){
  $temp7 = $input7;
  $lancar7 = $trl;
  $k_lancar7 = $trkl;
  $t_lancar7 = $trtl;
}

if ($input7 == 'input7a'){
  $temp7 = $input7;
  $lancar7 = $thl;
  $k_lancar7 = $thkl;
  $t_lancar7 = $thtl;
}

$total_lancar = $lancar1 * $lancar2 * $lancar3 * $lancar4 * $lancar5 * $lancar6 * $lancar7 * $prob_lancar;
$total_k_lancar = $k_lancar1 * $k_lancar2 * $k_lancar3 * $k_lancar4 * $k_lancar5 * $k_lancar6 * $k_lancar7 * $prob_kurang_lancar;
$total_t_lancar = $t_lancar1 * $t_lancar2 * $t_lancar3 * $t_lancar4 * $t_lancar5 * $t_lancar6 * $t_lancar7 * $prob_tidak_lancar;

echo "Hasil Probabilitas Status Calon Nasabah ( P[ Lancar ] ) : <br>
$lancar1 * $lancar2 * $lancar3 * $lancar4 * $lancar5 * $lancar6 * $lancar7 * $prob_lancar = $total_lancar".'<br/>'.'<br/>';

echo "Hasil Probabilitas Status Calon Nasabah ( P[ Kurang Lancar ] ) : <br>
$k_lancar1 * $k_lancar2 * $k_lancar3 * $k_lancar4 * $k_lancar5 * $k_lancar6 * $k_lancar7 * $prob_kurang_lancar = $total_k_lancar".'<br/>'.'<br/>';

echo "Hasil Probabilitas Status Calon Nasabah ( P[ Tidak Lancar ] ) : <br> 
$t_lancar1 * $t_lancar2 * $t_lancar3 * $t_lancar4 * $t_lancar5 * $t_lancar6 * $t_lancar7 * $prob_tidak_lancar = $total_t_lancar".'<br/>'.'<br/>';

if ($total_lancar > $total_k_lancar) {
echo "Jadi Probabilitas Status Calon Nasabah terklasifikasi '.<b><u>Lancar.'";
}
elseif ($total_k_lancar > $total_t_lancar) {
echo "Jadi Probabilitas Status Calon Nasabah terklasifikasi '.<b><u>Kurang Lancar.'";
}
else
  echo "Jadi Probabilitas Status Calon Nasabah terklasifikasi '.<b><u>Tidak Lancar.'";

?>
	</td>
	</tr>
	</div>
	</div>
	<br>
<table>
	<br><br><br><br><br>
	<br><br><br>
</table>

</section>

</body>
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <div class="footer_bottom"><span>Team Final Project © 2019 <a href="index.php">[Kholil, Sandy, Guntur]</a>. </span> </div>
  </div>
</footer>

<br>
</html>
