<!DOCTYPE html>
<html>
    <head>
    <?php
        include 'templates/admin/head.html';
    ?>
    </head>
<body>

<br/>

<div class="col-lg-3 col-md-3 col-sm-3" id="books-col-2">
	<a href="adminBooks.php" target="_parent"><button class="btn btn-success">BACK</button></a>
</div>

<br/><br/>

<form action="loadBookCoverProcess.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
  Select image to upload (only JPG files are allowed, maximum size 2MB):<br/><br/>
  <input type="file" class="btn btn-success" name="fileToUpload" id="fileToUpload"><br/><br/>
  <input type="submit" class="btn btn-success" value="Upload Image" name="submit"><br/><br/>
</form>

</body>
</html>