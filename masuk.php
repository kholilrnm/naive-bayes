<?php
	include_once 'config.php';
?>

<?php
	
	if (isset($_POST['text_name']) && isset($_POST['pass']) ){
		$valid = 0;
		
		$name = $_POST['text_name'];
		$pass = $_POST['pass'];
		
		$ssql = "SELECT * FROM daftar_user WHERE nama = '$name'";
		$query = mysql_query($ssql);
		$result = mysql_num_rows($query);
		
		echo "$ssql <br/>";
		
		if ($result > 0) {
			$valid += 1;
		}
		
		$ssql = "SELECT * FROM daftar_user WHERE password = '$pass'";
		$query = mysql_query($ssql);
		$result = mysql_num_rows($query);
		
		echo "$ssql <br/>";
		
		if ($result > 0) {
			$valid += 1;
		}
		
		if ($valid >= 2){
			$ssql = "SELECT * FROM daftar_user WHERE nama = '$name' AND password = '$pass'";
			$query = mysql_query($ssql);
			
			while ($record = mysql_fetch_array($query)){
				$_SESSION['user'] = $record['id_user'];
			}
			header ('location:periksa.php');
		}
		else{
			header ('location:index.php?valid=0');
		}
	}
?>