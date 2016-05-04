<?php
	if(isset($_REQUEST['firstname']))
	{
		$fname=htmlspecialchars($_REQUEST['firstname']);	
		$lname=htmlspecialchars($_REQUEST['lastname']);
		$name=$fname." ".$lname;
		$email=htmlspecialchars($_REQUEST['email']);
		$phone=htmlspecialchars($_REQUEST['phone']);
		$age=htmlspecialchars($_REQUEST['age']);
		$sex=htmlspecialchars($_REQUEST['RadioGroup1']);
		$case=htmlspecialchars($_REQUEST['RadioGroup2']);
		$address=htmlspecialchars($_REQUEST['address']);
		$city=htmlspecialchars($_REQUEST['city']);
		$statezip=htmlspecialchars($_REQUEST['statezip']);
		$country=htmlspecialchars($_REQUEST['country']);
		$query=htmlspecialchars($_REQUEST['query']);
		mysql_connect("localhost","root");
		mysql_select_db("skhmc");
		$date= date("Y-m-d H:i:s");
		mysql_query("INSERT INTO `cosnult` ( `id` , `name` , `email` , `phone` , `age` , `sex` , `case` , `address` , `city` , `zip` , `country` , `query` , `date` )
VALUES (
NULL , '$name', '$email', '$phone', '$age', '$sex', '$case', '$address', '$city', '$statezip', '$country', '$query', '$date'
)");
echo"<script>alert('Query Registered');</script>";
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
          <li onmouseover="shw3()" onmouseout="cls2()"  class="active"><a href="hospital.php"><span>Hospital</span></a><div id="hos" ><a href="oc.php">Online Consultancy</a><a href="dept.php">Departments</a><a href="staff.php">Staff</a><a href="work.php">Working Info</a><a href="hlogin.php">Staff Login</a></div></li>
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
  </script></h1>
<form name="consultationform" action="" method="POST" onsubmit="" >
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
   <tr>        <td  valign="top"> </td>
      </tr>
      <tr>
        <td   valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
          <tbody>
            <tr>
              <td><div align="left"></div></td>
            </tr>
            <tr>
              <td valign="top"><div align="left"><h1><center><strong>HOSPITAL :</strong></div></center></td>
            </tr>
            <tr>
              <td valign="top"><div align="justify" style="font-size:16px;">
                <p>OUT PATIENT DEPARTMENT:</p>
                <p>It has the following units:</p>
                <ol type="1">
                  <li>Medicine Unit – I</li>
                  <li>Medicine Unit II</li>
                  <li>Medicine Unit – III</li>
                  <li>Surgery Unit</li>
                  <li>Obstetrics &amp; Gynaecology Unit</li>
                  <li>Clinical Pathology Unit</li>
                  <li>Physiotherapy Unit</li>
                  <li>Speciality Clinic
                    <ol type="a">
                      <li>Diabetic</li>
                      <li>Rheumatology</li>
                      <li>Learning Disability Clinic</li>
                    </ol>
                  </li>
                  <li>Convenience Clinic ( Sunday OPD )</li>
                  <li>Family Welfare Counseling Centre</li>
                  <li>HIV Counseling Centre.</li>
                </ol>
                INDOOR HOSPITAL: <br />
                HOMOEOPATHIC HOSPITAL-for UG training-25 beds <br />
                HOMOEOPATHIC HOSPITAL-for PG training-27 beds
                <p>PERIPHERAL OPDS AT:</p>
                <ol type="1">
                  <li>Taleigao ( Goa University Campus )</li>
                  <li>Curchorem</li>
                  <li>Bethora</li>
                  <li>Vasco</li>
                  <li>Nirankal</li>
                </ol>
              </div></td>
            </tr>
            <tr>
              <td valign="top"><strong>COMMUNITY HEALTH SERVICES:</strong></td>
            </tr>
            <tr>
              <td valign="top" align="justify"><p align="justify">SCHOOLl HEALTH PROGRAMM:<strong><br />
              </strong>OBJECTIVE:</p>
                <ol type="i">
                  <li>To identify diseases/deficiency in students.</li>
                  <li>Creating awareness about personal and community hygiene.</li>
                  <li>Health awareness etc.</li>
                </ol>
                HEALTH STATUS: <br />
                OBSERVATIONS:<br />
                Major schools in Shiroda, Bardez (Parra) and Panaji have been covered under School health Programme. <br />
                Major/common illness seen: <br />
                Dental caries, RHD, Hernia, Pharyngitis, Gastric problems, Anaemia Acne vulgaris, Tonsillitis, Fungal infections, Menstrual disorders, Learning disability etc.<br />
                <br />
                HEALTH SURVEY:<strong><br />
                  </strong>OBJECTIVE:
                <ol type="1">
                  <li>To create health awareness.</li>
                  <li>To identify the disease in its incipient stage etc.</li>
                </ol>
                MEDICAL CAMPS:<strong><br />
                  </strong>To popularise the Homoeopathic system of medicine the College is organizing frequent Homoeopathic treatment camps wherein students are also exposed to the applied knowledge of Homoeopathy. <br />
                <br />
                ADOPTION OF WADO<br />
                HEALTHY BABY COMPETITION <br />
                MOTHER AND CHILD HEALTH ACTIVITIES <br />
                <br />
                LECTURES ON MEDICAL SCIENCE:<strong><br />
                  </strong>Aim: To inculcate scientific and medical temperament in the minds of Higher Secondary Schools students in the Sate of Goa and neighbouring areas. Objectives:
                <ol type="1">
                  <li>Making the students of XIth and XIIth Std (Science stream) aware of the various avenues in the medical field.</li>
                  <li>Introducing the Homoeopathic system of Medicine and developing interest in Homoeopathy in these Students.</li>
                </ol>
                Homoeopathic mode of treatment is very effective in chronic and acute illness. It is also curative in action and improves the immunity of the body when a constitutional remedy is administered. But the real problem is to create awareness of the merits of the system. Keeping these particular facts in our minds, we have set up this Career Guidance &amp; Awareness Cell for the students of Goa.</td>
            </tr>
            <tr>
              <td valign="top"><strong>AWARENESS RALLY:</strong></td>
            </tr>
            <tr>
              <td valign="top"><p>RED RIBBON CLUB:<strong><br />
                </strong>Organizes awareness rallies and lectures. A lecture on HIV/ AIDS was organized for the students. Dr. V. P. Singh, Asst. Director, CCRH was the Resource Person.<br />
                <br />
                MFR – Emergency Management: <br />
                Medical First Responder -- A Training Programme <br />
                The Practical training programme is conducted to manage the emergencies. DISASTER: <br />
                <br />
                CERTIFICATION: <br />
                A certification is issued by St. John Ambulance Association Authority the recipient to perform as MFR in such eventualities. <br />
                The Students of IIIrd BHMS are imparted training under the guidance of Dr. Jorson Fernandes – a International Trainer and Resource Person. <br />
                <br />
                ANTI– TOBACCO: <br />
                The Anti-tobacco Rally is also organized mainly to create awareness amongst the Youth and the Students to make them aware the bad effects of Tobacco.</p></td>
            </tr>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
</form>
<hr />
© Shri Kamaxidevi Homoeopatic Medical College & Hospital 
</body>
</html>
