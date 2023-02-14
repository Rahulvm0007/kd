<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
							
                         <h6> Welcome</h6><h4><?php session_start(); echo ucfirst($_SESSION['adminName']); ?></h4>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                       
                        <li class="sidebar-item active ">
                            <a href="adminHome.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>PRODUCT DETAILS</span>
                            </a>
                            <ul class="submenu ">
<!--
                                <li class="submenu-item ">
                                    <a href="addProduct.php">ADD PRODUCT</a>
                                </li>
-->
                                <li class="submenu-item ">
                                    <a href="adminViewProduct.php">VIEW ALL PRODUCT</a>
                                </li>
                              
                                
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>BUYER DETAILS</span>
                            </a>
                            <ul class="submenu ">
								
                                <li class="submenu-item ">
                                    <a href="adminViewBuyers.php">VIEW BUYERS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminViewPurchase.php">VIEW PURCHASE</a>
                                </li>
                                
                            </ul>
                        </li>

                       

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>SELLER DETAILS</span>
                            </a>
                            <ul class="submenu ">
								 <li class="submenu-item ">
                                    <a href="adminAddRequest.php">ADD REQUEST</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="adminViewRequest.php">VIEW REQUEST</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminViewKudumbasree.php">VIEW KUDUMBASREE</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminViewSuggestions.php">VIEW SUGGESTIONS</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="adminViewProceeds.php">VIEW PROCEEDS</a>
                                </li>
                                
                              
                            </ul>
                        </li>

                        

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>CATEGORIES</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="addCategory.php">ADD CATEGORY</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="addItem.php">ADD ITEM</a>
                                </li>
                                
                            </ul>
                        </li>
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>STOCK DETAILS</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="addProduct.php">ADD PRODUCT</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-sweetalert.html">VIEW ALL PRODUCT</a>
                                </li>
                                
                                
                            </ul>
                        </li>
						
						<li class="sidebar-item  ">
                            <a href="adminLogout.php" class='sidebar-link'>
                               <i class="bi bi-box-arrow-right"></i>
                                <span>LOGOUT</span>
                            </a>
                        </li>
                       


                 
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>