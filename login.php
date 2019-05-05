<!DOCTYPE html>
<html>
<head>
	<title>FP-Statkom Register</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css"> 
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
	<link href="css/animate.css" rel="stylesheet" type="text/css">
</head>
<body>

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

<!--daftar-->
<section id="daftar">
	 <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Login</h2>
      </div>
      <div class="row">
 
        <div class="col-lg-12 wow fadeInLeft delay-06s">
          <form class="form" method="POST" action="klasifikasi.php">
			<h3>Nama</h3>
            <input class="input-text" type="text" name="nama"> <value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
			<h3>Password</h3>
			<input class="input-text" type="password" name="pass_signup" value="">
            <input class="input-btn" type="submit" value="Register">
          </form>
        </div>
		
      </div>
    </section>
  </div>
</section>
<!--daftar-->

</body>
</html>