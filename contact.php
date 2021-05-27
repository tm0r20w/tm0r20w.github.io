<?php
// Free html5 templates : www.zerotheme.com

$text = "";
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme.com - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
		$text = "Your Message was sent successfully !";
	}
	else
	{
		$text = "Error! Please try again.";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="css/contactform.css">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page6">
<div class="body1">
	<div class="body2">
		<div class="body3">
			<div class="main zerogrid">
<!-- header -->
				<header>
					<div class="wrapper">
						<h1><a href="index.html" id="logo"><img src="images/logo.png"/></a></h1>
						<form id="search" method="post">
							<div>
								<input type="submit" class="submit" value="">
								<input class="input" type="text" value="Site Search" onblur="if(this.value=='') this.value='Site Search'" onFocus="if(this.value =='Site Search' ) this.value=''">
							</div>
						</form>
						<nav>
							<ul id="menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="About.html">About</a></li>
								<li><a href="Folio.html">Folio</a></li>
								<li><a href="Services.html">Services</a></li>
								<li><a href="News.html">News</a></li>
								<li id="active" class="end"><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</header>
<!-- / header-->
<!-- content -->
				<section id="content">
					<div class="wrapper">
						<h2>Contact Form</h2>
						<div id="contact_form">
							        
						<!--Warning-->
							<center><strong style="color:red; text-decoration: underline;"><?php echo $text;?></strong></center>
							<!---->
							
							<strong>Hello !! You can send message to us.</strong>
							<form name="form1" id="ff" method="post" action="contact.php">
								 <label>
								 Name*:
								 <input type="text" placeholder="Please enter your name" name="name" id="name" required>
								 </label>
							 
								 <label>
								 Email*:
								 <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
								 </label>
									
								 <label>
								 Message*:
								 <textarea name="message" id="message">Please enter your message</textarea>
								 </label>
							 
								 <input class="sendButton" type="submit" name="Submit" value="Send">
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<div class="body4">
	<div class="main zerogrid">
		<section id="content2">
			<div class="line2 wrapper">
				<div class="wrapper">
					<article class="col-2-3"><div class="wrap-col">
						<h2>Miscellaneous</h2>
						<div class="pad">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.
						</div>
					</div></article>
					<article class="col-1-3"><div class="wrap-col">
						<div class="marg_left2">
						<h2>My Contacts</h2>
						<div class="pad">
							<span class="col3">
								<strong>	
									Country:<br>
									State:<br>
									City:<br>
									Telephone:<br>
									Email:
								</strong>
							</span>	
							USA<br>
							California<br>
							San Diego<br>
							+354 5635600<br>
							<a href="mailto:">elenwhite@mail.com</a>
						</div>
						</div>
					</div></article>
				</div>
			</div>				
		</section>
	</div>
</div>
<!-- / content -->
<div class="main zerogrid">
<!-- footer -->
	<footer>
		<div class="wrapper">
			<div class="col-2-3"><div class="wrap-col">
			 	<a rel="nofollow" href="http://www.zerotheme.com/" target="_blank">Free Html5 Templates</a> designed by <a rel="nofollow" href="http://www.TemplateMonster.com/" target="_blank">TemplateMonster</a> | <a rel="nofollow" href="http://www.Zerotheme.com/" target="_blank">Zerotheme</a><br>
			</div></div>
			<div class="col-1-3"><div class="wrap-col">
				<ul id="icons">
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.png" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.png" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.png" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.png" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.png" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.png" alt=""></a></li>
				</ul>
			</div></div>
		</div>
<!-- {%FOOTER_LINK} -->
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
