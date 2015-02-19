<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$error_msg = "";
 
if (isset($_POST['submit'])) {
    // Sanitize and validate the data passed in
	//$website, $landmark, $bus_routes, $min_bookcount, $menu_changes
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES);
	$number = $_POST['number'];
	$hall_id = $_REQUEST['id'];
	$hall_name = get_item(hall_details,hall_id,$hall_id,hall_name);
	$contact_no = get_item(hall_details,hall_id,$hall_id,contact_no);
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
if($message==""){
	        $error_msg .= '<p class="error">Please enter your message</p>';
}elseif($contact_no==""){
        $error_msg .= '<p class="error">Contact Number is Empty</p>';
	
}

    if (empty($error_msg)) {

			  $query = "INSERT INTO alert_messages (hall_id,hall_name,message,datetime) VALUES ('$hall_id','$hall_name', '$message', now())";
			 if ($update_stmt = $mysqli->prepare($query)) { 
            if ($update_stmt->execute()) {
				$strMobiles = $number;
$strmsg = $message;
include_once("../php/sms.php");
//echo "Message Sent";
if(sendmessage($strMobiles,$strmsg))
{		
                 echo  "<script type='text/javascript'>";
echo "window.opener.document.location.reload();";
echo "window.close();";
echo "</script>";   
}    
			
         }else{
               header('location: ../error.php?err=Adding failure: INSERT');
			}
        }
	}
		                 header('location: send_alert.php?id='.$hall_id);
	                  header('location: send_alert.php?id='.$hall_id);
}

function get_item($table_name,$where,$what,$getit) {
	  global $mysqli2;
  $getquery = "SELECT `$getit` FROM `$table_name` WHERE `$where`='$what'";
    if ($getstmt = $mysqli2->prepare($getquery)) {
        if($getstmt->execute()){
            $getstmt->bind_result($results);
			$getstmt->store_result();
			while($getstmt->fetch()){
			return $results;
			}
		$getstmt->close();	
		}
		} 		

	}

?>