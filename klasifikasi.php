<!DOCTYPE html>
<html>

<head>
  <title>FP-Statkom Klasifikasi</title>
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
        <li><a href="dataset.php">Data Set</a></li>
        <li><a href="login.php">Kembali</a></li>
      </ul>
      </div> 
    </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--awal-->
<section id="tes_asma">
  <center>
  <img src="img/kalkulasi1.png">
  <div class="row">
    <h2 align="top"><strong>H e l l o!<strong></h2>
      <h3 align="middle"><strong>
        <font size="5.5">          
          <?php 
          echo $_POST['nama'];
          ?>
        </font><strong></h3> 
</section>
<!--awal--> 

<section id="tes_asma">
<center>
 <body> 
  <form method="post" action="perhitungan.php">   
  <p>&nbsp;</p>
  <table border="6" cellpadding="10" style="border-color:#FFD700">
    <tr>
      <th style="background-color:#FF4500;"><center>Jenis Kelamin</th>
      <th style="background-color:#FF4500;"><center>Usia</th>
      <th style="background-color:#FF4500;"><center>Status</th>
      <th style="background-color:#FF4500;"><center>Pekerjaan</th>
      <th style="background-color:#FF4500;"><center>Penghasilan</th>
      <th style="background-color:#FF4500;"><center>Masa Asuransi</th>
      <th style="background-color:#FF4500;"><center>Cara Pembayaran</th>
    </tr>
    <tbody>
      <tr>
        <td align="center">
          <select name="input1" style="background-color: black">
            <option value="input1a">.Laki - Laki.</option>
            <option value="input1b">Wanita</option>
          </select>
        </td>
        <td align="center">
          <select name="input2" style="background-color: black">
            <option value="input2a">> 40 Th</option>
            <option value="input2b">30 - 40 Th</option>  
            <option value="input2c">20 - 29 Th</option>
          </select>
        </td>
        <td align="center">
          <select name="input3" style="background-color: black">
            <option value="input3a">Kawin</option>  
            <option value="input3b">Belum Kawin</option>
          </select>
        </td>
        <td align="center">
          <select name="input4" style="background-color: black">
            <option value="input4a">Wiraswasta</option>
            <option value="input4b">PNS</option>
            <option value="input4c">Pegawai Swasta</option>
          </select>
        </td>
        <td align="center">
          <select name="input5" style="background-color: black">
            <option value="input5a">> 50 Juta</option>
            <option value="input5b">25 - 50 Juta</option>
            <option value="input5c">< 25 Juta</option>
          </select>
        </td>
        <td align="center">
          <select name="input6" style="background-color: black">
            <option value="input6a">> 15 Tahun</option>
            <option value="input6b">11 - 15 Tahun</option>
            <option value="input6c">5 - 10 Tahun</option>
          </select>
        </td>
        <td align="center">
          <select name="input7" style="background-color: black">
            <option value="input7a">Tahunan</option>
            <option value="input7b">..  Semesteran  .</option>
            <option value="input7c">Triwulan</option>
          </select>
        </td>

      </tr>
    </tbody>
  </table>
  <br><button type="submit" value="Submit" style="background-color: red">Kalkulasi</button>
</form>
<br><br><br>
</section>

<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <div class="footer_bottom"><span>Team Final Project © 2019 <a href="index.php">[Kholil, Sandy, Guntur]</a>. </span> </div>
  </div>
</footer>
<!--Footer-->

</body>
</html></center>