<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <link href="_css/master.css" type="text/css" rel="stylesheet" />
		<link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="_javascript/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="_javascript/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="_javascript/init.js"></script>
		<script type="text/javascript" src="_javascript/ajaxtabs.js"></script>
        <title>SuperHero Yogurt</title>
    </head>
    
    <body>
        <div id="page">
            
            <div id="header">
                <div id="logo"><img src="_images/logo.png" alt="SuperHero Yogurt" /></div>
                <div id="nav">
                    <ul>
                        <li><a href="#menu" class="menu"><span>Menu</span></a></li>
                        <li><a href="#nutrition" class="nutrition"><span>Nutrition</span></a></li>
                        <li><a href="#specials" class="specials"><span>Specials</span></a></li>
                        <li><a href="#specEvents" class="specEvents"><span>Parties</span></a></li>
                    </ul>
                </div>
            </div>
            
            <div id="content">
                <div id="menu" class="item">
                    <div id="title_tleft"><img src="_images/menu_head.gif" alt="MENU" /></div>
                    <div id="subimg_tleft"><img src="_images/yogurt_green.png" alt="Yogurt" /></div>
                    <div id="artbox">
						<div id="arttext" class="menu">
							<p class="menutext">At SuperHero Yogurt, we have a rotating selection of SuperHero frozen flavors and every topping for even a pint sized SuperHero. From fresh fruits to all the classics like rainbow sprinkles and Gheredelli. Mix up as many flavors and toppings as your little heart desires. At SuperHero Yogurt it's <b class="blue">by weight not by topping</b> so you can have as much or as little of everything you want.</p>
							
							<div id="menuContainer"></div>
							
							<ul id="menutabs" class="menutabs">
								<li><a href="_includes/menu/yogurt.html" rel="menuContainer">YOGURT</a></li>
								<li><a href="_includes/menu/toppings.html" rel="menuContainer">TOPPINGS</a></li>
								<li><a href="_includes/menu/snacks.html" rel="menuContainer">CANDY</a></li>
							</ul>
							
							<script type="text/javascript">
								var subTabs = new ddajaxtabs("menutabs", "menuContainer")
								subTabs.setpersist(false)
								subTabs.setselectedClassTarget("link") //"link" or "linkparent"
								subTabs.init()
							</script>
						</div>
					</div>
                </div>
                <div id="nutrition" class="item">
                    <div id="subimg_tright"><img src="_images/yogurt_orange.png" alt="Yogurt" /></div>
                    <div id="title_tright"><img src="_images/nut_head.gif" alt="NUTRITION" /></div>
                    <div id="artbox">
						<div id="arttext" class="nutrition">
							<p class="nuthead">Gourmet Frozen <b class="red">Yogurt</b> for Ice Cream <b class="red">Lovers!</b></p>
							<p>SuperHero Frozen Yogurt is made with the highest quality ingredients, and our secret recipe is specially blended for a smooth and creamy taste.
								At SuperHero we craft our frozen yogurt with one of the highest counts of beneficial live natural yogurt
								cultures. When present in the intestinal tract of the human body these cultures help to ensure the proper balance
								needed for digestion and good health. Many lactose intolerant individuals can enjoy SuperHero frozen yogurt
								because it is truly cultured and fermented. <b>(We don't just sprinkle cultures in ice cream mix... We really make yogurt!)</b></p>
							<img style="margin-top: 10px;" src="_images/nyaseal.png" alt="NYA Seal" />
							<p style="float: right; width: 648px;">Our frozen yogurt meets and exceeds the requirements set forth by the National Yogurt Association (NYA) for frozen yogurt and proudly carries the
								NYA's Live & Active Cultures Seal. SuperHero frozen yogurt actually meets and exceeds the NYA's requirement for refrigerated yogurt (the cup yogurt
								you might buy at the store and enjoy for breakfast). So, make sure to include SuperHero frozen yogurt as a part of your regular diet to replenish the live and
								active cultures in your digestive tract!</p>
							<div id="nutrbox">
								<p>Our Yogurt</p>
								<ul>
									<li>Contains beneficial probiotic live and active cultures.</li>
									<li>All Nonfat and NSA flavors are low in sodium and cholesterol.</li>
									<li>Original Tart&#8482; and EuroTart&#8482; flavors are made with all natural colors, flavors, and sweeteners.</li>
								</ul>
							</div>
							<div id="nutrbox">
								<p>Our Non-Dairy Sorbet</p>
								<ul>
									<li>Made with all natural colors, flavors, and sweeteners.</li>
									<li>No fat, sodium, or cholesterol.</li>
									<li>Contains real fruit juice.</li>
									<li>Non-dairy.</li>
									<li>Gluten free.</li>
								</ul>
							</div>
							<div id="nutrbox">
								<p>Other Benefits</p>
								<ul>
									<li>All SuperHero products are OU-D Kosher Certified.</li>
									<li><b class="blue">All</b> flavors are Gluten-Free <b class="blue">except</b> for: Red Velvet Cake, Cake Batter, Whoppers&#8482;, Angel Food Cake, Thin Mints, and Cookies 'n Cream.</li>
								</ul>
							</div>
						</div>
					</div>
                </div>
                <div id="specials" class="item">
                    <div id="title_tleft"><img src="_images/spec_head.png" alt="SPECIALS" /></div>
                    <div id="subimg_tleft"><img src="_images/yogurt_pink.png" alt="Yogurt" /></div>
                    <div id="artbox">
						<div id="arttext" class="specials">
							<p class="spechead spectext">Check Out Our <b>Special</b> Offers and Events!</p>
							<div id="leftbubble">
								<p class="bubble" style="clear: left;"><b class="red">GUESS</b> the price of your yogurt and it's <b class="red">FREE!</b> Happening Everyday!</p>
							</div>
							<div id="centerbubble">
								<p class="bubble" style="clear: left;">Proudly serving <b style="color: green">Nathan's</b> Hotdog Combo: $5<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and Nachos: $2</p>
							</div>
							<div id="rightbubble">
								<p class="bubble"><b class="blue">KID'S NIGHT!</b><br />All kid's yogurt one flat</br />rate of $2.99. Every <br /><b>Tuesday</b> from <b>4pm</b> to <b>8pm</b>.</p>
							</div>
							<p class="spectext" style="position:absolute; top: 330px;"><b>FUNDRAISING!</b><br />We offer fundraising opportunities for your sports team or organization. For more information please inquire within.</p>
						</div>
					</div>
                </div>
                <div id="specEvents" class="item">
                    <div id="subimg_tright"><img src="_images/yogurt_yellow.png" alt="Yogurt" /></div>
                    <div id="title_tright"><img src="_images/parties_head.png" alt="PARTIES" /></div>
                    <div id="artbox">
						<div id="arttext" class="parties">
							<p class="partyhead">Book Your <b class="blue">Party</b> Here!</p>
							<p style="margin-top: 32px; line-height: 20px;"><b class="header">Basic Party:</b><br />Cost per person is $10.00 per cup of yogurt. A special area will be set aside for you and your group during the party.
							<div id="additems">
								<b class="header">Additional Items:</b>
								<ul>
									<li><b>Super Hero Appearance:</b> Choose from Captain America, Batman, Superman, Wonder Woman, and Spiderman to appear for 1 hour during your party, $100.00 per hour; payment in advance.</li>
									<li><b>Jump House:</b> Variety of sizes and themes available for use outside.</li>
									<li><b>Pizza Party:</b> We can provide your favorite pizza for your group and all utensils. Please inquire about pricing.</li>
									<li><b>Cake/Cupcakes:</b> We can provide you anything from a basic cake to a specialty cake. Please inquire about pricing. You are also free to bring in your own cake.</li>
									<li><b>Party Favors:</b> Party favors can be provided at an additional fee, please inquire. We are happy to provide anything from balloons, banners, and goody bags in the Super Hero decor.</li>
								</ul>
							</div>
							<p style="font-size: x-small; clear: left; float: left;">*<b class="red">Download</b> the party request form by clicking on the speech bubble to the right.</p>
							<a href="_downloads/SuperHeroYogurt_PartyForm.pdf" target="_blank">PARTY FORM!</a>
							<img src="_images/capAm.png" alt="Captain America Visit!" />
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
