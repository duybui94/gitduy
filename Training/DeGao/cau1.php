<?php
//ketnoi
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	die('Khong The Ket Noi'.mysqli_conect_error($conn));
}
//Tao Database
$sql="CREATE DATABASE IF NOT EXISTS duybui94 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci";
if(mysqli_query($conn,$sql)){
	echo "Tao Database thanh cong";
}else{
	echo "Tao Database that bai".mysqli_error($conn);
}
mysqli_select_db($conn,'duybui94');
//Tao Bang ADMIN
$sql="CREATE TABLE admin 
	(
		idadm int primary key auto_increment,
		username varchar(50) not null,
		password varchar(50) not null
	)	
	";
if(mysqli_query($conn,$sql)){
	echo "Tao Bang ADMIN thanh cong";
}else{
	echo "Tao Bang ADMIN that bai".mysqli_error($conn);
}
//Tao TABLE monan
$sql="CREATE TABLE monan (
	mamonan int primary key auto_increment,
	tenmonan varchar(50) not null,
	mieuta varchar(50) not null,
	gia int(10) not null,
	tinhtrang varchar(50) default 'Con' not null
)";
if(mysqli_query($conn,$sql)){
	echo "<br>Tao Bang monan Thanh Cong";
}else{
	echo"<br>Tao Bang monan That Bai".mysqli_error($conn);
}
//Tao Bang banan
$sql="CREATE TABLE banan (
	maban int primary key auto_increment,
	kyhieuban varchar(50) not null,
	mamonan int not null,
	soluongmonan int(10) not null,
	tinhtrang varchar(50) default 'Chua Thanh Toan' not null,
	FOREIGN KEY (mamonan) REFERENCES monan(mamonan)
)";
if(mysqli_query($conn,$sql)){
	echo "<br>Tao Bang banan Thanh Cong";
}else{
	echo"<br>Tao Bang banan That Bai".mysqli_error($conn);
}
//Them Du lieu
$sql="INSERT INTO monan (tenmonan,mieuta,gia) VALUES('tom','tomsu','100');";
$sql .="INSERT INTO monan (tenmonan,mieuta,gia) VALUES('cua','cuadong','200');";
$sql .="INSERT INTO monan (tenmonan,mieuta,gia) VALUES('ca','cabien','300');";
$sql .="INSERT INTO monan (tenmonan,mieuta,gia) VALUES('muc','mucbien','400');";
$sql .="INSERT INTO monan (tenmonan,mieuta,gia) VALUES('ga','gatroi','500');";

if(mysqli_multi_query($conn,$sql)){
	echo "<br>Them Thanh Cong";
}else{
	echo"<br>Them That Bai".mysqli_error($conn);
}
mysqli_close($conn);
?>