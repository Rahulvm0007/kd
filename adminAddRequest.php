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
                <h3>ADD REQUEST</h3>
            </div>

			 
			<section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-6">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" method="post" action="requestAction.php" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                   
                                                    <div class="col-md-4">
                                                        <label>Category</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                       <select name="categoryName" class="form-control" onchange="getitem(this.value)">
														 <option>Choose Category</option>   
													<?php
													include('connection.php');    
													$category="select * from category";  
													$res=mysqli_query($con,$category);
													while($row=mysqli_fetch_array($res))
													{
													?>

													<option value="<?php echo $row['catId'] ?>"><?php echo $row['catname']?></option>    

													<?php
													}
													?>    
													</select>
													</div>
                                                    <div class="col-md-4">
                                                        <label>Item Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                       <span id="item"><select name="items" class="form-control"></select>
                                                    </div>
											
                                                   <div class="col-md-4">
                                                        <label>Product Image</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="file" id="first-name" class="form-control"
                                                            name="image" >
                                                    </div>
												
														<div class="col-md-4">
                                                        <label>Quantity</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="first-name" class="form-control"
                                                            name="quantity" placeholder="Requested Amount Per Kg">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>

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
	<script>

function getitem(str) 
{
if (str.length == 0) 
{
document.getElementById("item").value = "";
return;
}
else 
{
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() 
{
if (this.readyState == 4 && this.status == 200) 
{
document.getElementById("item").innerHTML = this.responseText;
}
}
xmlhttp.open("GET", "getItem.php?item="+str, true);
xmlhttp.send();
}
}

</script>    
</body>

</html>