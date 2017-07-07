<?php  
	$conn=mysqli_connect('localhost','root','');
	if(!$conn){
		echo "Ket Noi That Bai".mysqli_error($conn);
	}
	//Tao DATABASE
	$sql="CREATE DATABASE IF NOT EXISTS deso4 DEFAULT CHARACTER SET UTF8 COLLATE utf8_unicode_ci ";
	if(mysqli_query($conn,$sql)){
		echo "Tao Database deso4 Thanh Cong<br>";
	}else{
		echo "Tao Database That Bai".mysqli_error($conn);
	}
	mysqli_select_db($conn,'deso4');
	//TAO BANG ADMIN
	$sql="CREATE TABLE admin (
		idadm int primary key auto_increment,
		username varchar(50) not null,
		password varchar(50) not null
	)";
	if(mysqli_query($conn,$sql)){
		echo "Tao Bang admin Thanh Cong<br>";
	}else{
		echo "Tao Bang admin That Bai".mysqli_error($conn);
	}
	//TAO BANG hanghoa
	$sql="CREATE TABLE hanghoa (
			mahanghoa int primary key auto_increment,
			tenhanghoa varchar(50) not null,
			tenhang varchar(50) not null,
			mieuta varchar(50) not null,
			giaban int(20) not null,
			soluong int(20) not null

	)";
	if(mysqli_query($conn,$sql)){
		echo "Tao Bang hanghoa Thanh Cong<br>";
	}else{
		echo "Tao Bang hanghoa Thai Bai".mysqli_error($conn);
	}
	//TAO BANG DON HANG
	$sql="CREATE TABLE donhang (
				madonhang int primary key auto_increment,
				tenkhach varchar(50) not null,
				sodienthoai varchar(50) not null,
				diachinhanhang varchar(50) not null,
				ghichu varchar(50) not null
	)";
	if(mysqli_query($conn,$sql)){
		echo "Tao Bang donhang Thanh Cong<br>";
	}else{
		echo "Tao Bang donhang That Bai".mysqli_error($conn);
	}
?>