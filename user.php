<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html lang="en" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>@emoorephp</title>

<meta content="IE=11.0000" http-equiv="X-UA-Compatible">
<meta name="description" content="Social gaming site." />
<meta name="keywords" content="social, gaming" />
<meta property="og:site_name" content="VGS"/>
<meta property="og:description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="ico/favicon.ico" type="image/x-icon" />

<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>    
</head>
<body onload="loadIcn()">
<!------- include header start -->
<div class="hdrWpr">
	<div class="hdrCnt">
		<div class="mMnu diB cP" onclick="lMnu()">
			<span></span><span></span><span></span>
		</div>
		<div class="diB hdrInr fR">
			<a href="browse.php" class="m-n-l">browse</a>
			<div class="hdrLgo diB cP">
				<a class="m-n-l" href="index.php">merra</a>
			</div>
			<div class="m_search fR"> 
		        <form action="search.php" method="get">
		       		<input type="submit" value='s'> 
		        	<input id="dbS" name="s" type="text" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search" > 
		        </form>
		      <div id="dbSr"></div> 
		    </div>
	    </div>
	</div>
</div>
<!------- include header end -->
<!------- main menu dropdown start
make bodyWpr a varible to only include on the user page
 -->
<div class="lMnuCtr  bodyWpr">
	<div class="lMnuWpr pF dN">
		<span id="bck1" class="dN bckBtn cP fR" onclick="bck1()">back</span>
		<span id="bck2" class="dN bckBtn cP fR" onclick="bck2()">back</span>
		<span id="bck3" class="dN bckBtn cP fR" onclick="bck3()">back</span>

		<span id="xLs1" class="dN bckBtn cP fR" onclick="xLs1()">back</span>
		<span id="xLs2" class="dN bckBtn cP fR" onclick="xLs2()">back</span>

		<span id="xLa" class="dN bckBtn cP fR" onclick="xLa()">back</span>
		<span id="xLb" class="dN bckBtn cP fR" onclick="xLb()">back</span>
		<span id="xLc" class="dN bckBtn cP fR" onclick="xLc()">back</span>
		<span id="xLd" class="dN bckBtn cP fR" onclick="xLd()">back</span>

		<span class="lMcl pA cP" onclick="lMnu()">X</span>
		<div class="lMur">
			<a id="lMnu1" href="user.php">
				<img src="img/temp/tempUsr.jpg"/>
				<div class="lMncntr">
					<span class="lMupr dB">@emoorephp</span>
					<span class="lMlwr">my page</span>
				</a>
			</div>
		</div>
		<div class="lMlr">
			<span onclick="psT1a()">post</span> / 
			<a onclick="lmlrSx()">settings</a> /  
			<a href="">logout</a>
		</div>
		<!-- setings module start -->
		<div class="lmlrSx dN">
			<div class="pstHdr">
				<img class="cP" src="img/temp/tempUsr.jpg" title="upload | 1584(px) x 500(px) pixels " onclick=""/>
				<div class="stUsrwrp">
					<input class="stUme" placeholder="Username" value="@emoorephp"/>
					<span class="taGo lnkHvr cP" onclick="SxMdx3()">view banner</span>
				</div>
			</div>
			<div class="SxNav">
				<a onclick="lmlrSx1()">Profile</a> 
				<a onclick="lmlrSx2()">Account</a> 
				<a onclick="lmlrSx3()">Save</a>
			</div>
			<div class="SxCnt">
				<div id="lmlrSx1">
					<input id="" type="text" placeholder="First Name" value=""/>
					<input id="" type="text" placeholder="Last Name" value=""/>
					<textarea id="" placeholder="Bio" value=""></textarea>
					<input id="" type="text" placeholder="Website" value="http://www.aviyon.com" value=""/>
					<input id="" type="text" placeholder="Location" value=""/>
					<input id="" type="text" placeholder="Country" value=""/>
				</div>
				<div id="lmlrSx2" class="dN">
					<input id="" type="text" placeholder="Email Address" value="emmanuel.moore@aviyon.com"/>
					<input id="" type="text" placeholder="Alternative Email Address" value=""/>
					<input id="" type="text" placeholder="(---) --- ----" value=""/>
					<label>Join date</label> 
					<input id="" type="text" placeholder="Join date" value="3/22/15"/>
					<label>Last login</label> 
					<input id="" type="text" placeholder="Last login" value="4/1/15"/>
					<a id="SxPwdx2" onclick="SxMdx1()">password</a>
					<div class="dctBtn cP" onclick="SxMdx2()">Deactivate</div>
				</div>

				<div id="SxMdx3" class="dN">
					<p>1584(px) x 500(px) pixels</p>
					<img class="stxBnr" src="img/temp/usrBnr1.jpg"/>
					<a id="" class="fR">Update</a>
				</div>

				<div id="SxMdx1" class="dN">
					<input id="" type="password" placeholder="Current Password" value=""/>
					<input id="" type="password" placeholder="New Password" value=""/>
					<input id="" type="password" placeholder="Re-type New Password" value=""/>
					<a id="" class="fR">Update</a>
				</div>

				<div id="SxMdx2" class="dN">
					<form class="dctFnt" enctype="multipart/form-data" method="post" action="php_parsers/deactivate_system.php">
						<span class="radio-info">
							<input id="deact" class="radio-select" name="reason" value="deact-1" type="radio"> 
								<p>Ill be back, on later.</p><br>
							<input id="deact" class="radio-select" name="reason" value="deact-2" type="radio"> 
								<p>Im being harassed.</p><br>
							<input id="deact" class="radio-select" name="reason" value="deact-3" type="radio"> 
								<p>I dont like this.</p><br>
							<input id="deact" class="radio-select" name="reason" value="deact-4" type="radio"> 
								<p><input id="deact" name="reason" placeholder="other?" type="text"></p><br>
						</span>
						<span class="note-ex fL"><span class="alert">*</span> Remember you may always log back in to reopen your account.</span>
						<input id="deact-btn" class="lnkHvr cP fR" value="deactivate" type="submit">
					</form>
				</div>

				<div id="lmlrSx3" class="dN">
					<input id="" type="password" placeholder="Your Password" value=""/>
					<a id="" class="fR">Update</a>
				</div>
			</div>
		</div>
		<!-- setings module end -->
		<!-- post module start-->
		<div class="pstWpr1 dN">
			<div class="pstHdr">
				<a href="user.php"><img src="img/temp/tempUsr.jpg"/></a>
				<div class="fL">
					<a href="user.php">@emoorephp</a>
					<span class="taGo">Just now</span>
				</div>
			</div>
			<div class="pstInr1">
				<textarea id="" type="text" placeholder="What do you want to say?"></textarea>
				<div class="imgPstHldr cP"><p class="cP">Add an image or video</p></div>
			</div>
			<div id="pstFnc" class="lnkHvr fR cP">post</div>
		</div>
		<!-- post module end-->
		<div class="lMur2">
			<span class="lMhdr">trending</span>
			<ul>
				<li><a href"">#airyeezes</a></li>
				<li><a href"">#beyonce</a></li>
				<li><a href"">#cutedress</a></li>
				<li><a href"">#kim kardashian</a></li>
				<li><a href"">@emoorephp</a></li>
				<li><a href"">#surface</a></li>
				<li><a href"">#nicky minaj</a></li>
				<li><a href"">#rihanna</a></li>
				<li><a href"">#emlio pucci</a></li>
				<li><a href"">#liv tyler</a></li>
				<li><a href"">#pharrell</a></li>
				<li><a href"">#malaika firth</a></li>
				<li><a href"">#ellie</a></li>
				<li><a href"">#emma watson</a></li>
				<li><a href"">#cressida bonas</a></li>
				<li><a href"">#vanhawks</a></li>
				<li><a href"">#swarovski crystals</a></li>
				<li><a href"">#kanye west</a></li>
				<li><a href"">#platforms</a></li>
			</ul>
		</div>
		<!-- about module start -->
		<div>
			<div id="cntxHldr1" class="lMur1x dN">
				<div class="cntxWpr">
					<span class="hdX1 lnkHvr cP" onclick="lMur1xa()">What is Merra?</span>
					<span class="hdX2">updated &#8226; 1 day ago</span>
				</div>
				<div class="cntxWpr">
					<span class="hdX1 lnkHvr cP" onclick="lMur1xb()">Privacy and data collection.</span>
					<span class="hdX2">updated &#8226; 1 day ago</span>
				</div>
				<div class="cntxWpr">
					<span class="hdX1 lnkHvr cP" onclick="lMur1xc()">Ads and promoting.</span>
					<span class="hdX2">updated &#8226; 1 day ago</span>
				</div>
				<div class="cntxWpr">
					<span class="hdX1 lnkHvr cP" onclick="lMur1xd()">Rules and regulations.</span>
					<span class="hdX2">updated &#8226; 1 day ago</span>
				</div>
			</div>
			<!-- about module 2ndGig start-->
			<div id="cntxHldr2">
				<div class="lMur1x1b dN">
					<span class="hdX1">What is Merra? | <span class="cl1 lnkHvr cP">updated &#8226; 1 day ago</span></span>
					<p>This is a simple and elegant free social app platform. Merra embraces the love of trends, fashion, art, design, pop and modern culture.</p>
				</div>
				<div class="lMur1x2b dN">
					<span class="hdX1">Privacy and data collection. | <span class="cl1 lnkHvr cP">updated &#8226; 1 day ago</span></span>
					<p>IP &#8226; We collect your ip for session based logins, view and like counts. We also use this for location based information sharing. As in statistics, user, news and trend view behavior.</p>
					<p>Third party &#8226; We do not share nor sell any user information.</p>
				</div>
				<div class="lMur1x3b dN">
					<span class="hdX1">Ads and promoting. | <span class="cl1 lnkHvr cP">updated &#8226; 1 day ago</span></span>
					<p>As of right now personal branding, ads, are unavailable. This will absolutely be made available shortly.</p>
					<p>Third party &#8226; We will not all bots, Spam or automated posting nor flooding. No third party add service will be permitted.</p>
				</div>
				<div class="lMur1x4b dN">
					<span class="hdX1">Rules and regulations. | <span class="cl1 lnkHvr cP">updated &#8226; 1 day ago</span></span>
					<p>This is a simple and elegant free social app platform. Merra embraces the love of trends, fashion, art, design, pop and modern culture.</p>
				</div>
			</div>
			<!-- about module 2ndGig end-->
		</div>
		<!-- about module end -->
		<!-- help module start -->
		<div class="lMur2x dN">
			<input type="text" placeholder="Help"/>
			<div>How's it going <a>@emoorephp</a>  type your question in the help bar</div>
		</div>
		<!-- help module end -->
		<div class="lMur3">
			<a href=""><span id="scl-1"></span></a>
			<a href=""><span id="scl-2"></span></a>
			<a href=""><span id="scl-3"></span></a>
			<a href=""><span id="scl-4"></span></a><br>
			<a onclick="lMur1x()">about & legal</a> | 
			<a onclick="lMur2x()">help</a><br>
			<span>An <span class="lgo-icn pA"></span> <a href="" class="icn-psh">Aviyon</a> creation</span>
		</div>
	</div>
