<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shri Kamaxidevi - Homeopathic Medical College &amp; Hospital-College</title>
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
        <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="homeopathy.php"><span>Homeopathy</span></a></li>
          <li onmouseover="shw2()" onmouseout="cls()"  class="active"><a href="college.php"><span>College</span></a>
            <div id="col" ><a href="">Admission</a><a href="">Photo Gallery</a><a href="">Events</a><a href="">Students Council</a><a href="slogin.php">Student Login</a></div></li>
          <li onmouseover="shw3()" onmouseout="cls2()"><a href="hospital.php"><span>Hospital</span></a>
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
<div class="content">
    <div class="content_resize">
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">News</h2>
          <?php ?>
          <script language="JavaScript1.2" type="text/javascript">
var scroller_width='210px'
var scroller_height='150px'
var bgcolor='#ffffff'
var pause=3000 //SET PAUSE BETWEEN SLIDE (2000=5 seconds)

var scrollercontent=new Array()
//Define scroller contents. Extend or contract array as needed you can add more updates here!!!!
scrollercontent[0]='Results declared!!! click on the link to see results<a href="http://www.University.in/">University Results</a>'
scrollercontent[1]='Cricket Matche between SKHMC & RIT on Saturday,karai Ground at 9am. Be there.'
scrollercontent[2]='Seminar on Human Brains in auditorium for students of First Year'


////**/////////////

var ie4=document.all
var dom=document.getElementById&&navigator.userAgent.indexOf("Opera")==-1

if (ie4||dom)
document.write('<div style="position:relative;width:'+scroller_width+';height:'+scroller_height+';overflow:hidden"><div id="canvas0" style="position:absolute;background-color:'+bgcolor+';width:'+scroller_width+';height:'+scroller_height+';top:'+scroller_height+';filter:alpha(opacity=20);-moz-opacity:0.2;"></div><div id="canvas1" style="position:absolute;background-color:'+bgcolor+';width:'+scroller_width+';height:'+scroller_height+';top:'+scroller_height+';filter:alpha(opacity=20);-moz-opacity:0.2;"></div></div>')
else if (document.layers){
document.write('<ilayer id=tickernsmain visibility=hide width='+scroller_width+' height='+scroller_height+' bgColor='+bgcolor+'><layer id=tickernssub width='+scroller_width+' height='+scroller_height+' left=0 top=0>'+scrollercontent[0]+'</layer></ilayer>')
}

var curpos=scroller_height*(1)
var degree=10
var curcanvas="canvas0"
var curindex=0
var nextindex=1

function moveslide(){
if (curpos>0){
curpos=Math.max(curpos-degree,0)
tempobj.style.top=curpos+"px"
}
else{
clearInterval(dropslide)
if (crossobj.filters)
crossobj.filters.alpha.opacity=100
else if (crossobj.style.MozOpacity)
crossobj.style.MozOpacity=1
nextcanvas=(curcanvas=="canvas0")? "canvas0" : "canvas1"
tempobj=ie4? eval("document.all."+nextcanvas) : document.getElementById(nextcanvas)
tempobj.innerHTML=scrollercontent[curindex]
nextindex=(nextindex<scrollercontent.length-1)? nextindex+1 : 0
setTimeout("rotateslide()",pause)
}
}

function rotateslide(){
if (ie4||dom){
resetit(curcanvas)
crossobj=tempobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.style.zIndex++
if (crossobj.filters)
document.all.canvas0.filters.alpha.opacity=document.all.canvas1.filters.alpha.opacity=20
else if (crossobj.style.MozOpacity)
document.getElementById("canvas0").style.MozOpacity=document.getElementById("canvas1").style.MozOpacity=0.2
var temp='setInterval("moveslide()",50)'
dropslide=eval(temp)
curcanvas=(curcanvas=="canvas0")? "canvas1" : "canvas0"
}
else if (document.layers){
crossobj.document.write(scrollercontent[curindex])
crossobj.document.close()
}
curindex=(curindex<scrollercontent.length-1)? curindex+1 : 0
}

function resetit(what){
curpos=parseInt(scroller_height)*(1)
var crossobj=ie4? eval("document.all."+what) : document.getElementById(what)
crossobj.style.top=curpos+"px"
}

function startit(){
crossobj=ie4? eval("document.all."+curcanvas) : dom? document.getElementById(curcanvas) : document.tickernsmain.document.tickernssub
if (ie4||dom){
crossobj.innerHTML=scrollercontent[curindex]
rotateslide()
}
else{
document.tickernsmain.visibility='show'
curindex++
setInterval("rotateslide()",pause)
}
}

if (ie4||dom||document.layers)
window.onload=startit

          </script>
          <?php ?>
        </div>
        
      </div>
      <div class="clr"></div>
  </div>
  </div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<h1><center>Admission Form</center></h1>
		<fieldset>
			<legend>
			Personal Information
			</legend><br>
			First name:<input type="text" name="firstname"><br><br>
			Last name:<input type="text" name="Lastname">
			<hr>
			Contact Information:<br><br>
			Address:<br>
			<textarea rows="4" cols="20">
			</textarea><br>
			Email Id:<input type="text" name="Email id">
			Ph. No:<input type="text" name="Ph.No.">
			Pin code:<input type="text" name="Pin code"><hr>
			Select Gender: 
			<input type="radio" name="sex" value="male">Male
			<input type="radio" name="sex" value="female">Female
			<hr>
			Category:
			<input type="checkbox" name="General" >General
			<input type="checkbox" name="O.B.C" >O.B.C
			<input type="checkbox" name="Other" >Other
			<hr>
			<form name="input" action="index.html" method="get">
				<p>Username:
  <input type="text" name="user">
			  </p>
				<p>
				  <input type="submit" value="Submit">
			  </p>
            </form>
            <hr />
© Shri Kamaxidevi Homoeopatic Medical College & Hospital 
</body>
</html>
