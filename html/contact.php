<?php

if(isset($_POST['submit']))
{
	$errors = array();
	$recipient = 'superheroyogurt@yahoo.com'; //'TheRoyalClosetGA@yahoo.com';
	
	//Check form inputs and assign variables
	if(empty($_POST['name']))
	{
		$errors[] = 'You must provide a Name.';
	}
	else
	{
		$username = stripslashes(trim($_POST['name']));
	}
	
	if(empty($_POST['email']))
	{
		$errors[] = 'You must provide a return Email Address.';
	}
	else
	{
		$email = stripslashes(trim($_POST['email']));
	}
	
	if(empty($_POST['subject']))
	{
		$errors[] = 'You must provide a Subject.';
	}
	else
	{
		$subject = stripslashes(trim($_POST['subject']));
	}
	
	if(empty($_POST['message']))
	{
		$errors[] = 'You must type a Message.';
	}
	else
	{
		$message = stripslashes(trim($_POST['message']));
	}
	
	//Fromat message and Send Email
	if(empty($errors))
	{
		$email_subject = "SuperHeroYogurt.com User Notification";
		
		$body = "From: " . $username . "\n";
		$body = $body . "Email: " . $email . "\n";
		$body = $body . "Subject: " . $subject . "\n\n";		
		$body = $body . $message;
		
		$headers = "Reply-To: " . $email;
			
		mail($recipient, $email_subject, $body, $headers);
	}
	
}
else
{
	$errors = NULL;
}

?>

<!DOCTYPE HTML>
<html lang="en">    
    <head>
        <meta charset="utf-8" />
        <link href="_css/master.css" type="text/css" rel="stylesheet" />
		<link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon" />
        <title>Contact Us | SuperHero Yogurt</title>
    </head>
    
    <body>
        <div id="page">
            
            <div id="header">
                <div id="logo"><img src="_images/logo.png" alt="SuperHero Yogurt" /></div>
                <div id="nav">
                    <ul>
                        <li><a href="content.php#menu" class="menu"><span>Menu</span></a></li>
                        <li><a href="content.php#nutrition" class="nutrition"><span>Nutrition</span></a></li>
                        <li><a href="content.php#specials" class="specials"><span>Specials</span></a></li>
                        <li><a href="content.php#specEvents" class="specEvents"><span>Parties</span></a></li>
                    </ul>
                </div>
            </div>
            
            <div id="content" style="height: auto;">
                <div id="contact" class="item" style="height: auto;">
                    <div id="title_tleft"><img src="_images/contact_head.png" alt="CONTACT US" /></div>
                    <div id="subimg_tleft"><img src="_images/yogurt_green.png" alt="Yogurt" /></div>
                    <div id="artbox" style="height: auto; background-color: Teal;">
						<div id="arttext" class="contact">
							<div id="contact_text_area">
								<a href="http://www.facebook.com/pages/SuperHero-Yogurt/177926442271966" target="_blank"><img src="_images/facebookhero.png" alt="Our Facebook Page" height="46" /></a>
								<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSuperHero-Yogurt%2F177926442271966%23&amp;send=false&amp;layout=standard&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=segoe+ui&amp;height=80&amp;appId=180932115296524" scrolling="no" frameborder="0" style="border:2px solid black; background-color: lemonChiffon; overflow:hidden; width:215px; height:46px; padding: 6px;" allowTransparency="true"></iframe>
								<p>8651 Hiram-Acworth Hwy.<br />
								Suite 111<br />
								Dallas, Ga 30157<br />
								(770)-694-6975</p>
							</div>
							<div id="contact_form_area">
								<span class="p_header" style="font-size: x-large; text-transform: uppercase;">Contact Us</span><i style="font-size: 10px; padding-left: 5px;">*Fields marked with asterisk are required.</i>
								<div style="padding: 5px;"></div>
								<?php
									if(!empty($errors))
									{
										echo '<div class="error"><p>Error(s):<ul>';
										foreach($errors as $msg)
										{
											echo '<li>' . $msg . '</li>';
										}
										echo '</ul></p></div>';
									}
								?>
								<form class="feedbackform" method="POST" action="contact.php?id=1">
								<input type="hidden" name="submit" value="TRUE">
						
								<div class="fieldwrapper">
									<label for "name" class="styled">Your Name:*</label>
									<div class="thefield">
										<input type="text" name="name" size=30 maxlength=50 />
									</div>
								</div>
						
								<div class="fieldwrapper">
									<label for "email" class="styled">Email Address:*</label>
									<div class="thefield">
										<input type="text" name="email" size=30 maxlength=50 />
									</div>
								</div>
								
								<div class="fieldwrapper">
									<label for "subject" class="styled">Subject:*</label>
									<div class="thefield">
										<input type="text" name="subject" size=30 maxlength=50 />
									</div>
								</div>
								
								<div class="fieldwrapper">
									<label for "message" class="styled">Message:*</label>
									<div class="thefield">
										<textarea name="message"></textarea>
									</div>
								</div>
						
								<div class="">
									<input type="submit" value="Submit" /><input type="reset" value="Reset" />
								</div>
						
							</form>
							</div>
						</div>
					</div>
                </div>
            </div>
            
            <div id="bottom_nav">
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="franchise.php">Franchise</a></li>
                </ul>
            </div>
            
            <div id="footer">
                <p>&copy;<?php echo date("Y"); ?> SuperHero Yogurt. All Rights Reserved.<br />
					8651 Hiram-Acworth Hwy. Suite 111 Dallas, Ga 30157<br />
					(770)-694-6975</p>
            </div>
            
        </div> <!-- End Page Section -->
    </body>
    
</html>
