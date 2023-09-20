<?php
include "../../../assets/config/db.php";

if(isset($_POST['submit']))
{
	//ambil data
	$target_dir = "../images/";
	$judul = $_POST['judul'];
	$tanggal = date_format(new datetime($_POST['tanggal']),"Y-m-d H:i:s"); //ubah format jam dari 12hr ke 24hr
	$artikel = mysqli_real_escape_string($koneksi, $_POST['artikel']);
	$tagging = $_POST['tagging'];
	$errorfoto = 1;
	$newfilename=NULL;
	
	// Check File Format and file size 5MB
	if ((($_FILES["gambar"]["type"] == "image/jpeg") || ($_FILES["gambar"]["type"] == "image/jpg") || ($_FILES["gambar"]["type"] == "image/png")) && ($_FILES["gambar"]["size"] < 5242880)) {
		
		// Jika ada error lain di file gambar
		if ($_FILES["gambar"]["error"] > 0) { 
				echo "Return Code: " . $_FILES["gambar"]["error"] . "<br />";
				die ("Error: File Foto Error");
				$errorfoto=0;
				$newfilename=NULL;	
			}

		// Jika aman tdk ada error, diberi nama baru ymdhis
		else {
			
			$namafoto = $_FILES["gambar"]["name"];
			$file_ext = strtolower(substr($namafoto, strripos($namafoto,'.'))); //extensi file dibuat lowercase
			$newfilename = date('YmdHis').$file_ext;
			$errorfoto=1;
			//move_uploaded_file($_FILES["u_fotoktp"]["tmp_name"],"fotoktp/".$newfilename_ktp);				
		}
	}

	//echo "Format foto tidak sesuai JPG-JPEG / Ukuran foto terlalu besar melebihi 5 MB";
	else {   
		die ("Error: File Gambar Tidak Sesuai Persyaratan Sorry, only JPG, JPEG, PNG files are allowed atau Ukuran foto melebihi 5 MB), <a href=\"javascript:history.back()\">Kembali ke halaman sebelumnya</a>");
		$errorfoto=0;
		$newfilename=NULL;
	}

	// Apabila foto sdh tidak ada kendala, lanjut ke input database 
	if($errorfoto==1) {
		$inserttodb = mysqli_query($koneksi,"INSERT INTO artikel VALUES ('','$judul','$tanggal','$newfilename','$artikel','checked','$tagging')");
		
		if($inserttodb) { //jika query sukses, file dipindah ke direktori
			move_uploaded_file($_FILES["gambar"]["tmp_name"],"../images/".$newfilename);
			header('Location: index.php?done');
		}
		else {
			// echo "error ".mysqli_error($koneksi);
			die("Query insert gagal, <a href=\"javascript:history.back()\">Kembali ke halaman sebelumnya</a>");
		}
	}
}

else {
	header('Location: index.php');
}


// =========================================================================================================================
// w3 template

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// } =========================================================================================================



?>