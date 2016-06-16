				
            <!--  Page content goes here-->
			  
			  <br>
			   <header class="panel-heading">
                            All accounts with their respective positions
							<?php 
								if(isset($_POST['searching'])){
									$query1=mysql_query("SELECT * from `accounts` where `$_POST[category]` like '%$_POST[keyword]%'");
									$_SESSION['category']=$_POST['category'];
								$_SESSION['keyword']=$_POST['keyword'];
								}else{
								$query1=mysql_query("SELECT * from `accounts`");		
								} 	
								
								
							?>
                          </header>
                          <div style="background-color: white;" class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Username</th>
                                  <th>Password</th>
                                  <th>Current Position</th>
                                  <th>Update</th>
                                </tr>
                              </thead>
							  <?php 
								while($row=mysql_fetch_array($query1)){
								
								?>
						  
                              <tbody>
							  
                                <tr>
                                  <td><?php  echo $row['id_no']; ?></td>
                                  <td><?php echo $row['username']; ?></td>
                                  <td><?php echo $row['password']; ?></td>
                                  <td><?php echo $row['position']; ?></td>
                               <?php  echo '<td class="">'."<a href='manage_position2.php?id=".$row['id_no']."'>Edit</a>".'</td>'.'</tr>' ?>
                                  
                                </tr>
								 </tbody>
							<?php
							}
							
							if($query1 === FALSE) { 
								die(mysql_error()); // TODO: better error handling
							}

							?>
                               
                            </table>
							
								<?php
								if(isset($_POST['searching'])){
							?>	
								<a href="print_manage_positions2.php">Generate Report</a>
							<?php
								}else{
							?>
								 <a href="print_manage_positions.php">Generate Report</a>
							<?php
									
								}
							?>
							
                          </div>
					<!-- END -->

                      </section>
                  </div>
              </div>
			  
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
