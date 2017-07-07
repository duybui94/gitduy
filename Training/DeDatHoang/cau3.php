<?php		
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>De So 2</title>
	<meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="banner">
			<div class="logo">
				Công Ty : THHHMTV DuyBui
				<img src='img/logo.jpg' alt="logo" width="150" height="150"'><br>
				Website : <a href="cau3.php">www.duybui.com.vn</a>	<br>		
				Email 	: xeko1st@gmail.com<br>
			</div>
			<div class="banner2">
				<img src='img/banner.jpg' alt="logo" width="850" height="150"'>
		</div>
			<div class="demuc" align="center"> 
			<h4>ĐỀ MỤC</h4>

		<?php
		if (isset($_SESSION['login'])){
           echo 'Xin Chào,'.$_SESSION['login'];
			echo "<a href='cau5.php'><br>Câu5<br></a>";
			echo  "  <a href='cau6.php'>Câu6<br></a>";
			echo  " <a href='cau7.php'>Câu7<br></a> ";
			echo  " <a href='cau8.php'>Câu7<br></a> ";
		   	echo  " <a href='cau8.php'>Câu8(Logout)<br></a> ";
       }
       else{
           echo 'Bạn chưa đăng nhập';
          echo "<a href='cau4.php'><br>Câu4(Login)<br></a>";
          	echo "<a href='cau5.php'><br>Câu5<br></a>";
			echo  "  <a href='cau6.php'>Câu6<br></a>";
			echo  " <a href='cau7.php'>Câu7<br></a> ";
			
       }
		
		?>

		

			</div>
	</div>

</body>
</html>