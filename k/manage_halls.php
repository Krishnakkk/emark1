<?php     
include_once '../php/functions.php';
  sec_session_start();

    include_once '../php/session_check.php';
    include_once '../php/db_connect.php';

include("halls_actions.php");

$user = $_SESSION['username'];
$queries = "1";
if($_REQUEST['hall_name']){
	$user = $_SESSION['username'];
	if($_SESSION['usr_role']==1){
	$searchhall= $_REQUEST['hall_name'];
	$queries = "hall_name LIKE '%$searchhall%'";
	}else{
	$searchhall= $_REQUEST['hall_name'];
	$queries = "user_name='$user' AND hall_name LIKE '%$searchhall%'";
	}
}else{
		if($_SESSION['usr_role']==1){
		$queries = "1";
		}else{
			$queries = "user_name='$user'";
		}
}
if($_SESSION['usr_role']==2){
	header('Location: ../../index');
}

 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Your Madapam | Halls</title>
<link rel="stylesheet" type="text/css" href="../css/960.css" />
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/text.css" />
<link rel="stylesheet" type="text/css" href="../css/blue.css" />
<link type="text/css" href="../css/smoothness/ui.css" rel="stylesheet" />  
 <script type="text/javascript" src="../js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="../js/ui.core.js"></script>
	<script type="text/javascript" src="../js/ui.sortable.js"></script>    
    <script type="text/javascript" src="../js/ui.dialog.js"></script>
    <script type="text/javascript" src="../js/ui.datepicker.js"></script>
    <script type="text/javascript" src="../js/effects.js"></script>
    <script type="text/javascript" src="../js/flot/jquery.flot.pack.js"></script>
    <script id="source" language="javascript" type="text/javascript" src="../js/graphs.js"></script>
    <script language="javascript" type="text/javascript">
	$(document).ready(function(){       

			$(".dropdown").click(function() { 
			$("#colorchanger").slideToggle("fast");	
		});	
});
	</script>
<script language="JavaScript" type="text/javascript">
		function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
    function category(strURL)
    {         
     var req = getXMLHTTP(); // fuction to get xmlhttp object
     if (req)
     {
      req.onreadystatechange = function()
     {
      if (req.readyState == 4) { //data is retrieved from server
       if (req.status == 200) { // which reprents ok status                    
         document.getElementById('catdiv').innerHTML=req.responseText;
      }
      else
      { 
         alert("There was a problem while using XMLHTTP:\n");
      }
      }            
      }        
    req.open("GET", strURL, true); //open url using get method
    req.send(null);
     }
    }
    
</script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<!--<script type="text/javascript" src="../js/jquery-1.2.1.pack.js"></script>
--> 
<script>
// For ajax displaying of hall name in search box
function suggest(inputString){
		if(inputString.length == 0) {
			$('#suggestions').fadeOut();
		} else {
		$('#search_name').addClass('load');
			$.post("autosuggest.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').fadeIn();
					$('#suggestionsList').html(data);
					$('#search_name').removeClass('load');
				}
			});
		}
	}
// For Listing Booking Details  

function suggest2(inputString){
		if(inputString.length == 0) {
			$('#suggestions').fadeOut();
		} else {
		$('#search_name1').addClass('load');
			$.post("autosuggest_bookings.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').fadeIn();
					$('#suggestionsList').html(data);
					$('#search_name1').removeClass('load');
				}
			});
		}
	}
	function fill(thisValue) {
		$('#search_name').val(thisValue);
		setTimeout("$('#suggestions').fadeOut();", 100);
	}
	function fill1(thisValue) {
		$('#search_name1').val(thisValue);
		setTimeout("$('#suggestions').fadeOut();", 100);
	}

</script>
<script language="JavaScript">
function onload(){
			  document.getElementById("hall_id").style.display = 'none';
                document.getElementById("hall_name").style.display = 'block';
}
    function toggle(id) {
            if (id == 'hall_id') {
			  document.getElementById("hall_name").style.display = 'none';
                document.getElementById("hall_id").style.display = 'block';
            } else  {
			   document.getElementById("hall_id").style.display = 'none';
                document.getElementById("hall_name").style.display = 'block';

            }
        }
</script>

</head>

