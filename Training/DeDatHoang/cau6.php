
  <?php
  include "cau2.php";
  ?>    
            <form action="" method="POST">
                <table cellpadding=0 border="1" align="center" width="300px">
                <tr>
                    <th colspan="2">Tìm Kiếm</th>
                </tr>
                <tr>
                <th>Search:</th>
                <td><input type="text" name="noidungtimkiem" ></td>
                </tr>
                <th align="center" colspan="2"><input type="submit" name="timkiem" value="Search" ></th>
                </table>
            </form>
            <table align="center" width="500" border="1">
    <tr>
      <td >Stt</td>
      <td >Mã Tour</td>
      <td >Tên Tour</td>
      <td >Tóm Tắt</td>
      <td >Gía</td>
      <td >Thời Gian</td>
      <td >Tình Trạng</td>
      <td>Quản Lý</td>
    </tr>
        <?php
            if(isset($_POST['timkiem'])){
                $noidungtimkiem=addslashes($_POST['noidungtimkiem']);
                if(empty($noidungtimkiem)){
                    echo "Ban Cần Nhập Nội Dung Tìm Kiếm";
                }else{

                    $sql="SELECT * FROM tourdulich WHERE tentour LIKE '%$noidungtimkiem%' OR tomtatlichtrinh LIKE '%$noidungtimkiem%' ORDER BY gia DESC ";
                     
                    $run=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($run)!=""){
                                   $stt=1;
                while($x=mysqli_fetch_array($run)){
                $stt++;
              
                echo "<td>".$stt."</td>";
                echo "<td>".$x['matour']."</td>";
                echo "<td>".$x['tentour']."</td>";
                echo "<td>".$x['tomtatlichtrinh']."</td>";
                echo "<td>".$x['gia']."</td>";
                echo "<td>".$x['thoigianxuathanh']."</td>";
                echo "<td>".$x['tinhtrang']."</td>";
              echo " <td> <a href='cau7.php'>Thêm Thông Tin Khách Hàng</a> </td>";
                echo "</tr>";
                }
                }else{
                echo "<tr><td colspan='5' align='center'>Chưa có thành viên nào</td></tr>";
                    
                    }
                
                }
            
         }
         ?>
        </table>
    
        