<?php
	include "cau2.php";
?>
<form action="" name="timkiem" method="POST">
<table align="center" cellpadding="0" width="300px" border="1">
		<tr>
		<th colspan="2">Tìm Kiếm</th>
		</tr>
		<tr>
		<th>Nhập</th>
		<td> <input type="text" name="noidungtimkiem"></td>
		</tr>
		<tr>
			<th colspan="2" align="center"><input type="submit" name="timkiem"></th>
		</tr>
</table>
</form>
<table align="center" cellpadding="0" width="500px" border="1">
	<tr>
		<td>STT</td>
		<td>Mã Đề Tài</td>
		<td>Tên Đề Tài</td>
		<td>Tên Người Hướng Dẫn</td>
		<td>Tên Học Viên</td>
		<td>Điểm</td>
		<td>Năm Tốt Nghiệp</td>
	</tr>
<?php
	if(isset($_POST['timkiem'])){
		  $noidungtimkiem=addslashes($_POST['noidungtimkiem']);
		if(empty($noidungtimkiem)){
			echo "Bạn Cần Nhập Nội Dung Tìm Kiếm";
		}else{
		$sql="SELECT * FROM detai WHERE  tendetai LIKE '%$noidungtimkiem%' OR tenhocvien LIKE '%$noidungtimkiem%' OR tennguoihuongdan LIKE '%$noidungtimkiem%' ";
		$run=mysqli_query($conn,$sql);
		if(mysqli_num_rows($run)!=""){
			$stt=0;
			while($x=mysqli_fetch_array($run)){
				$stt++;
				echo "<tr>";
				echo "<td>" .$stt. "</td>";
				echo "<td>" .$x['madetai']. "</td>";
				echo "<td>" .$x['tendetai']. "</td>";
				echo "<td>" .$x['tennguoihuongdan']. "</td>";
				echo "<td>" .$x['tenhocvien']. "</td>";
				echo "<td>" .$x['diem']. "</td>";
				echo "<td>" .$x['namtotnghiep']. "</td>";
				echo "</tr>";

			}
			}
			else{
				echo " <p align='center'>Hiện Không Có Đề Tài Vừa Tìm";
		}

		}

	}
?>
</table>