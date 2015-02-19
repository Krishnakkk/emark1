<?php 
    include_once '../php/db_connect.php';
   include '../php/session_maintain.php';
  sec_session_start();
   include_once '../php/addmessages.inc.php';
  include_once '../php/session_check.php';
/*   
  if (login_check($mysqli) == true) {
} else {

}
*/
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Party Users | Book Your Mandapam</title>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../css/960.css" />
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/text.css" />
<link rel="stylesheet" type="text/css" href="../css/blue.css" />
<link type="text/css" href="../css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="../js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="../js/ui.core.js"></script>
    <script type="text/javascript" src="../js/effects.js"></script>
    <script type="text/javascript" src="../js/flot/jquery.flot.pack.js"></script>

    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->

</head>

<body>


<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      !--LOGO-->
	<div class="grid_8" id="logo"><a href="index.php" title=""><img src="../images/logo.jpg"  alt="Party Halls,Banquet Halls, Marriage Halls,Caterers" width="30%" title="Party Halls,Banquet Halls, Marriage Halls,Caterers"/></a></div>
    
<!-- USER TOOLS END -->    


<!-- HIDDEN SUBMENU START -->

<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="users">Send Alerts </h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox">
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
		  <?php
		  $id = $_REQUEST['id'];
	$hall_name = get_item(hall_details,hall_id,$id,hall_name);
	$contact_no = get_item(hall_details,hall_id,$id,contact_no);
		   ?>
    <div class="portlet-content" id="form">
		  <h3>Send Alert Message to <strong style="color:#900;"><?php echo $contact_no; ?>(<?php echo $hall_name; ?>)</strong></h3>
<script type="text/javascript" src="../js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
   <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
		  <table width="200" border="0">
<tbody style="width:100%;">
        <tr class="even">
		<td class="left_td"> </td>
		<td class="right_td"> 
        <form method="post" name="" enctype="multipart/form-data">
       <strong>Number</strong>&nbsp; -  <input name="text" type="number" value="<?php echo $contact_no; ?>" /><br />
<textarea name="message" cols="50" rows="10"></textarea>       <input type="submit" id="submit" name="submit" value="Submit">

</form>
</td>
          		<td class="left_td">&nbsp; </td>
		<td class="right_td">&nbsp;</td>
		</tr>
</tbody></table>

	  <p>&nbsp;</p>
		</div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		
</div>

<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Copy Rights &copy; <a href="www.technovasolutions.co.in">Technovasolutions</a></div>
<!-- FOOTER END -->
  
            

</body>
</html>