<body onload="onload();">
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
      	<div id="colorchanger">
        	<a href="../dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="../dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="../dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<!--LOGO-->
	<div class="grid_8" id="logo"><a href="index" title=""><img src="../images/logo.jpg"  alt="Party Halls,Banquet Halls, Marriage Halls,Caterers" width="30%" title="Party Halls,Banquet Halls, Marriage Halls,Caterers"/></a></div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="#" class="mail">(1)</a> Welcome <a href="#"><?php echo $_SESSION['username']; ?></a>  |  <a class="dropdown" href="#">Change Theme</a>  |<?php if(isset($_SESSION['username'])){ ?> <a href="../php/logout">Logout</a><?php }else { ?> <a href="../login">Login</a><?php } ?></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item" id="one"><a href="index" class="main"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
        <li class="item first" id="two"><a href="manage_halls" class="main current"><span class="outer"><span class="inner content">Halls</span></span></a></li>
        <li class="item" id="three"><a href="bookings"><span class="outer"><span class="inner reports png">Reports</span></span></a></li>
        <?php if($_SESSION['usr_role']==1){ ?>
        <li class="item middle" id="four"><a href="banquethall_users" class="main"><span class="outer"><span class="inner users">Add Users</span></span></a></li>
<?php } ?>
		<li class="item middle" id="five"><a href="add_googlelinks" class="main"><span class="outer"><span class="inner media_library">Media Library</span></span></a></li>        
		<li class="item middle" id="six"><a href="manage_calendardates" class="main"><span class="outer"><span class="inner event_manager">Event Manager</span></span></a></li>        
		<?php if($_SESSION['usr_role']==1){ ?>
		<li class="item middle" id="seven"><a href="manage_testimonials" class="main"><span class="outer"><span class="inner newsletter">Testimonials</span></span></a></li>        
<?php }else { ?>
		<li class="item middle" id="seven"><a href="manage_testimonials" class="main"><span class="outer"><span class="inner newsletter">Inbox</span></span></a></li>        
<?php } ?>       
		<li class="item" id="eight"><a href="change_password" class="main"><span class="outer"><span class="inner settings">Settings</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="manage_halls" class="current"><span>Halls List</span></a></li>
                      <li><a href="add_halls"><span>Add Halls</span></a></li>
                      <li><a href="create_menus"><span>Create Menus</span></a></li>
                      
          </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>
<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="event_manager">Halls List</h1>
    </div>
    <div class="clear">
    </div>
    <div id="suggest" style="float:right;"> <form id="search" action=""  method="get" enctype="multipart/form-data">
      <p id="hall_name"><input type="text" size="25" name="hall_name" id="search_name" onkeyup="suggest(this.value);" onblur="fill();"  placeholder="Enter Hall Name" />      </p>
             <input type="submit" value="Search">
     </form>
      <div class="suggestionsBox" id="suggestions" style="display: none;">
        <div class="suggestionList" id="suggestionsList"> &nbsp; </div>
      </div>
   </div>
    <!--  TITLE END  -->    
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
        <?php 

