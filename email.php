<?php    
if (!isset($_POST['txtAccCode']))
{
//If not isset -> set with dummy value
$_POST['txtAccCode'] = "undefine";
}
// Define your user array
$access_codeArray = array("555","000","789","456","123");
$access_code = $_POST['txtAccCode'];
$result = in_array($access_code, $access_codeArray); 
  if ($_POST['txtAccCode'] != $result) {
  ?>
  <style type="text/css">
  #login {margin:0 auto; width:500px;}
  .login {font-family:"Verdana", sans-serif;border:2px solid #3753f5;}
.login p {font-size:13.0px;}
.login p {padding-left:10px;}
h2.login {padding:10px;}
</style>
<div id="login">
<h2 class="login">Login</h2>  
<form class="login" name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">     
<p>
<label for="txtAccCode">Codigo de acesso:</label>    
<br /><input type="text" title="Enter Access Code" name="txtAccCode" /></p>     
<p><input type="submit" name="Submit" value="Login" /></p>  
</form> 
</div> 
<?php  
echo '<script> alert ("Please enter a valid access code to continue.");; </script>';
}  else {  ?>

<?php if(empty($errors) && $_POST)    #not erros, user validated then
        {
 exit(header('Location: email.php));
}
php>
