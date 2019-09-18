<link rel="stylesheet" type="text/css" href="src/StyleSheetHeader.css" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  print($title); ?></title> 
        
</head>
<body id="page">
        <ul class="cb-slideshow">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
   	<?php 
			$user="";
	if(!empty($_POST['loginid']))
		$user=$_POST['loginid'];
		?>
   <div class="container">
            <div class="Test-top">
                <a>
                    <strong><?php
								if(!empty($user))
                    			echo "Logged in as : "
								?>
					</strong>  <?php if(!empty($user)) echo $user ?>
                </a>
                <span class="searchboxdiv">
                <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> id="search" class="searchboxdiv" align="left" >
                <input name="searchbox" type="text" placeholder = "<'Name'> Search" size="80"/>
				<button id="search" form="search" type="submit">Search</button>
                </form>
                </span>
                <span class="right">
                    <a>Project by Aditya Pranav Bhuvanapalli</a>
                    <a href="login.php">Sign In</a>
                    <a href="LogoutPage.php">
                        <strong><?php
								if(!empty($user))
                    			echo "Sign Out"
								?></strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div>
            <header>
                <h1><"NAME"><span><"caption"></span></h1>
                <h2><"A single line description of the project."></h2>
            </header>
        </div>
