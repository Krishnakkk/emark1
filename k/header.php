<div id="header">
  <a href="http://www.bookyourmandapam.com" title="BookYourMandapam - Home"><img src="images/logo.png" width="80%" height="75px" style="width: 304px;padding: 16px 0px 0px 31px;"></a>
        <div class="link right">
    <div class="table bottom">
      <ul>
            <?php if(!isset($_SESSION['username'])){ ?>
      <li class="left" onclick="$('#loginBox').css('display' , 'block');">
      <a href="#" style="border-radius: 5px;border-color: rgb(215,175,55);color: rgb(215,175,55);width: 34px;height: 30px;font-family: Arial, Helvetica, sans-serif;font-size: 15px;font-weight: Bold;" id="loginButton" onMouseOver="$(this).css('color' , '#d4af37');$('#loginButton').addClass('aborder');" >Login</a>     </li>
      <li class="left">
      <a href="register" style="border-radius: 5px;border-color: rgb(215,175,55);color: rgb(215,175,55);width: 69px;height: 30px;font-family: Arial, Helvetica, sans-serif;font-size: 15px;font-weight: Bold;">Register</a>
      </li>
      <?php }else { ?>
      <li class="left" >
      <a href="manage/php/logout" style="border-radius: 5px;border-color: rgb(215,175,55);color: rgb(215,175,55);width: 69px;height: 30px;font-family: Arial, Helvetica, sans-serif;font-size: 15px;font-weight: Bold;">Logout</a>
     <li class="left">
     <?php 	if($_SESSION['usr_role']==2){ ?>
      <a href="manage/users/dashboard" style="border-radius: 5px;border-color: rgb(215,175,55);color: rgb(215,175,55);width: 69px;height: 30px;font-family: Arial, Helvetica, sans-serif;font-size: 15px;font-weight: Bold;">My Account</a>
      <?php }else { ?>
      <a href="manage/admin/index" style="border-radius: 5px;border-color: rgb(215,175,55);color: rgb(215,175,55);width: 69px;height: 30px;font-family: Arial, Helvetica, sans-serif;font-size: 15px;font-weight: Bold;">My Account</a>
      <?php } ?>
      </li> 
      <?php } ?>
<li class="left">
      <h1 style="color:rgb(215,175,55); font-size:16px;">For 24/7 Support<br /> <small style="color:#FFF; font-size:15px">+91-44-42661356</small></h1> 
      </li>
      <li class="left"><a href="http://hostedivr.in/cc2/clickcall.php?uid=3991&pid=5328" target="popupwindow"  onclick="window.open('', 'popupwindow', 'scrollbars=no,width=580,height=450');return true"><img src="images/call _now _Desktop.jpg"  width="160" height="40" border="0" title="LiveSupport" style="border-radius:10px"/></a></li>
      <li class="left">
      <a href="javascript:void(window.open('http://www.bookyourmandapam.com/livezilla/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" title="Live Support"><img src="http://www.bookyourmandapam.com/livezilla/image.php?id=02&amp;type=inlay" width="160" height="40" border="0" title="LiveSupport" style="border-radius:10px"></a><div style="margin-top:2px;"><a href="http://www.livezilla.net" target="_blank" title="" style="font-size:10px;color:#bfbfbf;text-decoration:none;font-family:verdana,arial,tahoma;"></a></div>
      </li>
        <li class="left"><a href="https://twitter.com/technova_bym" target="_blank"><img src="images/twitter.png" width="26px"></a></li>                <li class="left"><a href="https://www.facebook.com/bookyourmandapam" target="_blank"><img src="images/icon_facebook.png" width="26px"></a></li><li class="left"></li>              </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div class="link right">
<!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><div class="link" style="text-align:left;width:160px;"></div><!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
var script = document.createElement("script");script.type="text/javascript";var src = "http://www.bookyourmandapam.com/livezilla/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><noscript><img src="http://www.bookyourmandapam.com/livezilla/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt=""></noscript><!-- http://www.LiveZilla.net Tracking Code -->
</div>  
<div class="clear"></div>
  <div></div>
  <div></div>
   <div class="clear"></div>
  <!--<div class="link right" style="padding: 0px 394px 0px 0px;">
  <div class="table bottom">
      <ul>
      	                <li class="left"><a href="login.php" class="opensans">Login</a></li>
                        <li class="left"><a href="register.php" class="opensans">Register</a></li>
              </ul>
      <div class="clear"></div>
    </div>
    <div class="table bottom">
      <ul>
                        <li class="left"><a href="contactus.php" class="opensans">Contact Us</a></li>
                        <li class="left"><a href="faqs.php" class="opensans">FAQs</a></li>
                        <li class="left"></li>
              </ul>
      <div class="clear"></div>
    </div>
  </div>-->
  <div class="clear"></div>
