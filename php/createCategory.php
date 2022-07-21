<head>
<?php
    include 'templates/admin/head.html';
?>
</head>
<br/>

	<div class="col-lg-3 col-md-3 col-sm-3" id="category-col-1">
		<a href="./adminCategory.php" target="_parent"><button class="btn btn-success">BACK</button></a>
	</div>

<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$category = "";
$category_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$category = trim($_POST["category"]);
	
    // Validate category
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please enter a category.";
    } elseif(!filter_var($input_category, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $category_err = "Please enter a valid category.";
    } else{
        $category = $input_category;
    }
    
    // Check input errors before inserting in database
    if(empty($category_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO bookcategories (category) VALUES (?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_category);
            
            // Set parameters
			$param_category = $category;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                //header("location: index.php");
				?>
				<br/>
				<div class="col-lg-3 col-md-3 col-sm-3" id="bookcategory-col-1">
					<label>Category added</label>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3" id="bookcategory-col-2">
					<button type="button" class="btn btn-success" id="addcategory" onclick='window.location="./adminCategory.php"'>BACK</button>
				</div>
				<?php
				exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    //unset($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
    
        <div class="container" id="create-container">
            <div class="row" id="create-row">
                <div class="col-md-12" id="create-col">
                    <h2 class="mt-5">Create New Category</h2>
                    <p>Please fill this form and submit to add new category record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					    <div class="form-group">
                            <label>Active Categories</label>
							
							<select type="text" name="category" class="form-control <?php echo (!empty($category_err)) ? 'is-invalid' : ''; ?>">
								<?php
									// Attempt select query execution
									$sql = "SELECT id, category FROM bookcategories ORDER BY bookcategories.id asc";
									//echo $sql;
									if($result = mysqli_query($link, $sql)){
										//echo mysqli_num_rows($result);
										if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													//echo "AAa";
													echo "<option value=" . $row['id'] . ">".$row['category']."</option>";
													//echo "<option value='aaaa'>bbbb</option>";
												}
											// Free result set
											mysqli_free_result($result);
										} else{
											echo '<div class="alert alert-danger"><em>No categories were found.</em></div>';
										}
									} else{
										echo "Oops! Something went wrong. Please try again later.";
									}
				 
									// Close connection
									//unset($link);
								?>
								
							</select>

                            <span class="invalid-feedback"><?php echo $category_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Add Category</label>
                            <input type="text" name="category" class="form-control <?php echo (!empty($category_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $category; ?>">
                            <span class="invalid-feedback"><?php echo $category_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-primary" value="Reset">
                    </form>
                </div>
            </div>        
        </div>
    
</body>
</html>