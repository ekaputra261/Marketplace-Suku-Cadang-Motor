<?php
  require_once "Database.php";
  if(isset($_GET['id'])){
	$id=$_GET['id']; 
	$db=new Database();
	$foto=$db->getFoto($id);
	$hasil=$db->delproduk($id);
	if ($hasil){
	  if ($foto!=""){
	    unlink("img/".$foto);
	  }	  		
	  header("location:index.php");  
	}
	else
	  echo "Hapus data gagal..";	
  }
