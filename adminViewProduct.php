<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    
	<?php include('adminSidemenu.php');  ?>
	
	
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>PRODUCTS</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                             <?php  include('connection.php');
                                    $query="select * from product where isActive='0'";
                                    $result=mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result)){ ?>
							
							<div class="col-12 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div align="center">
                                           <img src="product/<?php echo $row['images']; ?>" width="200" height="150"><br>
											<p><b><?php echo $row['label']; ?>&nbsp; <?php echo $row['itemName']; ?></b></p>	
												
                                            </div>
											<p><b>Sell:₹<?php echo $row['sell']; ?>/Kg</b>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <b>Buy:₹<?php echo $row['buy']; ?>/Kg</b></p>
										</diV>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
							
							
			
            </div>      
          </section>
       </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>Copyright © 2022. All rights reserved.</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>