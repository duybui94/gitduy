<?php
	
	$conn=mysqli_connect('localhost','root','');
	if(!$conn){
		echo "Kết Nối Thất Bại".mysqli_error($conn);
	}
	//Tao Database
	$sql="CREATE DATABASE IF NOT EXISTS deso2 DEFAULT CHARACTER SET UTF8 COLLATE  UTF8_UNICODE_CI";
	if(mysqli_query($conn,$sql)){
		echo "Tao DATABASE deso2 Thành Công<br>";
	}else{
		echo "Tao DATABASE Thất Bại".mysqli_error($conn);
	}
	mysqli_select_db($conn,'deso2');
	
	//Tao TABLE
	 $sql="CREATE TABLE tourdulich (
	 	matour int primary key auto_increment,
	 	tentour varchar(50) not null,
	 	tomtatlichtrinh varchar(50) not null,
	 	gia int(50) not null,
	 	thoigianxuathanh date not null,
	 	songay int(50) not null,
	 	tinhtrang varchar(50)  DEFAULT 'Con' not null

	 )";
	 if(mysqli_query($conn,$sql)){
	 	echo "Tao Bang tourdulich Thành Công<br>";
	 }else{
	 	echo "Tao Bang tourdulich Thất Bại<br>".mysqli_error($conn);
	 }
	 //Tao Bang Khach
	  $sql="CREATE TABLE khach (
	 	makhach int primary key auto_increment,
	 	hovaten varchar(50) not null,
	 	tuoi int(20) not null,
	 	gioitinh varchar(50) not null,
	 	matour int not null,
	 	songuoidi int(20),
	 	FOREIGN KEY (matour) REFERENCES tourdulich(matour)

	 )";
	 if(mysqli_query($conn,$sql)){
	 	echo "Tao Bang khach Thành Công<br>";
	 }else{
	 	echo "Tao Bang khach Thất Bại<br>".mysqli_error($conn);
	 }
	 //Tao Bang ADMIN
	  $sql="CREATE TABLE admin (
	 	idadm int primary key auto_increment,
	 	username varchar(50) not null,
	 	password varchar(50) not null

	 )";
	 if(mysqli_query($conn,$sql)){
	 	echo "Tao Bang admin Thành Công<br>";
	 }else{
	 	echo "Tao Bang admin Thất Bại<br>".mysqli_error($conn);
	 }
?>