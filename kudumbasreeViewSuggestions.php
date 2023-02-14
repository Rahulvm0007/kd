<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kudumbasree Page</title>

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
    
	<?php include('kudumbasreeSidemenu.php');  ?>
	
	
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>SUGGESTIONS</h3>
            </div>
            <div class="page-content">
                 <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>LABEL</th>
                                                    <th>IMAGE</th>
                                                    <th>PRICE</th>
													<th>DESCRIPTION</th>
													<th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                    <?php  include('connection.php');
									
									$sess=$_SESSION['kId'];			
                                    $query="select * from suggession where kId='$sess'";
                                    $result=mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result)){ ?>
                                                
                                                <tr>
                                                    <td> <?php echo $row['itemName']; ?></td>
                                                    <td><?php echo $row['label']; ?></td>
                                                    <td><img src="product/<?php echo $row['images']; ?>" height="50" width="50"></td>
                                                    <td><?php echo $row['price']; ?></td>
													<td><?php echo $row['description']; ?></td>
                                                    <td><?php if($row['isActive']==0) 
									                { ?>
										            <button class="btn btn-sm btn-info">Waiting List</button>
                                                    <?php  } elseif($row['isActive']==1) 
									                { ?>
										            <button class="btn btn-sm btn-danger">Rejected</button>
													<?php
									                }
													else	
													{
													?>	
													<button class="btn btn-sm btn-success">Accepted</button>	
													<?php
													}
													?>
                                                </tr>
                                              <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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