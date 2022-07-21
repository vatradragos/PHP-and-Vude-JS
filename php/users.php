<?php
session_start();
?>
<!-- Created by Dragoş Vatră  0743503240  vatradragos@yaoo.com -->
<!-- Start web page -->
<!DOCTYPE html>
<html lang="en">
<!-- Start <head> elements -->
<head>
    <?php
        include 'templates/users/head.html';
    ?>
</head>
<!-- Stop <head> elements -->
<!-- Start <body> elements -->
<body class="container" id="body-container">
    <!-- Start <header> elements -->
    <!-- Start upp button section -->
    <?php
        include 'templates/users/uppbtn.html';
    ?>
    <!-- Stop upp button section -->
    <!-- Start banner section -->
    <?php
        include 'templates/users/banner.html';
    ?>
    <!-- Stop banner section -->
    <!-- Start users section -->
    <?php
        include 'templates/users/users.html';
    ?>
    <!-- Stop users section -->
    <!-- Start title section -->
    <?php
        include 'templates/users/title.html';
    ?>
    <!-- Stop title section -->
    <!-- Stop <header> elements -->
    <!-- Start <section> elements -->
    <!-- Start borrow section -->
    <?php
        include 'templates/users/borrow.html';
    ?>
    <!-- Stop borrow section -->
    <!-- Start books section -->
    <?php
        include 'templates/users/children_books.html';
    ?>
    <?php
        include 'templates/users/history_books.html';
    ?>
    <?php
        include 'templates/users/novels_books.html';
    ?>
    <?php
        include 'templates/users/science_books.html';
    ?>
    <!-- Stop books section -->
    <!-- Start price section -->
    <?php
        include 'templates/users/price.html';
    ?>
    <!-- Stop price section -->
    <!-- Start table title section -->
    <?php
        include 'templates/users/table.html';
    ?>
    <!-- Stop table title section -->
    <!-- Start table DB elements -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Borrowed Books</h2>
                        <!--<a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Client</a>-->
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT CONCAT(forename, ' ', surname) AS user, CONCAT(title, ' - author: ', author) AS book FROM borrows, users, books WHERE borrows.iduser = users.id AND borrows.idbook = books.id";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>User</th>";
                                        echo "<th>Book</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
								$contor=1;
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $contor . "</td>";
                                        echo "<td>" . $row['user'] . "</td>";
                                        echo "<td>" . $row['book'] . "</td>";
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
    </div>
    <!-- Stop table DB elements -->
    <!-- Start logout section -->
    <?php
        include 'templates/users/logout.html';
    ?>
    <!-- Stop logout section -->
    <!-- Stop <section> elements -->
    <!-- Start <footer> elements -->
    <?php
        include 'templates/users/footer.html';
    ?>
    <!-- Stop <footer> elements -->
</body>
<!-- Start <body> elements -->
<!-- Start <script> elements -->
<script src="js/script.js"></script>
<script src="js/uppbtn.js"></script>
<script src="js/mood.js"></script>
<script src="js/price.js"></script>
<!-- Stop <script> elements -->
</html>
<!-- Stop web page -->