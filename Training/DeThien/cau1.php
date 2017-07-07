<?php
	$conn=mysqli_connect('localhost','root','');
	if($conn){
		echo "Ket Noi DATABASE Thanh Cong";

	}else{
		echo "Khong The Ket Noi".mysqli_error($conn);
	}

	//TAO DATABASE
	$sql="CREATE DATABASE IF NOT EXISTS deso3 DEFAULT CHARACTER SET UTF8 COLLATE utf8_unicode_ci";
	if(mysqli_query($conn,$sql)){
		echo "Tao DATABASE deso3 Thanh Cong<br>";
	}else{
		echo "Tao DATABASE That Bai<br>".mysqli_error($conn);
	}
	mysqli_select_db($conn,'deso3');
	//Tao Bang ADMIN
	$sql="CREATE TABLE admin (
	idadm int primary key auto_increment,
	username varchar(50) not null, 
	password varchar(50) not null
	)";
	if(mysqli_query($conn,$sql)){
		echo "Tao Bang admin Thanh Cong<br>";
	}else{
		echo "Tao Bang admin That Bai<br>".mysqli_error($conn);
	}
	//Tao Bang detai
	$sql="CREATE TABLE detai (
		madetai int primary key auto_increment,
		tendetai varchar(50) not null,
		tennguoihuongdan varchar(50) not null,
		tenhocvien varchar(50) not null,
		diem  int(20) not null,
		namtotnghiep date  not null
	)";
	if(mysqli_query($conn,$sql)){
		echo "Tao Bang detai Thanh Cong<br>";
	}else{
		echo "Tao Bang detai That Bai<br>".mysqli_error($conn);
	}

?>