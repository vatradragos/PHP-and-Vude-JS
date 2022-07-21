<head>
<?php
    include 'templates/index/head.html';
?>
</head>
	
<br/>

<div class="col-lg-3 col-md-3 col-sm-3" id="books-col-2">
	<a href="adminBooks.php" target="_parent"><button class="btn btn-success">BACK</button></a>
</div>

<br/><br/>
	
<?php
$target_dir = "./images/books/";
//echo $_GET['id'];
$target_file = $target_dir . $_GET['id'] . '.jpg';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<br/>File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "<br/>File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "<br/>Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  echo "<br/>Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow only jpg file formats
if($imageFileType != "jpg") {
  echo "<br/>Sorry, only JPG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<br/>Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<br/>The file ". htmlspecialchars( $_GET['id'] . '.jpg'). " has been uploaded.";
  } else {
    echo "<br/>Sorry, there was an error uploading your file.";
  }
}
?>