<?php

$title="Sign Up Page";
 include 'header.php' 
 
?>
<body>
<form action="<?php if(!empty($errmsg))echo htmlspecialchars($_SERVER['PHP_SELF']);else echo "loggedin.php" ?>" id="loginform" 
method="post" role="form">

<div class="inner">
<input name="loginid" type="text" maxlength="50" placeholder = "Login ID" size="50" required/>
<br />
<br />
<input name="pwd" type="password" maxlength="50" placeholder = "Create Password" size="50" required/>
<br />
<a><?php echo $errmsg ?></a>
<br />
<input name="pwd" type="password" maxlength="50" placeholder = "Create Password" size="50" required/>
<br />
<button id="submit" form="loginform" type="submit">Login</button>
<a class="ExistingAccount" color="white" href="LoginPage.php">  Existing User</a>
</div>

</form>
</body>
</html>
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
.ExistingAccount
{
	border-color:#666;
	color:#FFF;
}
.ExistingAccount:hover
{
	border-color:#00F;
	color:#00F;
}
</style>