<?php
	$title="Login Page";
include 'header.php' ;
$errmsg="";
////// 
$serverName = "LAPTOP-NR11MB83"; 
$uid = "sa";   
$pwd = "Password@1";  
$databaseName = "Project"; 

/*$connectionInfo = array( "UID"=>$uid,"PWD"=>$pwd,"Database"=>$databaseName); 
//$sqlstr="select UserName from TB_User where UserID='"+$_POST['loginid']+"' and Password='"+$_POST['pwd']+"'";  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if(isset($_POST['submit']))
{
	$user=mysqli_query($connectionInfo,$sqlstr);
	if(empty($user))
	{
		$errmsg="Incorrect LoginID or Password.";	
	}
}
sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);
*/  
//////
?>


<form action="<?php if(!empty($errmsg))echo htmlspecialchars($_SERVER['PHP_SELF']);else echo "loggedin.php" ?>" id="loginform" 
method="post" role="form">

<div class="inner">
<input name="loginid" type="text" maxlength="50" placeholder = "Login ID" size="50" required/>
<br />
<br />
<input name="pwd" type="password" maxlength="50" placeholder = "Password" size="50" required/>
<br />
<a><?php echo $errmsg ?></a>
<br />
<button id="submit" form="loginform" type="submit">Login</button>
<a class="newaccountlink" color="white" href="signup.php">  Create New Account</a>
</div>

</form>

<style>

.inner{
    width: 300px;
    height: 100px;
	opacity:0.8;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}
.inner input
{
	padding: 0px 10px;
	border-color:#FFF;
	background-color:#000;
	color:#FFF;
}
button
{
	border-color:#666;
	color:#FFF;
}
button:hover
{
	border-color:#FFF;
	background-color:#666;
	color:#FFF;
}
.newaccountlink
{
	border-color:#666;
	color:#FFF;
}
.newaccountlink:hover
{
	border-color:#00F;
	color:#00F;
}
</style>
 