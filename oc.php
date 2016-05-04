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
          <li onmouseover="shw3()" onmouseout="cls2()"  class="active"><a href="hospital.php"><span>Hospital</span></a>
          <div id="hos" ><a href="oc.php">Online Consultancy</a><a href="dept.php">Departments</a><a href="staff.php">Staff</a><a href="work.php">Working Info</a><a href="hlogin.php">Staff Login</a></div></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>

        </ul>
      </div>

      <div class="clr"></div>
     
        <div class="clr"></div>
      <div class="clr"></div>
<h1>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
ONLINE CONSULTATION
</h1>
<form name="consultationform" action="" method="POST" onsubmit="" >           	
               <table border="0">
   <tr>
                      	 <td colspan="2">&nbsp;</td>
                 </tr>
                      <tr>
                        <td width="179"><label>First Name</label></td>
                        <td width="325"><input name="firstname" type="text" title="First Name" lang="must" /></td>
                  </tr>
                      <tr>
                        <td><label>Last Name</label></td>
                        <td><input name="lastname" type="text" title="Last Name" lang="must"/></td>
                      </tr>
                      <tr>
                        <td><label>Email Address</label></td>
                        <td><input name="email" type="text" title="Email" lang="must(email)" /></td>
                      </tr>
                      <tr>
                        <td><label>Phone</label></td>
                        <td><input name="phone" type="text" title="Phone" lang="must(int)" /></td>
                      </tr>
                      <tr>
                        <td><label>Age</label></td>
                        <td><input name="age" type="text" title="Age" lang="must(int)" /></td>
                      </tr>
                      <tr>
                        <td><label>Sex</label></td>
                        <td>                        
                        	<table width="0" border="0">
                            	
                              <tr>
                                <td>
                       	        <label>
   <input type="radio" name="RadioGroup1" value="Male" id="RadioGroup1_0" title="Male" lang="must" checked="checked" />  Male
                                </label>
                        	    </td>
                              
                                <td>
                               <label>
      							<input type="radio" name="RadioGroup1" value="Female" id="RadioGroup1_0" title="Female" lang="must"  /> Female
                                </label>
                                </td>
                        
                              </tr>
                            
                            </table>
                            
                            
                            
                        </td>
                      </tr>
                      <tr>
                        <td><label>Case</label></td>
                        <td>
                        	<table width="0" border="0">
                              
                              <tr>
                                <td>
                       	        <label>
      							<input type="radio" name="RadioGroup2" value="New" id="RadioGroup1_01" title="New" lang="must" checked="checked" />  New
                                </label>
                        	    </td>
                              
                                <td>
                               <label>
      							<input type="radio" name="RadioGroup2" value="Present" id="RadioGroup1_01"  title="Present" lang="must"/> Present
                                </label>
                                </td>
                        
                              </tr>
                              
                            </table>                        
                        </td>
                      </tr>
                      <tr>
                        <td><label>Address</label></td>
                        <td><input class="text_field" onblur="if(this.value=='') this.value=''; " onfocus="if(this.value=='') this.value='';" value="" name="address" type="text" title="Address" lang="must"/></td>
                      </tr>
                      <tr>
                        <td><label>City</label></td>
                        <td><input class="text_field" onblur="if(this.value=='') this.value=''; " onfocus="if(this.value=='') this.value='';" value="" name="city" type="text" title="City" lang="must"/></td>
                      </tr>
                      <tr>
                        <td><label>State + Zip</label></td>
                        <td><input class="text_field" onblur="if(this.value=='') this.value=''; " onfocus="if(this.value=='') this.value='';" value="" name="statezip" type="text" title="State/Zip" lang="must" /></td>
                      </tr>
                      <tr>
                        <td><label>Country</label></td>
                        <td>
                        	<select class="select" name="country" title="Country" lang="must">
							    <option value="">--Select--</option>
                            	<option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Albania">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antartica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Congo(DRC)">Congo(DRC)</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea </option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji Islands">Fiji Islands</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong SAR">Hong Kong SAR</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati </option>
                                <option value="Korea">Korea</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao SAR">Macao SAR</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi </option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="North Korea">North Korea</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn Islands">Pitcairn Islands</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Georgia">South Georgia</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                <option value="St. Lucia">St. Lucia</option>
                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands">Virgin Islands</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                
                            </select>
                        </td>
                      </tr>
                      <tr>
                        <td><label>Your query/ health problem</label></td>
                        <td><textarea class="query" name="query" cols="50" rows="" title="Query" lang="must"></textarea></td>
                      </tr>
                      <tr>
                 </tr>
                      <tr>
                      	<td colspan="2" align="center"><input class="button" name="" value="I Agree" type="submit" /></td>
                      </tr>
  </table>
</form>
<hr />
© Shri Kamaxidevi Homoeopatic Medical College & Hospital 
</body>
</html>
