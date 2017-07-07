<?php 
include "cau2.php";

?>
<form action="" name="thanhtoan" method="post" enctype="multipart/form-data">
<table width = "50%" border =1 cellspacing = 0 align="center">
<tr>
<th colspan='11'> Thanh Toán Bàn Ăn</th>
</tr>
<tr>
<th>Mã Bàn</th>
<th>Tên Món Ăn</th>
<th>Mã Món Ăn</th>
<th>Miêu Tả</th>
<th>Tình Trạng</th>
<th>Số Lượng</th>
<th>Gía</th>
<th>Tổng Tiền Bàn</th>
<th>Số Tiền Cần Thanh Toán</th>
<th colspan="2">Quản Lý</th>
<?php 
if(isset($_GET['id'])){


	$sql="SELECT * FROM monan,banan WHERE monan.mamonan=banan.mamonan AND banan.tinhtrang='Chua Thanh Toan' AND banan.maban=$_GET[id] ";
 	$run=mysqli_query($conn,$sql);
?>
</tr>
<?php
 	while ($x=mysqli_fetch_array($run))
 	{
 		$tienban=$x['gia']*$x['soluongmonan'];
 		$vat=$tienban*(10/100);
 		$tong=$tienban+$vat;
 ?>
<tr>
	<th> <?php echo $x['maban'] ?></th>
	<th> <?php echo $x['tenmonan'] ?> </th>
	<th> <?php echo $x['mamonan'] ?> </th>
	<th> <?php echo $x['mieuta'] ?></th>
	<th> <?php echo $x['tinhtrangmonan'] ?></th>
	<th> <?php echo $x['soluongmonan'] ?></th>
	<th> <?php echo $x['gia'] ?></th>
	<th> <?php echo $tienban ?> </th>
	<th> <?php echo $tong ?> </th>
	<th><input type="submit" value="Thanh Toán" name="thanhtoan"></th>
	</tr>
<?php 
}
?>
</tr>

</table>
</form>
<?php
	if(isset($_POST['thanhtoan'])){
	$sql="UPDATE banan SET tinhtrang='Da Thanh Toan' WHERE maban=$_GET[id] ";
	$run2=mysqli_query($conn,$sql);
	echo "<p align='center'>Thanh Toán Thành Công";
	echo "<a href='cau5.php'>Click Vào Đây Tiếp Tục Thanh Toán</a>";
	header('location:cau5.php');


}
?>
<?php
}
?>