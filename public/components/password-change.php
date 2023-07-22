<?php 
 session_start();
 
?>

<h2>Change Password</h2>
<?php 
if(isset($_SESSION['status'])){
    ?>
    <h5><?=$_SESSION['status'];?></h5>
    <?php
}
?>

<form action="reset-request.inc.php" method="post">
    <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">

    <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" placeholder="Enter Email">
    <input type="password" name="new_password" placeholder="Enter new password">
    <input type="password" name="confirm_password" placeholder="Enter confirm password">
    <button type="submit" name="password_update">Password Update</button>
</form>