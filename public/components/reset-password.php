<style>
.reset_form {
  width: 300px;
  margin: 100px auto;
  display: flex;
  flex-direction: column;
}
input:focus{ 
    outline-style: none;
  box-shadow: none;
  border-color: transparent;
  background-color: red;
  color: white;
}
.reset_input{
    height:30px;
    margin-bottom:10px;
   color:blue;
   font-size:16px;
}
.btn_reset{
    height:30px; 
    background-color:gray;
    color:blue;
    font-size:18px;
}

</style>


<form action="reset-request.inc.php" method="post" class='reset_form'>
    <h1>Reset Your password</h1>
    <input type="text" name="email" placeholder="Enter email" class='reset_input'>
    <button type="submit" name="reset-request-submit" class='btn_reset'>Recive new Password</button>
</form>