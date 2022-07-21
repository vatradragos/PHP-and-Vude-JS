<head>
<?php
    include 'templates/admin/head.html';
?>
</head>
<?php
// Process delete operation after confirmation
if(isset($_GET["id"]) && !empty($_GET["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM bookcategories WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            //header("location: index.php");
			?>
			<br/>
			<div class="col-lg-3 col-md-3 col-sm-3" id="bookcategory-col-1">
				<label>Category deleted</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3" id="bookcategory-col-2">
				<button type="button" class="btn btn-success" id="addcategory" onclick='history.back();window.location=document.referrer;'>BACK</button>
			</div>
			<?php
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    //unset($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            width: 600px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container" id="delete-container">
        <div class="row" id="delete-row">
            <div class="col-md-12" id="delete-col">
                <h2 class="mt-5 mb-3">Delete Record</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="alert alert-danger">
                        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                        <p>Are you sure you want to delete this category record?</p>
                        <p>
                            <input type="submit" value="Yes" class="btn btn-danger">
                            <a href="index.php" class="btn btn-secondary">No</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>        
    </div>
</body>
</html>