<?php
include("db.php");
$date=date("y-m-d H:i:s");
if($_REQUEST['q'])
{
	session_start();
	$q=$_REQUEST['q'];
	$uid=$_SESSION['uid'];
	mysql_query("INSERT INTO `question` ( `qid` , `uid` , `date` )
VALUES (
NULL , '$uid', '$date'
)");	
	mysql_query("INSERT INTO `quest` ( `qid` , `question` )
VALUES (
NULL , '$q'
)");

}
if($_REQUEST['ans'])
{
	session_start();
	$a=$_REQUEST['ans'];
	$uid=$_SESSION['uid'];
	$qid=$_REQUEST['qid'];
	mysql_query("INSERT INTO `ans` ( `aid` , `qid` , `date` )
VALUES (
NULL , '$qid', '$date'
)");	
	mysql_query("INSERT INTO `answer` ( `aid` , `ans` )
VALUES (
NULL , '$a'
)");

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
<style type="text/css">
.hd1 {
	font-size: 36px;
	font-style: italic;
	color: #FFF;
	background-color: #003366;
	padding-top: 25px; 
	padding-bottom: 5px; 
padding-left: 15px; 
	
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
          <li ><a href="shome.php"><span>Questions</span></a></li>
          <li><a href="skype.php"><span>Skype</span></a></li>
          <li ><a href="logout.php"><span>Logout</span></a>
          </li>
          <li><a href="#"><span></span></a></li>
          <li><a href="#"><span></span></a></li>
          <li><a href="#"><span></span></a></li>

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
Solve your query</h1>
<form action="" method="post">
     <div class="cap2" style="margin-top:15px;"><textarea onclick="bln(this)" name="q" cols="125" rows="3">Ask Question...</textarea><input type="submit" value="   Ask   " /></div>
       <div class="tp" style="margin-top:15px; border-bottom:1px solid #ccc;"> Questions</div></form>
       <?php 
     $q=mysql_query("SELECT `qid` , `uid`
FROM `question`
ORDER BY `date` DESC
LIMIT 0 , 30");
	while($r=mysql_fetch_array($q))
	{
		$qid=$r['qid'];
		$uid=$r['uid'];
		$q23=mysql_query("select * from basic where mid='$uid'");
		if($r4=mysql_fetch_array($q23))
		{
			$name=$r4['name'];	
		}
		$q2=mysql_query("SELECT `question`
FROM `quest`
WHERE `qid` ='$qid'");
		$r2=mysql_fetch_array($q2);
		$qt=$r2['question'];
		echo"<br><b>$name</b>$qt";
		$q2=mysql_query("SELECT *
FROM `ans`
WHERE `qid` = '$qid'
ORDER BY `date` DESC
LIMIT 0 , 30");
		while($r2=mysql_fetch_array($q2)){
		$aid=$r2['aid'];
		$q3=mysql_query("SELECT *
FROM `answer`
WHERE `aid` ='$aid'");
		$r3=mysql_fetch_array($q3);
		$qt=$r3['ans'];
		echo"<div class='cap2'>Answer>>$qt</div><br>";
		}
		echo"<form action='' method='post'><textarea rows='1' cols='75' name='ans'></textarea><input type='hidden' name='qid' value='$qid' ><input type='submit' value='   Answer   '></form>";
	}	
	 ?>
<hr />
© Shri Kamaxidevi Homoeopatic Medical College & Hospital 
</body>
</html>
