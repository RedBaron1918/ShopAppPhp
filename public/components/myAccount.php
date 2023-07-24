<style>
  #top-header{
    margin-top:10px;
  }
</style>
<!-- TOP HEADER -->
<div id='top-header'>
				<div class="containersergo" >
					
					<ul class="header-links pull-right">
						<li>
                <?php
                  include "db.php";
                  if(isset($_SESSION["uid"])){
                    $sql = "SELECT usersName FROM users WHERE usersId='$_SESSION[uid]'";
                    $query = mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($query);
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["usersName"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="../components/logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                  ?>
                               
                                </li>				
					</ul>
					
				</div>
			</div>
			<!-- /TOP HEADER -->
			

		<!-- /HEADER -->
		
		<div class="modal fade" id="Modal_login" role="dialog">
      <div class="modal-dialog">
													
                          <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
          </div>
            <div class="modal-body">
              <?php
                include "login_form.php";
    
              ?>
          
            </div>
                            
          </div>
													
         </div>
      </div>
      <div class="modal fade" id="Modal_register" role="dialog">
        <div class="modal-dialog" style="">

                          <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
           </div>
              <div class="modal-body">
                <?php
                     include "register_form.php";
    
                ?>
          
              </div>
                            
          </div>

         </div>
       </div>
		