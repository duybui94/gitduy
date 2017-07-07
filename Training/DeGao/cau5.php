<?php 
include "cau2.php";

?>

<table width = "50%" border =1 cellspacing = 0	align="center">
<tr>
<th colspan="6">Bàn Ăn Chưa Thanh Toán</th>
</tr>
<tr>
<th>STT</th>
<th>Mã Bàn</th>
<th>Ký Hiệu Bàn</th>
<th>Mã Món Ăn</th>
<th>Số Lượng Món Ăn</th>
<th colspan="2">Quản Lý</th>
<?php 
	$sql="SELECT * FROM banan  WHERE tinhtrang='Chua Thanh Toan' ";
 	$run=mysqli_query($conn,$sql);
?>
</tr>
<?php
	$i=1;
 	while ($x=mysqli_fetch_array($run))
 	{

 ?>
<tr>
	<th> <?php echo $i; ?> </th>
	<th> <?php echo $x['maban'] ?></th>
	<th> <?php echo $x['kyhieuban'] ?> </th>
	<th> <?php echo $x['mamonan'] ?> </th>
	<th> <?php echo $x['soluongmonan'] ?></th>
	<th><a href="cau6.php?id=<?php echo $x['maban']; ?> "> Thanh Toán </a></th>
<?php 
$i++;
}
?>
</tr>




</table>