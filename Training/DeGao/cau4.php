<?php
	include "cau2.php";
?>
<form action="" method="post" enctype="multipart/form-data" name="them">
<table border="1" cellspacing =0  align="center" width = "300px">
	<tr>
		<th align="center" colspan="2">Thêm Bàn Ăn</th>
	</tr>
	<tr>
		<th>Ký Hiệu Bàn</th>
		<td><input type="text" name="kyhieuban"></td>
	</tr>
	<?php
		$sql="SELECT * FROM monan";
		$run=mysqli_query($conn,$sql);
	?>
	<tr>
		<th>Mã Món Ăn</th>
		<td>
			<select name="mamonan">
				<?php
					while ($x=mysqli_fetch_array($run))
					{					
				?>
				<option value="<?php echo $x['mamonan'];?>">
					<?php 
						echo $x['tenmonan'];
					?>
				</option>
				<?php
					}
				?>
			</select>

		</td>
	</tr>
	<tr>
		<th>Số Lượng Món Ăn</th>
		<td><input type="number" name="soluongmonan"></td>
	</tr>
	<tr>
		<th>Tình Trạng</th>
		<td><input type="text" name="tinhtrang" value="Chua Thanh Toan"></td>
	</tr>
	<tr>
	
		<td colspan="2" align="center"><input type="submit" name="them" value="Thêm" id="them"></td>
	</tr>

</table>
</form>
<?php 
	if(isset($_POST["kyhieuban"]))
	{
		$kyhieuban =$_POST['kyhieuban'];
	}
	if(isset($_POST["mamonan"]))
	{
		$mamonan =$_POST['mamonan'];
	}
	if(isset($_POST["soluongmonan"]))
	{
		$soluongmonan =$_POST['soluongmonan'];
	}
	if(isset($_POST["tinhtrang"]))
	{
		$tinhtrang =$_POST['tinhtrang'];
	}
if(isset($_POST['them']))
{
	$sql="INSERT INTO banan(kyhieuban,mamonan,soluongmonan,tinhtrang) VALUES('$kyhieuban','$mamonan','$soluongmonan','$tinhtrang')";
	$run2=mysqli_query($conn,$sql);
	if(isset($run2)){
		echo "<p align='center'>Them Thanh Cong<br>";
		echo "<a href='cau4.php'>Click Them Tiep</a>";
			}else{
		echo "Them That Bai";
		header('location:cau4.php');
	}

}

?>