$sno = 1; 
	  $max_results=1;
	  $page=$_REQUEST["pages"];
	  //For Checcking Pagination
	  	 	require_once ('pagination.php');
	$page = ($page == 0 ? 1 : $page);
	$pagenav = ($pagenav == 0 ? 1 : $pagenav);
	$perpage = 10;//limit in each page
   $startpoint = ($page * $perpage) - $perpage;
	 $query1 = "select hall_id,user_name,hall_name,habit,hall_type,hall_rent,image,contact_no,contact_person,emailid,lift,dinings,seatings,food_pref,totalarea,acnonac,status,notify_status,featured from `hall_details` WHERE $queries order by $default_order $sort_by LIMIT $startpoint,$perpage";
    if ($stmt = $mysqli->prepare($query1)) {
        $stmt->execute();    // Execute the prepared query.
        // get variables from result.
        $stmt->bind_result($hall_id,$user_name,$hall_name,$habit,$hall_type,$hall_rent,$image,$contact_no,$contact_person,$emailid,$lift,$dinings,$seatings,$food_pref,$total_area,$acnonac,$status,$notify_status,$featured );
		//To Calculate Page Statement
	?>
	<div class="portlet" id="table">
        <div class="portlet-header fixed"><img src="../images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Halls</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="57" scope="col">SNo</th>
                <th width="230" scope="col">Hall Name</th>
                <th width="144" scope="col">User Name</th>
                <th width="144" scope="col">Hall Type</th>
             <th width="145" scope="col">Contact Details</th>
                
                <th width="102" scope="col">AC</th>
                <th width="103" scope="col">Assigned To</th>
                <th width="107" scope="col">Actions</th>
                <th width="107" scope="col">Cancellation Policies</th>
                <th width="107" scope="col">Send Alerts</th>
<strong></strong>              </tr>
            </thead>
            <tbody>
            <?php 		
while($stmt->fetch()){
 ?>
              <tr>
                <td><strong><?php  echo $sno;
				$sno=$sno+1;?></strong></td>
                <td><a href="hall_details?id=<?php echo $hall_id; ?>"><?php echo $hall_name; ?></a></td>
                <td><?php echo $user_name; ?></td>
                <td><?php echo $hall_type; ?></td>
                <td><?php echo $contact_no; ?><br /><?php echo $emailid; ?><br /><?php echo $address; ?></td>
                <td><?php if($acnonac=="ac"){ echo "Yes";
				}else{  echo "No";
				}?></td>
                <td align="center"><?php if($assigned_to) { echo $assigned_to;}else{ echo "No data Found";  }?></td>
                <td width="107"><a href="edit_halls?toedit=<?php echo $hall_id; ?>"><img src="../images/edit.png" title="edit" /></a><?php if($status==1) {?> <a href="<?php echo "manage_halls"; ?>?approve=<?php echo $hall_id; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>&amp;hall_id=<?php echo $_REQUEST['hall_id']; ?>&amp;pages=<?php echo $_REQUEST['pages']; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>#table" class="approve_icon" title="Approve"></a><?php }elseif($status==0) {?> <a href="<?php echo "manage_halls"; ?>?reject=<?php echo $hall_id; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>&amp;hall_id=<?php echo $_REQUEST['hall_id']; ?>&amp;pages=<?php echo $_REQUEST['pages']; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>#table" class="reject_icon" title="Reject"></a><?php } ?>
                <?php if($featured==1) {?>  <a href="<?php echo "manage_halls"; ?>?notfeatured=<?php echo $hall_id; ?>&amp;pages=<?php echo $_REQUEST['pages']; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>#table" class="notify_icon" title="Remove From Featured"></a><?php }else {?> <a href="<?php echo "manage_halls"; ?>?featured=<?php echo $hall_id; ?>&amp;pages=<?php echo $_REQUEST['pages']; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>#table" class="disnotify_icon" title="Feature this"></a><?php } ?>  <a href="<?php echo "manage_halls"; ?>?todel=<?php echo $hall_id; ?>&amp;pages=<?php echo $_REQUEST['pages']; ?>&amp;hall_name=<?php echo $_REQUEST['hall_name']; ?>#table" class="delete_icon" title="Delete" onclick='return confirm(&quot;Do you really want to delete?&quot;);'></a></td>
                <td><a href="" onClick="window.open('cancellation_policies?id=<?php echo $hall_id; ?>',null,'height=500, width=500, status=no, resizable=no, scrollbars=yes, toolbar=no,location=no, menubar=no');">Add/Edit</a></td>
                <td><a href="" onClick="window.open('send_alert?id=<?php echo $hall_id; ?>',null,'height=500, width=500, status=no, resizable=no, scrollbars=yes, toolbar=no,location=no, menubar=no');">Send Message</a></td>
              </tr>
              <?php } 
			  $stmt->close();

			  $pagestmt = $mysqli->prepare("select COUNT(*) AS num from `hall_details` WHERE $queries");
			  $pagequery = "select COUNT(*) AS num from `hall_details` WHERE $queries order by $default_order $sort_by"; 
 $pagestmt-> execute();
 ?>
              <tr class="footer">
                
                <td colspan="10" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
                    <?php 
					  if($pages=Pages2($pq,$perpage,"manage_halls?".$pages,$pagequery))
	{
	echo $pages;
}
		$pagestmt->close();			?>
                    </div>  
                <!--  PAGINATION END  -->       
                </td>
              </tr>
            </tbody>
          </table>
        </form>
		</div>
      </div>
	<?php 
    }
	 ?>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Copy Rights &copy; <a href="www.technovasolutions.co.in">Technovasolutions</a></div>
<!-- FOOTER END -->
</body>
</html>
