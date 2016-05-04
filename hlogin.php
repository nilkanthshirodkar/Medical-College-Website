<?php
	if($_REQUEST['username'])
	{
		$us=htmlspecialchars($_REQUEST['username']);	
		$ps=md5(htmlspecialchars($_REQUEST['pass']));
		mysql_connect("localhost","root");
		mysql_select_db("skhmc");
		$q=mysql_query("SELECT * FROM `student_login` WHERE `user` LIKE '$us'AND `pass` LIKE '$ps'");
		if($r=mysql_fetch_array($q))
		{
			ini_set('session.cookie_httponly',true);
			ini_set('session.cookie_secure',true);
			setcookie("user", $r[0], time()+3600);
			$str="Location: shome.php";
			header($str);
		}
		else
		{
			echo"<script>alert('Invalid Username and Password');</script>";	
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shri Kamaxidevi - Homeopathic Medical College &amp; Hospital-Hospital</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="me.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="blck.js"></script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:36px;
	top:320px;
	width:596px;
	height:58px;
	z-index:1;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">

      </div>
      <div class="logo">
        <h1><a href="index.php"><img src="images/logo.png" align="left" /></a><a href="index.php">Shri<span> Kamaxidevi-Homeopathic</span><br/>Medical College & Hospital</a></h1>
      </div>
      <div class="clr"></div>
       <br /><br /><br /><br />
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home</span></a></li>
          <li><a href="homeopathy.php"><span>Homeopathy</span></a></li>
          <li onmouseover="shw2()" onmouseout="cls()"><a href="college.php"><span>College</span></a>
            <div id="col" ><a href="">Admission</a><a href="">Photo Gallery</a><a href="">Events</a><a href="">Students Council</a><a href="slogin.php">Student Login</a></div></li>
          <li onmouseover="shw3()" onmouseout="cls2()" ><a href="hospital.php"><span>Hospital</span></a>
           <div id="hos" ><a href="oc.php">Online Consultancy</a><a href="dept.php">Departments</a><a href="staff.php">Staff</a><a href="work.php">Working Info</a><a href="hlogin.php">Staff Login</a></div></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>

        </ul>
      </div>

      <div class="clr"></div>
     
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      
    </div>
  </div>

</div>
<h1>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
Staff Login</h1>
<form name="consultationform" action="" method="POST" onsubmit="" >           	
               <table border="0">
   <tr>
                      	 <td colspan="2">&nbsp;</td>
                 </tr>
                      <tr>
                        <td width="179"><label>Username</label></td>
                        <td width="325"><input name="username" type="text" title="User name" lang="must" /></td>
                  </tr>
                      <tr>
                        <td><label>Password</label></td>
                        <td><input name="pass" type="password" title="Last Name" lang="must"/></td>
                      </tr>
                      <tr>
                      	<td colspan="2" align="center"><input class="button" name="" value="Login" type="submit" /></td>
                      </tr>
  </table>
</form>
<hr />
© Shri Kamaxidevi Homoeopatic Medical College & Hospital 
</body>
</html>
