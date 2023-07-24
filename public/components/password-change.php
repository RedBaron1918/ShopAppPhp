<?php 
 session_start();
 
?>
<style>
.changePwd{
    width:300px;
    margin:100px auto;
    display:flex;
    flex-direction:column;
    text-align: center;
}
input{
    height:30px;
    margin-bottom:10px;
   color:blue;
   font-size:16px;
}
input:focus{ 
    outline-style: none;
  box-shadow: none;
  border-color: transparent;
  background-color: red;
  color: white;
}
.btn_reset{
    height:30px; 
    background-color:gray;
    color:blue;
    font-size:18px;
}
</style>




<form action="reset-request.inc.php" method="post" class="changePwd">
    <h2>Change Password</h2>
    <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">

    <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" placeholder="Enter Email">
    <input type="password" name="new_password" placeholder="Enter new password">
    <input type="password" name="confirm_password" placeholder="Enter confirm password">
    <button type="submit" name="password_update" class='btn_reset'>Password Update</button>
    <?php 
if(isset($_SESSION['status'])){
    ?>
    <h5><?=$_SESSION['status'];?></h5>
    <?php
}
?>
</form>