</div>
<!------- main menu dropdown end -->
<!------- main user banner start -->
<div class="bnRx pA dN">
	<div class="bnRxPos pA">
		<div class="bnRxInr cP">
			Upload new Banner
		</div>
		<a class="bnRxFtr">resize banner</a>
	</div>
</div>
<img class="usrBnr" src="img/temp/usrBnr1.jpg"/>
<!------- main user banner end -->



<div class="bodyWpr2">

	<!------- user profile pic start -->
	<div class="Prfx dN pA">
		<div class="PrfxInr cP">U</div>
	</div>
	<img class="usrPrf pA" src="img/temp/tempUsr.jpg"/>
	<!------- user profile pic end -->
	<!------- user stat start -->
	<div class="usrBio pA">
		<span id="uB1" class="uB1">@emoorephp</span>
		<input id="uB1a" class="uB1 dN" placeholder="username" value="@emoorephp"/>
		<span id="uB2" class="uB2">Emmanuel Moore</span>

		<input id="uB2a" class="uB2 dN" placeholder="First Name" value="Emmanuel"/>
		<input id="uB2b" class="uB2 dN" placeholder="Last Name" value="Moore"/>
		<div id="">
			<span id="ubx3a" class="uB3 fL">Programmer and developer at Aviyon. I love fitness, designing & create things.</span>
			<textarea id="ubx3b" class="uB3 fL dN" placeholder="Add a bio @emoorephp">Programmer and developer at Aviyon. I love fitness, designing & create things.</textarea>
			<span id="ubx1" class="uBx fR cP" onclick="ubx1()">update</span>
			<span id="ubx2" class="uBx fR cP dN" onclick="ubx2()">done</span>
		</div>
	</div>
	<!------- user stat end -->

	<div class="tpHdr diB">
		<div class="tpLft usrFil fL">
			<span onclick="tp1()">post &#8226; 4</span>
			<span onclick="tp2()">photos &#8226; 5</span>
			<span onclick="tp3()">videos &#8226; 2</span>
		</div>
		<span class="tpRgt fR">13 &#8226; followers</span>
	</div>

	<div class="dv1 tp1">
		
		<div class="pstWpr">
			<div class="pstHdr">
				<a href="user.php"><img src="img/temp/tempUsr.jpg"/></a>
				<div class="fL">
					<a href="user.php">@emoorephp</a>
					<span class="taGo">12 mins ago</span>
				</div>
				<div class="fR">
					<a id="fllwBtn1_1">
						follow
					</a>
				</div>
			</div>
			<div class="pstInr">
			New pants at macy's buy one set get the other half off. Sale only last untill Thursday.
			<img src="img/temp/temp2.jpg"/>
			</div>
			<div class="pstFtr">
				<div class="pstStat">
					<span id="favIco" stat="favorites" onclick=""></span> &#8226; <span onclick="upTgle('usrVws_1')">4</span>
					<span id="viewIco" stat="views" onclick=""></span> &#8226; <span onclick="">3</span>
					<span id="cmntIco" stat="comments" onclick="upTgle('usrCmt_1')"></span> &#8226; <span onclick="upTgle('usrCmt_1')">1</span>
					<span id="shareIco" stat="shares" onclick=""></span> &#8226; <span onclick="">1</span>
					<span class="statMnu" title="menu" onclick="upTgle('statMnu_1')">&#8226; &#8226; &#8226;</span>
				</div>
				<ul id="statMnu_1" class="statMnu2 pA dN">
					<li>edit</li>
					<li>hide</li>
					<li>delete</li>
				</ul>
				<div id="usrVws_1" class="usrVws pA dN">
					<div>
						<a href="user.php" title="batman"><img src="img/temp/tempUsr.jpg"/></a>
					</div>
				</div>
				<div id="usrCmt_1" class="dN">
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>

				</div>
				<div id="cmt2" class="diB">
					<img src="img/temp/tempUsr.jpg"/>
					<input class="fR" type="text" placeholder="Want to comment @emoorephp?"/>
					<span class="photo-icn pA cP" note1="upload"></span>
				</div>
			</div>
		</div>

		<div class="pstWpr">
			<div class="pstHdr">
				<a href="user.php"><img src="img/temp/temp1h.jpg"/></a>
				<div class="fL">
					<a href="user.php">@glitterqueen</a>
					<span class="taGo">12 mins ago</span>
				</div>
				<div class="fR">
					<a id="fllwBtn1_1">
						follow
					</a>
				</div>
			</div>
			<div class="pstInr">
			The red bag look.
			<img src="img/temp/temp3.jpg"/>
			</div>
			<div class="pstFtr">
				<div class="pstStat">
					<span id="favIco" stat="favorites" onclick=""></span> &#8226; <span onclick="upTgle('usrVws_2')">4</span>
					<span id="viewIco" stat="views" onclick=""></span> &#8226; <span onclick="">3</span>
					<span id="cmntIco" stat="comments" onclick="upTgle('usrCmt_2')"></span> &#8226; <span onclick="upTgle('usrCmt_2')">1</span>
					<span id="shareIco" stat="shares" onclick=""></span> &#8226; <span onclick="">1</span>
					<span class="statMnu" title="menu" onclick="upTgle('statMnu_2')">&#8226; &#8226; &#8226;</span>
				</div>
				<ul id="statMnu_2" class="statMnu2 pA dN">
					<li>edit</li>
					<li>hide</li>
					<li>delete</li>
				</ul>
				<div id="usrVws_2" class="usrVws pA dN">
					<div>
						<a href="user.php" title="batman"><img src="img/temp/tempUsr.jpg"/></a>
					</div>
				</div>
				<div id="usrCmt_2" class="dN">
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>

				</div>
				<div id="cmt2" class="diB">
					<img src="img/temp/tempUsr.jpg"/>
					<input class="fR" type="text" placeholder="Want to comment @emoorephp?"/>
					<span class="photo-icn pA cP" note1="upload"></span>
				</div>
			</div>
		</div>
		
		


		<div class="pstWpr">
			<div class="pstHdr">
				<a href="user.php"><img src="img/temp/temp1j.jpg"/></a>
				<div class="fL">
					<a href="user.php">@fashlyQueen</a>
					<span class="taGo">12 mins ago</span>
				</div>
				<div class="fR">
					<a id="fllwBtn1_1">
						following
					</a>
				</div>
			</div>
			<div class="pstInr">
			Love this band #veronicas
			<img src="img/temp/temp1b.jpg"/>
			</div>
			<div class="pstFtr">
				<div class="pstStat">
					<span id="favIco" stat="favorites" onclick=""></span> &#8226; <span onclick="upTgle('usrVws_3')">4</span>
					<span id="viewIco" stat="views" onclick=""></span> &#8226; <span onclick="">3</span>
					<span id="cmntIco" stat="comments" onclick="upTgle('usrCmt_3')"></span> &#8226; <span onclick="upTgle('usrCmt_3')">1</span>
					<span id="shareIco" stat="shares" onclick=""></span> &#8226; <span onclick="">1</span>
					<span class="statMnu" title="menu" onclick="upTgle('statMnu_3')">&#8226; &#8226; &#8226;</span>
				</div>
				<ul id="statMnu_3" class="statMnu2 pA dN">
					<li>edit</li>
					<li>hide</li>
					<li>delete</li>
				</ul>
				<div id="usrVws_3" class="usrVws pA dN">
					<div>
						<a href="user.php" title="batman"><img src="img/temp/tempUsr.jpg"/></a>
					</div>
				</div>
				<div id="usrCmt_3" class="dN">
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>
					<div class="cmtHldr">
						<img src="img/temp/tempUsr.jpg"/>
						<div class="pstWpr">
							<span class="pstTme">2 &#8226; days age</span>
							<span class="pstCnt">This is a test comment I am #awesome</span>
						</div>
					</div>

				</div>
				<div id="cmt2" class="diB">
					<img src="img/temp/tempUsr.jpg"/>
					<input class="fR" type="text" placeholder="Want to comment @emoorephp?"/>
					<span class="photo-icn pA cP" note1="upload"></span>
				</div>
			</div>
		</div>

	</div>
	
	<!-- photos -->
	<div class="tp2 dN">
		
		<!-- month container -->
		<div class="mxWpr">
			<div class="mxHdr">
				<div class="mxDte">April 2015</div>
				<div class="mxSpl">&#8226;</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
			<!-- img content -->
			<div class="mpxWpr fL">
				<a><img src="img/temp/tempUsr.jpg"/></a>
				<div class="mpxIfo cP pA">test view</div>
			</div>
			
		</div>
		
	</div>
	
	<!-- videos -->
	<div class="tp3 dN">
		test 3
	</div>

	<div class="dv2">

		<div class="flwWpr fR">
			<a href="user.php"><img src="img/temp/temp1a.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1b.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1c.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1d.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1e.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1f.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1g.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1h.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1i.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1j.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1k.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1l.jpg"/></a>
			<a href="user.php"><img src="img/temp/temp1m.jpg"/></a>
			<div class="flwFtr fL lnkHvr dN">view more</div>
		</div>

	</div>
<div>
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>    
</body>
</html>
