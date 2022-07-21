    <head>
    <?php
        include 'templates/admin/head.html';
    ?>
    </head>
	<br/>

	<div class="col-lg-3 col-md-3 col-sm-3" id="category-col-1">
		<a href="./admin.php" target="_parent"><button class="btn btn-success">BACK</button></a>
	</div>
	
	<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Category</h2>
						<div class="col-lg-3 col-md-3 col-sm-3" id="category-col-2">
							<button type="button" class="btn btn-success" id="addcategory" 
								onclick='window.location="./createCategory.php"'>ADD CATEGORY
							</button>
						</div>
                        <!--<a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Client</a>-->
                    </div>
<?php
					// Include config file
                    require_once "./config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT id, category FROM bookcategories";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Category</th>";
										echo "<th>Delete Category</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
								$contor=1;
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $contor . "</td>";
										echo "<td>" . $row['category'] . "</td>";
										echo "<td><a href='./deleteCategory.php?id=".$row['id']."'>Delete</a></td>";
                                    echo "</tr>";
									$contor++;
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    //unset($link);
?>					
                </div>
            </div>        
        </div>
        <style>
        #category-col-2 {
            text-align: center;
        }
    </style>
    </div>