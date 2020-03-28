
<?php    
   
      $sql="select *from orders1 ";
      $query=mysqli_query($conn,$sql);
         $count=0;
         while($row=mysqli_fetch_array($query))
            {  
            	$count=$count+1;
            	

            }
            
?>


<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Order Management
								</a>
								<ul id="togglePages" class="collapse unstyled">
								
								
									<li>
										<a href="deliver.php">
											<i class="icon-inbox"></i>
											Pending orders
								
<b class="label green pull-right"><?php echo $count; ?></b>


										</a>
									</li>
								</ul>
							</li>
						
						</ul>
 

						<ul class="widget widget-menu unstyled">
                                <li><a href="home2.php"><i class="menu-icon icon-tasks"></i>Home </a></li>
                                <li><a href="insert-ads.php"><i class="menu-icon icon-tasks"></i>insert ads</a></li>
                                <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Product </a></li>
                                <li><a href="show.php"><i class="menu-icon icon-table"></i>Manage Products </a></li>
                                 <li><a href="showads.php"><i class="menu-icon icon-table"></i>Manage Ads </a></li>
                                 <li><a href="userinfo.php"><i class="menu-icon icon-table"></i>Users info </a></li>
                        
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
