<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
							
                         <h6> Welcome</h6><h4><?php session_start(); echo ucfirst($_SESSION['kName']); ?></h4>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                       
                        <li class="sidebar-item active ">
                            <a href="kudumbasreeHome.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>CATEGORIES</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">FOOD</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">GROCERY</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-breadcrumb.html">STATIONARY</a>
                                </li>
                   
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>PRODUCT</span>
                            </a>
                            <ul class="submenu ">
                                
                               
								 <li class="submenu-item ">
                                    <a href="addSuggestion.php">ADD SUGGESTIONS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="kudumbasreeViewSuggestions.php">VIEW SUGGESTIONS</a>
                                </li>
                                
                            </ul>
                        </li>
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>PROCEEDINGS</span>
                            </a>
                            <ul class="submenu ">
                                
                               
								 <li class="submenu-item ">
                                    <a href="kudumbasreeViewProceeds.php">VIEW PROCEEDS</a>
                                </li>
                                                           
                            </ul>
                        </li>

                        
						
						
						<li class="sidebar-item  ">
                            <a href="kudumbasreeLogout.php" class='sidebar-link'>
                               <i class="bi bi-box-arrow-right"></i>
                                <span>LOGOUT</span>
                            </a>
                        </li>
                       


                 
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>