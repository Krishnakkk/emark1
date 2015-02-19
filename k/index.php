<?php include("keywords.php");?>
<?php ob_start( 'ob_gzhandler' );include_once 'php/db_connect.php';include_once 'php/functions.php';sec_session_start();?>
<!DOCTYPE HTML>
<html><head>
<meta charset="UTF-8">
<meta property="og:title" content="AC Marriage Halls in Chennai | Kalyana Mandapam in Chennai">
<meta property="og:type" content="article">
<meta property="og:url" content="http://www.technovasolutions.co.in/">
<meta property="og:image" content="images/favicon.png">
<meta property="og:description" content="<?php echo $keywords;?>">
<meta name="viewport" content="width=1100">
<meta name="description" content="Looking for price quotes from best AC Marriage Halls in Chennai or Kalyana Mandapam in Chennai? Prefer bookyourmandapam.com to make your as prettiest one">
<meta name="keywords" content="Marriage Halls in Chennai,Kalyana Mandapam in Chennai, AC Marriage Halls in Chennai">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="icon" href="images/logo.jpg" type="image/x-icon">
<link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
<link rel="stylesheet" href="css/custom-theme/jquery-ui.custom.min.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="./jQuery MultiSelect Widget Demo_files/jquery.multiselect.css">
<link rel="stylesheet" type="text/css" href="./jQuery MultiSelect Widget Demo_files/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/easyslider.js"></script>
<script type="text/javascript" src="js/action.js"></script>
<style type="text/css">
blockquote
{
    clear: both;
    font-style: italic;
    position: relative;
    quotes: none;
    background: url(https://dl.dropbox.com/u/96099766/RotatingTestimonial/open-quote.png) 0 0 no-repeat;
    border: 0px;
    font-size: 120%;
    line-height: 200%;
}
</style>
<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
<link href="js/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
         $(document).ready(function () {           
             $('.bxslider').bxSlider({
                 slideMargin: 3,
                 auto:true,
				 hideControlOnEnd: false,
				 pager: false,
				 speed :200
             });             
         });
    </script>
<script type="text/javascript" src="./jQuery MultiSelect Widget Demo_files/jquery-ui.min.js"></script>
<script type="text/javascript" src="./jQuery MultiSelect Widget Demo_files/jquery.multiselect.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link href="js/select2.css" rel="stylesheet">
<script src="js/select2.js"></script>
<script id="script_e9">
$(document).ready(function() {
$("#e9").select2();
});
</script>
<title>AC Marriage Halls in Chennai | Kalyana Mandapam in Chennai</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54497785-1', 'auto');
  ga('send', 'pageview');

</script>
<!---------------------------------------------------------------------------------------------------------------
GOOGLE WEBMASTER.
---------------------------------------------
-->
<meta name="google-site-verification" content="Y43vUQKIAqFqDje_okXxCM9yNXoXSL9DiIU4rS1e9Qk" />
<!-----------------------------------------------------------------------------------------------------------------
-->
</head>
<body>
<?php include("feedback_form.php");?>
<?php include("php/header.php");?>
<div class="userlike"><a href="javascript:void(0)" onkeypress="javascript:return false" id="userlikeTab" class="right GreenLiveRight" style=""></a></div>
<div id="home">
<div id="banner" class="banner" data-total="5" data-width="645" data-height="397" data-margin="10" data-show="0" data-speed="8000" data-moving="0">
<div class="nextbutton" onClick="nextmove()"></div>
<!--<div class="prevbutton" onClick="prevmove()" style="width: 46px;height: 46px;right: 1216px;margin: 175px 0 0 0px;background-image: url(images/next.png);background-position: center center;background-repeat: no-repeat;cursor: pointer;position: absolute;z-index: 9999;"></div>-->
<form id="venues_search" method="get" action="search" enctype="multipart/form-data">
<div class="search opensans">
<input type="hidden" name="ipaddress" value="<?php echo getRealIp();?>">
<input type="hidden" name="city" value="<?php echo "Chennai";?>">

<div class="title" align="center"><br><strong style="font-size:18px;">START YOUR HALL SEARCH HERE</strong><br><small><i style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFF;">(GET INSTANT AVAILABILITY STATUS, PRICE QUOTES & BOOKING OPTIONS)</i></small></div>
<div class="text"> <b style=" text-align:justify;font-size:18px;padding:0 0 0 21px">I'm Looking For A Hall In</b><br>&nbsp;&nbsp;<small><i style="color:#FFF;">(Select Area, Multiple Select Allowed) </i></small>
<div style="width: 210px;margin: -40px 0 2px 280px;background-color: #FFFFFF;border: 0;border-radius: 5px;">
  <div class="select2-display-none">   <ul class="">   <li class="">No matches found</li></ul></div>
<select name="area[]" id="e9" class="" multiple style="width: 210px;
background-color: #FFFFFF;border: 0;border-radius: 5px;" tabindex="-1">
<?php $ptquery="SELECT area_name FROM `area_list` WHERE 1";if($stmt=$mysqli2->prepare($ptquery)){$stmt->execute();$stmt->store_result();$stmt->num_rows;$stmt->bind_result($area_name);while($stmt->fetch()){$areaslist=unserialize($area);?>
<option value="<?php echo $area_name;?>"><?php echo $area_name;?></option>
<?php }$stmt_region->close();}?> </select>
</div>
</div>
<div class="text">
<table width="109%" height="180">
<tr>
<td width="74" class="frist">Date*</td>
<td width="142"><input type="text" name="date" id="datepicker" class="background_input num input left" value="" required></td>
<td width="106">Time*&nbsp;&nbsp;</td>
<td width="135"><div class="districtselect background_input left">
<select name="time" id="time" class="selectstyle" required>
<option <?php if($_POST['fullday']){?> selected <?php }?> value="fullday">FullDay</option>
<option <?php if($_POST['morning']){?> selected <?php }?> value="morning">Morning</option>
<option <?php if($_POST['evening']){?> selected <?php }?> value="evening">Evening</option>
</select>
</div></td>
<td width="10"></td>
</tr>

<tr>
<td class="frist">Name*</td>
<td><input type="text" name="customer_name" value="<?php echo $_SESSION['EUSERNAME'];?>" id="leadinput" class="background_input input left" required >
<td>No Of Guests*</td>
<td><input type="text" name="no_of_guest" id="no_of_guest" class="background_input num input left" value="" required></td>
</tr>
<tr>
<td class="frist">Email*</td>
<td><input type="text" name="emailid" id="leadinput" class="background_input num input left" value="<?php echo $_SESSION['EUSEREMAIL'];?>" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$"></td>
<td>Contact No*</td>
<td><input type="text" name="customer_no" id="leadinput" class="background_input num input left" value="<?php echo $_SESSION['EUSERPHONE'];?>">
</tr>
<tr>
<td height="44" colspan="4" align="center"><input class="search_button" type="submit" name="submitsearch" value="Search"></td>
<div class="clear"></div>
</td>
</tr>
</table>
</div>
</div>
</form>
<div class="place">
<div class="group right">
<?php $sno=1;$max_results=1;$page=$_REQUEST["pages"];require_once('pagination.php');$page=($page==0?1:$page);$pagenav=($pagenav==0?1:$pagenav);$perpage=10;$startpoint=($page * $perpage)- $perpage;$query1="select hall_id,user_name,hall_name,habit,city,hall_type,hall_rent,image,contact_no,contact_person,emailid,lift,dinings,seatings,food_pref,totalarea,acnonac,status,notify_status ,main_locality,landmark from `hall_details` WHERE featured=1 order by hall_id asc LIMIT 0,10";if($stmt=$mysqli->prepare($query1)){$stmt->execute();$stmt->bind_result($hall_id,$user_name,$hall_name,$habit,$city,$hall_type,$hall_rent,$image,$contact_no,$contact_person,$emailid,$lift,$dinings,$seatings,$food_pref,$total_area,$acnonac,$status,$notify_status, $main_locality, $landmark);while($stmt->fetch()){
	  $url = str_replace(" ", "-", "/".strip_tags(clean_url($hall_name))."<near>".strip_tags(clean_url($main_locality))."-".strip_tags(clean_url($landmark))."-".strip_tags(clean_url($city))."");
			 $url=remove_http($url);

	?>
<div class="case right">
<div class="line gray_bg"></div>
<div class="background"></div>
<div class="information">
<div class="title right"><?php echo $hall_name;?></div>
<table class="right">
<tr class="top">
<td><span style="color:#adadad">Area</span></td>
<td><span style="color:#adadad">Capacity</span></td>
<td><span style="color:#adadad">Event Type</span></td>
</tr>
<tr>
<td><?php echo $main_locality;?></td>
<td><?php echo $seatings;?></td>
<td><span><?php echo $hall_type;?></span></td>
</tr>
</table>
<div class="clear"></div>
</div>
<div class="box">Featured Hall</div>
<?php if($image){?><a href="halls/hall_details?/<?php echo $hall_id; ?><?php echo $url; ?>" target="_blank"><img width="655" height="400" src="manage/images/<?php echo $image;?>" title="<?php echo $hall_name;?>"></a><?php }else{?><img width="645" height="400" src="images/No_Image.jpg"><?php }?> </div>
<?php }}?>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<script type="text/javascript">var config={total:$("#banner").attr("data-total"),width:$("#banner").attr("data-width"),height:$("#banner").attr("data-height"),margin:$("#banner").attr("data-margin"),windowwidth:$(window).width(),mainwidth:$("#home").width(),show:$("#banner").attr("data-show"),speed:$("#banner").attr("data-speed"),nextbuttonmarginleft:$("#banner .nextbutton").css("margin-left").replace("px","")};var data=$("#banner .place .group .case").get();function resetting(){config={total:$("#banner").attr("data-total"),width:$("#banner").attr("data-width"),height:$("#banner").attr("data-height"),margin:$("#banner").attr("data-margin"),windowwidth:$(window).width(),mainwidth:$("#home").width(),show:$("#banner").attr("data-show"),speed:$("#banner").attr("data-speed"),nextbuttonmarginleft:config.nextbuttonmarginleft};if(config.windowwidth<config.mainwidth){config.windowwidth=config.mainwidth}fixedplace()}function fixedplace(){var e=(parseInt(config.windowwidth)-parseInt(config.mainwidth))/2;$("#banner").css("width",config.windowwidth+"px");$("#banner").css("height",config.height+"px");$("#banner").css("position","relative");$("#banner").css("overflow","hidden");$("#banner").css("left","-"+e+"px");$("#banner .place").css("height",config.height+"px");$("#banner .place").css("position","absolute");$("#banner .place").css("overflow","hidden");var c=config.nextbuttonmarginleft;c=((parseInt(config.windowwidth)-parseInt(config.mainwidth))/2)+parseInt(c);$("#banner .nextbutton").css("margin-left",c+"px");var d=(parseInt(config.windowwidth)-parseInt(config.mainwidth))/2;$("#venues_search").css("margin-left",d+"px");var b=(parseInt(config.width)+parseInt(config.margin))-(parseInt(config.windowwidth)-(parseInt(config.mainwidth)+e));$("#banner .place").css("right","-"+b+"px");var a=(parseInt(config.total)*parseInt(config.width))+(parseInt(config.total)*parseInt(config.margin));$("#banner .place .group").css("width",a+"px");$("#banner .place .group").css("height",config.height+"px");$("#banner .place .group").css("position","relative");$("#banner .place .group .case").css("margin-left",config.margin+"px")}function setclass(){$(data).addClass(function(a){return"item-"+a});$.each(data,function(a,b){additem(a)})}function additem(a){$("#banner .place .group").append(data[a])}function rmitem(a){$("#banner .place .group .item-".theitem).remove()}function nextmove(){moving=$("#banner").attr("data-moving");clearInterval(nextmove_int);if(moving==0){$("#banner").attr("data-moving",1);mvpx=parseInt(config.margin)+parseInt(config.width);groupleft=$("#banner .place .group").css("left");$("#banner .place .group").animate({left:"+="+mvpx+"px"},"slow",function(){additem(config.show);if(parseInt(config.show)+1==config.total){config.show=0}else{config.show=parseInt(config.show)+1}$("#banner").attr("data-show",config.show);$("#banner .place .group").css("left",groupleft);$("#banner").attr("data-moving",0)})}nextmove_int=setInterval(nextmove,config.speed)}
function prevmove(){moving=$("#banner").attr("data-moving");clearInterval(nextmove_int);if(moving==0){$("#banner").attr("data-moving",0);mvpx=parseInt(config.margin)+parseInt(config.width);groupright=$("#banner .place .group").css("right");$("#banner .place .group").animate({right:"+="+mvpx+"px"},"slow",function(){additem(config.show);if(parseInt(config.show)+1==config.total){config.show=0}else{config.show=parseInt(config.show)+1}$("#banner").attr("data-show",config.show);$("#banner .place .group").css("right",groupright);$("#banner").attr("data-moving",0)})}nextmove_int=setInterval(nextmove,config.speed)}

function start(){fixedplace();setclass()}start();var nextmove_int=setInterval(nextmove,config.speed);var resetting_int=setInterval(resetting,"100");</script>
<div id="content">
<audio src="images/Nadaswaram.mp3" controls autoplay="true" loop>
<p>If you are reading this, it is because your browser does not support the audio element.</p>
</audio>
<object width="100%" height="360">
  <param name="movie" value="http://www.youtube.com/v/PQ7SeFVeteg?autoplay=0&autohide=1&loop=1"></param>
  <param name="allowFullScreen" value="true"></param>
  <param name="allowScriptAccess" value="always"></param>
  <embed src="http://www.youtube.com/v/PQ7SeFVeteg?autoplay=0&autohide=1&loop=1" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="100%" height="360"></embed>
</object>

<?php /*?><h2><strong>"An aesthetic hall makes a gathering an unforgettable memory". True, isn't it?!!</strong></h2><?php */?>

<!--<embed src="images/Nadaswaram.mp3" width="180" height="90" loop="false" autostart="true" hidden="true" />-->
<?php /*?><video controls width="800">
    <!-- if Firefox -->
    <source src="images/demo.ogg" type="video/ogg" />
    <!-- if Safari/Chrome-->
    <source src="images/demo.mp4" type="video/mp4" />
    <source src="images/demo.flv" type="video/flv" />
    <!-- If the browser doesn't understand the <video> element, then reference a Flash file. You could also write something like "Use a Better Browser!" if you're feeling nasty. (Better to use a Flash file though.) -->
    <embed src="images/demo.swf" type="application/x-shockwave-flash" width="1024" height="798" allowscriptaccess="always" allowfullscreen="true"></embed>
</video><?php */?>
<!-- you *must* offer a download link as they may be able to play the file locally. customise this bit all you want -->
<!--<p>	<strong>Download Video:</strong>
	Closed Format:	<a href="images/demo.mp4">"MP4"</a>
	Open Format:	<a href="images/demo.ogg">"Ogg"</a>
</p>-->
<!--<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="800" HEIGHT="240" id="MyMovieName">
<PARAM NAME=movie VALUE="images/demo.swf">
<PARAM NAME=quality VALUE=high>
<EMBED src="images/demo.swf" quality=high WIDTH="800" HEIGHT="240"
NAME="MyMovieName" ALIGN="" TYPE="application/x-shockwave-flash"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>-->
<?php /*?><video width="800" height="240" autoplay>
 <source src="images/demo.mp4" type="video/mp4" />
    <source src="images/demo.flv" type="video/flv" />
    <source src="images/demo.ogg" type="video/ogg" />
    <!-- If the browser doesn't understand the <video> element, then reference a Flash file. You could also write something like "Use a Better Browser!" if you're feeling nasty. (Better to use a Flash file though.) -->
</video><?php */?>

<?php /*?><h2>
<strong>BookYourMandapam</strong>- Gives you the freedom to Celebrate</h2><h2><strong>SEARCH</strong> halls, <strong>BOOK</strong> online, and <strong>RELAX</strong>.. You Need to look stunning in your event!</h2>
<h2>See Our Complete <a href="search?submitsearch=Search"><strong>List Of Halls</strong></a></h2> <br><?php */?>
</div>
<br><script type="text/javascript" src="js/home.js"></script>
<div class="information" id="content" style="border:0px solid #d9d9d9;border-radius:5px">
<table>
<tr>
<td colspan="3" align="center"><strong style="color:#810707;font-weight:bold;font-size:22px">Testimonials</strong></td>
</tr><tr>
<td colspan="3" align="center">&nbsp; </td>
</tr>
<tr>
<td class="data" style="border:1px solid;border-radius:10px">
<div id="quotesText">
<h3 align="center"><strong>What Customer Feel About Our Service?</strong>
</h3>
<div id="openQuot" class="quo"></div>
<?php $sno=1;$queryselect="select t1.id,t1.name,t1.message from `feedbacks` t1 WHERE `display`='yes' order by t1.id desc ";if($stmt=$mysqli->prepare($queryselect)){$stmt->execute();$stmt->bind_result($id,$name,$message);while($stmt->fetch()){?>
<div id="q<?php echo $sno;?>" class="quo q<?php echo $sno;$sno=$sno+1;?>" style="width:440px;height:16px"><?php echo $message;?><br /><i style="font-family:Verdana,Geneva,sans-serif;font-weight:lighter"><?php echo $name;?></i>
</div>
<?php }$stmt->close();}?>
<div id="closeQuot" class="quo"></div>
</div>
<?php /*?><ul class="bxslider">
			<li style="width:100px; height:200px;">
				<blockquote>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.&quot;
				<p style="text-align:right;margin-right:20px;">- David</p>	
				</blockquote>
				</li>
		<li style="width:100px; height:200px;"><blockquote>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.&quot;
		<p style="text-align:right;margin-right:20px;">- Srinivas</p>
		</blockquote>
		</li>
		<li style="width:100px; height:200px;"><blockquote>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.&quot;
		<p style="text-align:right;margin-right:20px;">- Anita</p>
		</blockquote></li>
		</ul><?php */?>

</td>
<td></td>
<td class="data" style="border:1px solid;border-radius:10px">
<div id="quotesText">
<h3 align="center"><strong>What Customer Feel About Our Halls?</strong></h3>
<div id="openQuot" class="quo"></div>
<?php $sno=1;$queryselect="select t1.id,t1.comment_by,t1.testimonial, t1.hall_id from `testimonials_halls` t1 WHERE display='yes' order by t1.id asc ";if($stmt=$mysqli->prepare($queryselect)){$stmt->execute();$stmt->bind_result($id,$comment_by,$testimonial,$hall_id2);while($stmt->fetch()){?>
<div id="q<?php echo $sno;?>" class="quo q<?php echo $sno;$sno=$sno+1;?>" style="width:443px;height:16px"><?php echo $testimonial;?><br /><i style="font-family:Verdana,Geneva,sans-serif;font-weight:lighter"><?php echo $comment_by;?></i><br><b style="font-family:Verdana,Geneva,sans-serif;font-weight:lighter"><?php echo get_item(hall_details,hall_id,$hall_id2,hall_name);?></b>
</div>
<?php }$stmt->close();}?>
<div id="closeQuot" class="quo"></div>
</div>
</td>
</tr>
</table>
</div>
<style>
.ast{

    text-indent: 38px;
    font-size:15px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: justify;


}
</style>

<!----contentstart--->
<div class="ast">
<h1  style="color: rgb(132, 10, 10); font-size:20px;"><strong style="margin-left:33%;">Marriage Halls in Chennai</strong></h1>
<p >Marriages are made in heaven but celebrated on earth. You need the best place to celebrate your 

marriage. Bookyourmandapam  provides best online booking experience to our customers. Now a 

day's booking <strong>marriage halls in Chennai</strong> is not an easy job. At least you have to book a marriage hall 

a year or before. We provide best marriage halls that include food, sitting arrangement, decorations, 

music system, security and parking system. Most of the marriage hall have a high level of 

competition to attract repeated client by providing customers the best service allowing everyone to 

be satisfied as much as possible. 

<p>So we pick the best <strong>Kalyana Mandapam in Chennai</strong> and provide important detail like venue, sitting 

arrangement, AC or Non-AC marriage hall and other booking charges. Most of the marriage halls are 

quite spacious and very neat, particularly bathroom and toilets are kept in hygienic condition. The 

madam in our website has stunning exteriors with well-lit sodium lamp. Some of the marriage halls in Chennai are large enough to accommodate your guest. According to 

your budget, you can choose your marriage hall. Marriage hall which is centrally located in Chennai 

has a high budget. You need high budget for <strong>AC Marriage Halls in Chennai</strong>. There is some marriage 

hall in Chennai which are big enough to accommodate more than 500 people. But the service will be 

as good as star hotels in Chennai.</p>

 

Some of the marriage halls have the big entrance, dining hall can accommodate more 200 persons at 

a time. Most of the marriage hall have a great view of Chennai city. Now a day's marriages become 

more trendy, you need space for parties which includes music concert, cultural program or religion 

meetings. We provide online payment facilities. For booking a marriage hall you just need to log on 

to our website and choose your marriage hall. Just Sit with your family members and compare with 

each and every marriage hall before finalizing it. We provide best marriage hall at attractive price. 

You can pay online from beginning to end with simple and user friendly websites. So book your 

marriage hall and celebrate your best occasion of your life.</p>
</div>
<!---contentends-->
<?php /*?><div>
<form method="post" action="../manage/php/ccavRequestHandler.php" enctype="multipart/form-data">
        	   <input type="hidden" name="merchant_id" value="sen_40487"/>
          <table width="50%" height="100" border='1' align="center">
				<tr>
					<td>Parameter Name:</td><td>Parameter Value:</td>
				</tr>
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>Merchant Id	:</td><td><input type="text" name="merchant_id" value="40487"/></td>
				</tr>
				<tr>
					<td>Order Id	:</td><td><input type="text" name="order_id" value="123654789"/></td>
				</tr>
				<tr>
					<td>Amount	:</td><td><input type="text" name="amount" value="1.00"/></td>
				</tr>
				<tr>
					<td>Currency	:</td><td><input type="text" name="currency" value="INR"/></td>
				</tr>
				<tr>
					<td>Redirect URL	:</td><td><input type="text" name="redirect_url" value="http://www.bookyourmandapam.com/"/></td>
				</tr>
			 	<tr>
			 		<td>Cancel URL	:</td><td><input type="text" name="cancel_url" value="http://www.bookyourmandapam.com/login"/></td>
			 	</tr>
			 	<tr>
					<td>Language	:</td><td><input type="text" name="language" value="EN"/></td>
				</tr>
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" name="billing_name" value="Nivahar"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address" value="6BF4 Rajesh Flats, East Pudhuvai Nagar, Railway Border Road, Chrompet"/></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city" value="Chennai"/></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state" value="TN"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip" value="600044"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Country	:</td><td><input type="text" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Tel	:</td><td><input type="text" name="billing_tel" value="8807846967"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" name="billing_email" value="nivahar@technovasolutions.co.inb"/></td>
		        </tr>
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="Nivahar"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="6BF4 Rajesh Flats, East Pudhuvai Nagar, Railway Border Road, Chrompet"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="text" name="delivery_city" value="Chennai"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="text" name="delivery_state" value="TN"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="600044"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="text" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="8807846967"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="additional Info."/></td>
				</tr>
				 
				 <tr>
		     		<td colspan="2">Payment information:</td>
		     	</tr>
				 <tr> <td> Payment Option: </td> 
		         	  <td> 

		         	  		
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTCRDC">Credit Card
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTDBCRD">Debit Card  <br/>
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTNBK">Net Banking 
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTCASHC">Cash Card <br/>
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTMOBP">Mobile Payments
		         	   </td>
		         </tr>
		         
		         <tr> <td> Card Type: </td>
		             <td><input type="text" id="card_type" name="card_type" value="" readonly="readonly"/></td>
		         </tr>
		        
		        <tr> <td> Card Name: </td>
		             <td><input type="text" id="card_name" name="card_name" value="Niva"> </td>
		        </tr>
		        
		        <tr> <td> Data Accepted At </td>
		             <td><input type="text" id="data_accept" name="data_accept" readonly="readonly"/></td>
		        </tr>
		         
		         <tr> <td> Card Number: </td>
		            <td> <input type="text" name="card_number" value=""/>e.g. 4111111111111111 </td>
		         </tr>
		          <tr> <td> Expiry Month: </td>
		               <td> <input type="text" name="expiry_month" value=""/>e.g. 07 </td>
		         </tr>
		          <tr> <td> Expiry Year: </td>
		          	   <td> <input type="text" name="expiry_year" value=""/>e.g. 2027</td>
		         </tr>
		          <tr> <td> CVV Number:</td>
		               <td> <input type="text" name="cvv_number" value=""/>e.g. 328</td>
		         </tr>
		         <tr> <td> Issuing Bank:</td>
		            <td><input type="text" name="issuing_bank" value=""/>e.g. State Bank Of India</td>
		         </tr>
			<tr> 
				<td> Mobile Number:</td>
		            	<td><input type="text" name="mobile_number" value=""/>e.g. 9770707070</td>
		         </tr>
				 
		        <tr>
		        	<td></td><td><input type="submit" value="CheckOut"></td>
		        </tr>
	      	</table>
        </form>
</div><?php */?>
<br>
<div class="halls">
<div class="top" align="center">
<div class="type">
<div class="table text" style="color:rgb(129,7,7)">&nbsp;<strong style="font-size:22px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Services</strong>
</div>
</div>
</div>
<div>
<table class="information" id="content">
<tr>
<td><div class="case"><img src="images/caterers.jpg" width="210px" height="200px" title="Caterers" style="border:1px solid"> <div class="name"><h3> <strong>Caterers</strong></h3></div>
<div class="type"><span style="color:#22d2a3"></span></div>
<table class="data venuecase">
<tr>
<td>People to fulfil the dreams of your tastebuds….</td>
</tr>
</table>
<div class="view red" style="font-size:15px"><a href="#">View Caterers<img src="images/to_s.png" alt="<?php echo $keywords;?>"></a></div>
</div></td>
<td><div class="case"><img src="images/decorators.jpg" width="210px" height="200px" title="Beauticians" style="border:1px solid"> <div class="name"><h3><strong>Decorators</strong></h3></div>
<div class="type"><span style="color:#22d2a3"></span></div>
<table class="data venuecase">
<tr>
<td>Make your dream come true.Create a stage of your long time dream.</td>
</tr>
</table>
<div class="view red" style="font-size:15px"><a href="#">View Decorators<img src="images/to_s.png" alt="<?php echo $keywords;?>"></a></div>
</div></td>
<td><div class="case"><img src="images/beauticians.jpg" width="210px" height="200px" title="Beauticians" style="border:1px solid"> <div class="name"><h3> <strong>Beauticians</strong></h3></div>
<div class="type"><span style="color:#22d2a3"></span></div>
<table class="data venuecase">
<tr>
<td>People to make the Prince and Princess look smarter…</td>
</tr>
</table>
<div class="view red" style="font-size:15px"><a href="#">View Beauticians<img src="images/to_s.png" alt="<?php echo $keywords;?>"></a></div>
</div></td>
<td><div class="case"><img src="images/videocoverage.jpg" width="210px" height="200px" title="Video Coverage" style="border:1px solid"> <div class="name"><h3> <strong>Video Coverage</strong></h3></div>
<div class="type"><span style="color:#22d2a3"></span></div>
<table class="data venuecase">
<tr>
<td>People to Capture the moment of your happiness….</td>
</tr>
</table>
<div class="view red" style="font-size:15px"><a href="#">View Video coveragers<img src="images/to_s.png" alt="<?php echo $keywords;?>"></a></div>
</div></td>
</tr>
</table>
</div>
</div>
</div>
<?php include("php/footer.php");?>
</body>
</html>