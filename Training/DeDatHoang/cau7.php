<?php 
include "cau2.php";
?>
<form action="" method="post" enctype="multipart/form-data" name="themkhach">
	<table cellpadding=0 align="center" width="300px" border="1">
		<tr>
		<th align="center" colspan="2">Thêm Thông Tin Khách</th>
		</tr>
		<tr>
		<th>Họ Và Tên</th>
		<td><input type="text" name="hovaten"></td>
		</tr>
		<tr>
		<th>Tuổi</th>
		<td><input type="number" name="tuoi"></td>
		</tr>
		<th>Gioi Tinh</th>
		<td><input type="text" name="gioitinh"></td>
		</tr>
		<?php 
			$sql="SELECT * FROM tourdulich";
			$run=mysqli_query($conn,$sql);
		?>
		<tr>
		<th>Mã Tour</th>
		<td>
			<select  name="matour"> 
			<?php 
			while ($x=mysqli_fetch_array($run))
				{
		?>
					<option  value= <?php echo $x['matour']; ?> >  
						<?php echo $x['tentour']; ?>
					</option>
					<?php
				}
				?>
			</select>

		</td>
		</tr>
		<tr>
		<th>Số Người Đi</th>
		<td><input type="number" name="songuoidi"></td>
		</tr>
		<td colspan="2" align="center"><input type="submit" name="themkhach" value="Thêm"></td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST['hovaten'])){
		$hovaten=$_POST['hovaten'];
	}
	if(isset($_POST['tuoi'])){
		$tuoi=$_POST['tuoi'];
	}
	if(isset($_POST['gioitinh'])){
		$gioitinh=$_POST['gioitinh'];
	}
	if(isset($_POST['matour'])){
		$matour=$_POST['matour'];
	}
	if(isset($_POST['songuoidi'])){
		$songuoidi=$_POST['songuoidi'];
	}
	if(isset($_POST['themkhach'])){
		$sql="INSERT INTO khach (hovaten,tuoi,gioitinh,matour,songuoidi) VALUES ('$hovaten','$tuoi','$gioitinh','$matour','$songuoidi')";
		$run=mysqli_query($conn,$sql);
		if(isset($run)){
		echo "<p align='center'>Them Thanh Cong<br>";
		echo "<a href='cau7.php'>Click Them Tiep</a>";
			}else{
		echo "Them That Bai";
		header('location:cau7.php');
	}
	
	}
?>