</div><div id="loginBox" class="sublink" onMouseOver="$('#loginButton').addClass('aborder');$('#loginBox').css('display' , 'block');" onMouseOut="$('#loginBox').css('display' , 'none');">                
<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<form id="loginForm" method="post" enctype="multipart/form-data" action="manage/php/process_userlogin">
                        <fieldset id="body">
                            <fieldset>
                                   <p id="error"></p>
                                <label for="emailid">Email ID</label>
                                <input type="email" name="emailid" id="emailid" required="required"/>
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required="required" pattern="^[A-Za-z0-9!@#$%&*()_]{6,20}$" />
                            </fieldset>

                            <input type="submit" id="login" value="Sign in here" />                            <label for="checkbox"><input type="checkbox" name="remember" id="checkbox"  value="on" />Remember me</label>
                        </fieldset>
                        <span><a href="reset_pwd">Forgot your password?</a></span>
                        <span>Hall Owners <a href="halls_login">Login here</a></span>
                        </form>
                        
                       <script type="text/javascript">
				$(document).ready();function validate(c,b,j){var a=b[0];var f=$.trim(a.user_name.value);var i=$.trim(a.password.value);var d=/^[A-Za-z0-9_]{3,20}$/;var e=/^[A-Za-z0-9!@#$%&*()_]{6,20}$/;var h=false;var g="";if(!f){g="<p>Please enter a user_name</p>";h=true}else{if(!d.test(f)){g="<p>Username must be 3 - 20 characters (a-z, 0-9, _).</p>";h=true}}if(!i){g+="<p>Please enter a password</p>";h=true}else{if(!e.test(i)){g+="<p>Password must be 6 - 20 characters (a-z, 0-9, !, @, #, $, %, &, *, (, ), _).</p>";h=true}}if(!h){$("#error").html('<p><img src="js/loading.gif" alt="loading" /> signing in...</p>')}else{$("#error").html(g);return false}};	   </script>
                     </div>
<div id="topmenu">
	<div class="menu">
	    <div class="case left" onMouseOver="$(this).css('background-color' , 'rgb(253, 253, 229)'); $('#category-home-bk').css('display' , 'block'); $('#category-home').css('display' , 'block'); $('#category-home-bk').css('width' , $(this).width());" onMouseOut="$(this).css('background-color' , ''); $('#category-home-bk').css('display' , 'none'); $('#category-home').css('display' , 'none');">
        <div id="category-home-bk" class="bk" style="background-color:#d4af37;"></div>
    	
    	<a href="http://www.bookyourmandapam.com" onMouseOver="$(this).css('color' , '#d4af37');" onMouseOut="$(this).css('color' , '');">Home</a>
    </div>
  <div class="case left" onclick="" onMouseOver="$('#sublink-budget1').css('display' , 'block');$(this).css('background-color' , 'rgb(253, 253, 229)');" onMouseOut="$('#sublink-budget1').css('display' , 'none');$(this).css('background-color' , '');">
    	<a href="aboutus" id="a-budget1" onMouseOver="$(this).css('color' , '#d4af37');$('#a-budget1').addClass('aborder');" onMouseOut="$('#a-budget1').removeClass('aborder');$(this).css('color' , '');">About Us<img src="images/downto.png"></a>
        <div id="sublink-budget1" class="sublink" onMouseOver="$('#a-budget1').addClass('aborder');$('#sublink-budget1').css('display' , 'block');" onMouseOut="$('#a-budget1').removeClass('aborder');$('#sublink-budget1').css('display' , 'none');">
            <ul>
                <li><a href="aboutus#companyprofile">Company Profile</a></li>
                <li><a href="aboutus#vision">Vision & Mission</a></li>
                <li><a href="aboutus#whybym">Why BYM?</a></li>
            </ul>
        </div>
    </div>
 <div class="case left" onclick="$('#sublink-budget4').css('display' , 'block');" onMouseOver="$(this).css('background-color' , 'rgb(253, 253, 229)');" onMouseOut="$('#sublink-budget4').css('display' , 'none');$(this).css('background-color' , '');">
    	<a href="featured_halls?submitsearch=Search" id="a-budget4" onMouseOver="$(this).css('color' , '#d4af37');$('#a-budget4').addClass('aborder');" onMouseOut="$('#a-budget4').removeClass('aborder');$(this).css('color' , '');">Top Rated Halls</a>
      
    </div>   

<div class="case left" onclick="" onMouseOver="$('#sublink-budget5').css('display' , 'block');$(this).css('background-color' , 'rgb(253, 253, 229)');" onMouseOut="$('#sublink-budget5').css('display' , 'none');$(this).css('background-color' , '');">
    	<a href="other_services" id="a-budget5" onMouseOver="$(this).css('color' , '#d4af37');$('#a-budget5').addClass('aborder');" onMouseOut="$('#a-budget5').removeClass('aborder');$(this).css('color' , '');">Other Services<img src="images/downto.png"></a>
        <div id="sublink-budget5" class="sublink" onMouseOver="$('#a-budget5').addClass('aborder');$('#sublink-budget5').css('display' , 'block');" onMouseOut="$('#a-budget5').removeClass('aborder');$('#sublink-budget5').css('display' , 'none');">
            <ul>
                <li><a href="other_services#Catering">Catering</a></li>
                <li><a href="other_services#Decorators">Decorators</a></li>
                <li><a href="other_services#Drivers">Call Drivers</a></li>
                <li><a href="other_services#Calls">Calls/Travel Bookings</a></li>
                <li><a href="other_services#Hotels">Hotels/Service Apts</a></li>
                <li><a href="other_services#Photo">Photo/Video Coverage</a></li>
                <li><a href="other_services#Saloons">Beauty Parlours/Saloons</a></li>
            </ul>
        </div>
    </div>
<div class="case left" onMouseOver="$(this).css('background-color' , 'rgb(253, 253, 229)');" onclick="$('#-budget4').css('display' , 'block');" onMouseOut="$('#sublink-budget4').css('display' , 'none');$(this).css('background-color' , '');">
   	  <a href="deals" id="a-budget4" onMouseOver="$('#a-location').addClass('aborder');$(this).css('color' , '#d4af37');" onMouseOut="$('#a-location').removeClass('aborder');$(this).css('color' , '');">Deals</a>
      
      <div id="sublink-location" class="sublink" onMouseOver="$('#a-location').addClass('aborder');$('#sublink-location').css('display' , 'block');" onMouseOut="$('#a-location').removeClass('aborder');" style="margin-right:0px; display:none;">
        			
    <?php  
			  $query_region="SELECT region_id,region_name,city_name FROM `region_list` WHERE 1";
			    if($stmt_region = $mysqli->prepare($query_region)) {  
        $stmt_region->execute();    // Execute the prepared query.
        // get variables from result.
        $stmt_region->bind_result($region_id,$region_name,$city_name);
while($stmt_region->fetch()){?>
            	<div class="text"><?php echo $region_name; ?></div>
    <?php  
			  $ptquery="SELECT area_name FROM `area_list` WHERE `region_id`='$region_id'";
			    if($stmt = $mysqli2->prepare($ptquery)) {  
        $stmt->execute();    // Execute the prepared query.
        // get variables from result.
		$stmt->store_result();
		$stmt->num_rows;
        $stmt->bind_result($area_name);
while($stmt->fetch()){			  ?>
   			                <div class="left"><ul>             
<li>
 <a href="search?submitsearch=Search&city=<?php echo $city_name;?>&area=<?php echo $area_name; ?>"> <?php echo $area_name; ?></a> </li> 	 </ul></div>      <?php  }$stmt->close();}?>         				    <div class="clear"></div>

   			  <?php  }$stmt_region->close();}?>  	        
    </div>
    <div class="clear"></div>
    </div>        <div class="case left" onclick="" onMouseOver="$('#sublink-budget3').css('display' , 'block');$(this).css('background-color' , 'rgb(253, 253, 229)');" onMouseOut="$('#sublink-budget3').css('display' , 'none');$(this).css('background-color' , '');">
    	<a href="howitworks" id="a-budget3" onMouseOver="$(this).css('color' , '#d4af37');$('#a-budget3').addClass('aborder');" onMouseOut="$('#a-budget3').removeClass('aborder');$(this).css('color' , '');">How It Works<img src="images/downto.png"></a>
        <div id="sublink-budget3" class="sublink" onMouseOver="$('#a-budget3').addClass('aborder');$('#sublink-budget3').css('display' , 'block');" onMouseOut="$('#a-budget3').removeClass('aborder');$('#sublink-budget3').css('display' , 'none');">
            <ul>
                <li><a href="howitworks#forcustomers">For Customers</a></li>
                <li><a href="howitworks#forhalls">For Halls</a></li>
            </ul>
        </div>
    </div>
    <div class="case left" onMouseOver="$(this).css('background-color' , 'rgb(253, 253, 229)');" onclick="" onMouseOut="$('#sublink-budget').css('display' , 'none');$(this).css('background-color' , '');">
   	  <a href="faqs" id="a-budget" onMouseOver="$(this).css('color' , '#d4af37');$('#a-budget').addClass('aborder');" onMouseOut="$('#a-budget').removeClass('aborder');$(this).css('color' , '');">FAQS</a>
        
  </div>
       
    
     
<?php /*?><div class="case left" onMouseOver="$(this).css('background-color' , 'rgb(253, 253, 229)');" onclick="$('#capacity').css('display' , 'block');" onMouseOut="$('#sublink-capacity').css('display' , 'none');$(this).css('background-color' , '');">
    	<a href="register.php" id="a-capacity" onMouseOver="$('#a-capacity').addClass('aborder');$(this).css('color' , '#d4af37');" onMouseOut="$('#a-capacity').removeClass('aborder');$(this).css('color' , '');">Register</a>
        <div id="sublink-capacity" class="sublink" onMouseOver="$('#a-capacity').addClass('aborder');$('#sublink-capacity').css('display' , 'block');" onMouseOut="$('#a-capacity').removeClass('aborder');" style="display:none">
            <ul>
                <li><a href="search.php?submitsearch=Search&seatings=<150">0-150</a></li>
                <li><a href="search.php?submitsearch=Search&seatings=151-300">151-300</a></li>
                <li><a href="search.php?submitsearch=Search&seatings=301-450">301-450</a></li>
                <li><a href="search.php?submitsearch=Search&seatings=451-600">451-600</a></li>
                <li><a href="search.php?submitsearch=Search&seatings=>601">601+</a></li>
            </ul>
    </div>
    </div><?php */?>
  <div class="case left" onclick="" onMouseOver="$('#sublink-budget2').css('display' , 'block');$(this).css('background-color' , 'rgb(253, 253, 229)');" onMouseOut="$('#sublink-budget2').css('display' , 'none');$(this).css('background-color' , '');">
    	<a href="contactus" id="a-budget2" onMouseOver="$(this).css('color' , '#d4af37');$('#a-budget2').addClass('aborder');" onMouseOut="$('#a-budget2').removeClass('aborder');$(this).css('color' , '');">Contact Us<img src="images/downto.png"></a>
    <div id="sublink-budget2" class="sublink" onMouseOver="$('#a-budget2').addClass('aborder');$('#sublink-budget2').css('display' , 'block');" onMouseOut="$('#a-budget2').removeClass('aborder');$('#sublink-budget2').css('display' , 'none');">
            <ul>
                <li><a href="contactus">Contact Us</a></li>
                <li><a href="contactus#careers">Careers</a></li>
                <li><a href="halls_register">New Halls Registration</a></li>
                <li><a href="contactus#advertise">Advertise Your Hall</a></li>
                <li><a href="contactus#franchise">Franchise Enquiry</a></li>
            </ul>
        </div>
    </div>
</div></div></div>
<?php /*?><div style="position: fixed; height: 112px; width: 28px; overflow: hidden; z-index: 99997; cursor: move; margin: 0px; opacity: 1; bottom: auto; right: auto; right: -2px; top: 198px;" id="lz_floating_button"><a href="javascript:void(window.open('http://www.bookyourmandapam.com/livezilla/chat.php','','width=590,height=650,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img id="chat_button_image" src="images/livezilla_chat.jpg" alt="LiveZilla Live Help" height="112" border="0" width="32"></a></div><?php */?>