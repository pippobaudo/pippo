<style type="text/css" media="screen">
	.ooc-sprite {background-image:url('../img/ooc/zrply-occ-sprite.png'); background-repeat:no-repeat;}

	@font-face {
		font-family: 'Pictos';
		src: url('fonts/pictos-web.eot?ver2');
		src: local('☺'), url('fonts/pictos-web.woff') format('woff'), url('fonts/pictos-web.ttf?ver2') format('truetype'), url('fonts/pictos-web.svg#webfontIyfZbseF') format('svg');
		font-weight: normal;
		font-style: normal;
	}



	.pictos
	{
		font-family:"Pictos";
	}
	/* Content
	-----------------------------------------------------------------------------------------------------------*/


	.cnt-white
	{
		margin-top:30px;
		position:relative;
		background:#fff;
		-webkit-box-shadow: 0px 1px 4px RGBA(0,0,0,0.3);
		-moz-box-shadow: 0px 1px 4px RGBA(0,0,0,0.3)
		-o-box-shadow: 0px 1px 4px RGBA(0,0,0,0.3);
		box-shadow: 0px 1px 4px RGBA(0,0,0,0.3);
		z-index:3;
	}

	.cnt-white .content
	{
		padding: 40px 45px;
		margin:0;
	}

	.cnt-arrow-up
	{
		width: 0;
		height: 0;
		border-left: 14px solid transparent;
		border-right: 14px solid transparent;
		border-bottom: 14px solid white;
		position: absolute;
		top: -8px;
		left: 50%;
		z-index:1;
	}
	
	
	.zrply-green
	{
		color:#9dbc7a;
	}
	
	#endorse-stream
	{
		color:#9d9d9d;
		font-size:11px;
		text-shadow: 0 1px 0 #fff;
		line-height:16px;
	}

	#endorse-stream ul
	{
		position: relative;
		top: 4px;
		height: 33px;
		padding: 25px 0 0 0;
		height: 33px;
		padding: 25px 0 0 0;
		width: 1038px;
		overflow: hidden;
	}

	#endorse-stream ul li
	{
		background:url('../../img/widget/get_widget/stream-bullet.gif') right center no-repeat;
		padding: 0 25px 0 0;
		margin: 0 25px 0 0;
		width: 285px;
		height: 33px;
	}

	#endorse-stream ul li div {
		width: 285px;
		text-align: center;
	}

	#endorse-stream ul li:last-child
	{
		background:none;
		padding: 0;
		margin: 0;
	}


	#endorse-stream a:link,#endorse-stream a, #endorse-stream a:hover
	{
		color:#9d9d9d;
		font-weight:bold;
	}

	#endorse-stream a:hover
	{
		color:#9dbc7a;
	}
	
	.wiget-page-sprite
	{
		background-image:url('../../img/widget/get_widget/widget-page-sprite.jpg');
		background-repeat:no-repeat;
	}

	.widget-dialog-image
	{
		float: right;
		position: relative;
		top: -40px;
		right: -45px;
		margin: 0 0 -25px 0;
		border-radius:0 5px 0 0 ;
		-webkit-border-radius:0 5px 0 0 ;
		-moz-border-radius:0 5px 0 0 ;
	}

	#widget
	{
		background:url('img/ooc/loader.gif') center center no-repeat;
		float:left;
		margin:0 30px 0 0 ;
		height:228px;
		width:302px;
	}

	ul.widget-reasons
	{
		padding:0;
		margin:20px 0 10px 0;
	}

	ul.widget-reasons li
	{
		background-image:url('../../img/widget/get_widget/widget-page-sprite.jpg');
		background-repeat:no-repeat;
		height:44px;
		padding:0 0 0 55px;
		margin:0 0 20px 0;
		list-style:none;
		list-style-type:none;
	}

	ul.widget-reasons li.identity
	{
		background-position: 0 -42px;
	}

	ul.widget-reasons li.web
	{
		background-position: 0 -87px;
	}

	.get-widget-info
	{
		width:350px;
		float:left;
		margin:0 0 20px 0;
	}

	.widget-dev-message
	{
		position:relative;
		left:-4px;
		margin:20px 0 0 0;
		background-color: #F8F7C9;
		width: 345px;
		height: 67px;
		background-position: 0 -143px;
		color: #CB9240;
	}

	.widget-dev-message p
	{
		padding: 18px 0 0 3px;
		text-align: center;
	}
	
	
	.butt,a.butt,a.butt:link,a.butt:visited
	{
		font-family:"Helvetica Neue",Helvetica, Arial, sans-serif;
		line-height:normal;
		position:relative;
		cursor: pointer;
		display:inline-block;
		margin: 10px 0;
		padding:6px 15px;
		color: #fff;
		font-weight: bold;
		text-align: center;
		text-shadow: 0px 1px 0 RGBA(0,0,0,0.3);
		overflow: hidden;
		border: solid 1px #4D9299;
		box-shadow: inset 0px 1px 0px RGBA(0,255,0,0.6);
		-webkit-box-shadow: inset 0px 1px 0px RGBA(255,255,255,0.6);
		-moz-box-shadow: inset 0px 1px 0px RGBA(255,255,255,0.6);
		-o-box-shadow: inset 0px 1px 0px RGBA(255,255,255,0.6);
		background: #3AAFBF;
		background: -moz-linear-gradient(top, #61DCED 0%, #3AAFBF 100%);
		background: -o-linear-gradient(top, #61DCED 0%, #3AAFBF 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#61DCED), color-stop(100%,#3AAFBF));
		border-radius: 1.3em;
		-moz-border-radius: 1.3em;
		-webkit-border-radius: 1.3em;
		-webkit-font-smoothing: antialiased;
		text-transform:capitalize;
	}


	a.butt-micro,a.butt-micro:link,a.butt-micro:visited,.butt-micro
	{
		font-size:12px;
		padding: 3px 8px;
		border-radius: 1.3em;
		-moz-border-radius: 1.3em;
		-webkit-border-radius: 1.3em;
		line-height:normal;
	}


	.butt:hover,a.butt:hover
	{
		background:#7ce4f2;
		background: -moz-linear-gradient(top, #7ce4f2 0%, #3AAFBF 100%); 
		background: -o-linear-gradient(top, #7ce4f2 0%, #3AAFBF 100%); 
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#7ce4f2), color-stop(100%,#3AAFBF));	
	}

	.butt:active,a.butt:active
	{
		top:1px;
		background:#61DCED;
		background: -moz-linear-gradient(top, #3AAFBF 0%, #61DCED 100%);
		background: -o-linear-gradient(top, #3AAFBF 0%, #61DCED 100%); 
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3AAFBF), color-stop(100%,#61DCED));
	}

	/*Green button*/

	.butt-green,a.butt-green,a.butt-green:link,a.butt-green:visited
	{
		border: solid 1px #708B50;
		background: #B3D68D; 
		background: -moz-linear-gradient(top, #B3D68D 0%, #8AB15E 100%);
		background: -o-linear-gradient(top, #B3D68D 0%, #8AB15E 100%);  
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B3D68D), color-stop(100%,#8AB15E)); 
	}
	.butt-green:hover,a.butt-green:hover
	{
		background: #C1E899;
		background: -moz-linear-gradient(top, #C1E899 0%, #8AB15E 100%);
		background: -o-linear-gradient(top, #C1E899 0%, #8AB15E 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#C1E899), color-stop(100%,#8AB15E)); 
	}

	.butt-green:active,a.butt-green:active 
	{
		background:#aad27f;
		background: -moz-linear-gradient(top, #8cad66 0%, #aad27f 100%);
		background: -o-linear-gradient(top, #8cad66 0%, #aad27f 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8cad66), color-stop(100%,#aad27f));
	}

	/*orange button*/

	.butt-orange,a.butt-orange,a.butt-orange:link,a.butt-orange:visited
	{
		border: solid 1px #b27c26;
		background:#fbc357;
		background: -moz-linear-gradient(top, #fbc357 0%, #ea8615 100%); 
		background: -o-linear-gradient(top, #fbc357 0%, #ea8615 100%); 
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbc357), color-stop(100%,#ea8615));
	}
	.butt-orange:hover,a.butt-orange:hover
	{
		background:#f9d080;
		background: -moz-linear-gradient(top, #f9d080 0%, #ea8615 100%);
		background: -o-linear-gradient(top, #f9d080 0%, #ea8615 100%); 
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f9d080), color-stop(100%,#ea8615));
	}

	.butt-orange:active,a.butt-orange:active 
	{
		background:#ea8615;
		background: -moz-linear-gradient(top, #ea8615 0%, #fbc357 100%); 
		background: -o-linear-gradient(top, #ea8615 0%, #fbc357 100%); 
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ea8615), color-stop(100%,#fbc357));
	}

	/*blue button*/

	.butt-blue,a.butt-blue,a.butt-blue:link,a.butt-blue:visited
	{
		border:solid 1px #376092;
		background: #518AC9;
		background: -moz-linear-gradient(top, #518AC9 0%, #3464A4 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#518AC9), color-stop(100%,#3464A4));
		background: -webkit-linear-gradient(top, #518AC9 0%,#3464A4 100%);
		background: -o-linear-gradient(top, #518AC9 0%,#3464A4 100%);
	}
	.butt-blue:hover,a.butt-blue:hover
	{
		background: #5EA8E5;
		background: -moz-linear-gradient(top, #5EA8E5 0%, #3464A4 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5EA8E5), color-stop(100%,#3464A4));
		background: -webkit-linear-gradient(top, #5EA8E5 0%,#3464A4 100%);
		background: -o-linear-gradient(top, #5EA8E5 0%,#3464A4 100%);
	}

	.butt-blue:active,a.butt-blue:active 
	{
		background: #3464A4;
		background: -moz-linear-gradient(top, #3464A4 0%, #5EA8E5 96%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3464A4), color-stop(96%,#5EA8E5));
		background: -webkit-linear-gradient(top, #3464A4 0%,#5EA8E5 96%);
		background: -o-linear-gradient(top, #3464A4 0%,#5EA8E5 96%);
	}


	/*linkedin button*/

	.butt-lamers,a.butt-lamers,a.butt-lamers:link,a.butt-lamers:visited
	{
		border:solid 1px #376092;
		background: #67a5c6;
		background: -moz-linear-gradient(top, #67a5c6 0%, #258dc8 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#67a5c6), color-stop(100%,#258dc8));
		background: -webkit-linear-gradient(top, #67a5c6 0%,#258dc8 100%);
		background: -o-linear-gradient(top, #67a5c6 0%,#258dc8 100%);
	}
	.butt-lamers:hover,a.butt-lamers:hover
	{
		background: #95c5e2;
		background: -moz-linear-gradient(top, #95c5e2 0%, #258dc8 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#95c5e2), color-stop(100%,#258dc8));
		background: -webkit-linear-gradient(top, #95c5e2 0%,#258dc8 100%);
		background: -o-linear-gradient(top, #95c5e2 0%,#258dc8 100%);
	}

	.butt-lamers:active,a.butt-lamers:active 
	{
		background: #1c6f96;
		background: -moz-linear-gradient(top, #1c6f96 1%, #258dc8 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#1c6f96), color-stop(100%,#258dc8));
		background: -webkit-linear-gradient(top, #1c6f96 1%,#258dc8 100%);
		background: -o-linear-gradient(top, #1c6f96 1%,#258dc8 100%);
	}

	/*Red button*/

	.butt-red,a.butt-red,a.butt-red:link,a.butt-red:visited
	{
		border:solid 1px #A50303;
		background: #ff3019;
		background: -moz-linear-gradient(top, #ff3019 0%, #cf0404 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff3019), color-stop(100%,#cf0404));
		background: -webkit-linear-gradient(top, #ff3019 0%,#cf0404 100%);
		background: -o-linear-gradient(top, #ff3019 0%,#cf0404 100%);
	}
	.butt-red:hover,a.butt-red:hover
	{
		background: #ff5949;
		background: -moz-linear-gradient(top, #ff5949 0%, #cf0404 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff5949), color-stop(100%,#cf0404));
		background: -webkit-linear-gradient(top, #ff5949 0%,#cf0404 100%);
		background: -o-linear-gradient(top, #ff5949 0%,#cf0404 100%);
	}

	.butt-red:active,a.butt-red:active 
	{
		background: #cf0404;
		background: -moz-linear-gradient(top, #cf0404 0%, #ff3019 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cf0404), color-stop(100%,#ff3019));
		background: -webkit-linear-gradient(top, #cf0404 0%,#ff3019 100%);
		background: -o-linear-gradient(top, #cf0404 0%,#ff3019 100%);
	}


	/*Black button*/

	.butt-black,a.butt-black,a.butt-black:link,a.butt-black:visited
	{
		border:solid 1px #000;
		background: #4c4c4c;
		background: -moz-linear-gradient(top, #4c4c4c 0%, #000000 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4c4c4c), color-stop(100%,#000000));
		background: -webkit-linear-gradient(top, #4c4c4c 0%,#000000 100%);
		background: -o-linear-gradient(top, #4c4c4c 0%,#000000 100%);
		box-shadow: inset 0px 1px 0px RGBA(0,255,0,0.3);
		-webkit-box-shadow: inset 0px 1px 0px RGBA(255,255,255,0.2);
		-moz-box-shadow: inset 0px 1px 0px RGBA(255,255,255,0.2);
		-o-box-shadow: inset 0px 1px 0px RGBA(255,255,255,0.2);
	}
	.butt-black:hover,a.butt-black:hover
	{
		background: #6b6b6b;
		background: -moz-linear-gradient(top, #6b6b6b 0%, #000000 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6b6b6b), color-stop(100%,#000000));
		background: -webkit-linear-gradient(top, #6b6b6b 0%,#000000 100%);
		background: -o-linear-gradient(top, #6b6b6b 0%,#000000 100%);
	}

	.butt-black:active,a.butt-black:active 
	{
		background: #000000;
		background: -moz-linear-gradient(top, #000000 1%, #6b6b6b 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#000000), color-stop(100%,#6b6b6b));
		background: -webkit-linear-gradient(top, #000000 1%,#6b6b6b 100%);
		background: -o-linear-gradient(top, #000000 1%,#6b6b6b 100%);
	}


	/*Button icon*/

	.butt:after,.butt:before
	{
		font-family:'Pictos';
		color:#fff;
		text-shadow: 0px 1px 0 RGBA(0,0,0,0.3);
		font-weight:normal;
		font-size:1.3em;
		position: relative;
		top: 1px;
	}

	.butt:after
	{
		margin:0 0 0 10px;
	}

	.butt:before
	{
		margin:0 10px 0 0px;
	}
	
	
</style>

<div class="grid_16" id="slogan">
	<h1>How it works ?</h1>
	<h1 class="subtitle">Crea un gruppo, condividi, compra. </h1>
</div>
<div class="clear"></div>
<div class="cnt-white br-5 wrap-960">
	<div class="cnt-arrow-up">
	</div>
	<div class="content">
		<?php echo $this->Html->image('twitter_dev.png', array('width'=>700)); ?>
		<h1>Defining you across the web</h1>
		<p>
			Zerply’s endorsement widget and button lets you display your tags on any website or blog. It’s a simple way for your new visitors to get an overview of who you are, while bringing the ability to endorse you closer to your followers.
		</p>
		<p>
			We see it as more than a Facebook like, but less than a LinkedIn recommendation - it speaks of the person behind the content.
		</p>
		<h3><span class="zrply-green">Try out the demo on your left</span> or get your own widget</h3>
		<div class="clearfix">
		</div>
	</div>
</div>
<div id="endorse-stream" class="wrap-960">
	<ul class="fl">
		<li id="stream-pos-0">
		<div>
			<a href="../profile/TimDavies.html" target="_blank">Tim Davies</a> endorsed <a href="../profile/lukesbeard.html" target="_blank">Luke Beard</a><br>
			 as <b>Web Designer</b> at lukesbeard.com </span>
		</div>
		<li id="stream-pos-1">
		<div>
			<a href="../profile/de.html" target="_blank">Dan Eden</a> endorsed <a href="../profile/lukesbeard.html" target="_blank">Luke Beard</a><br>
			 as <b>Beard</b> at lukesbeard.com </span>
		</div>
		<li id="stream-pos-2">
		<div>
			<a href="../profile/lulirosset.html" target="_blank">Luli Rosset</a> endorsed <a href="../profile/lukesbeard.html" target="_blank">Luke Beard</a><br>
			 as <b>Beard</b> at lukesbeard.com </span>
		</div>
	</ul>
</div>
<div class="cnt-white br-5 wrap-960">
	<div class="content">
		<?php echo $this->Html->image('widget-dialog.jpg', array('class'=>'widget-dialog-image')); ?>

		<h2>Get Endorsed Anywhere</h2>
		<p>
			The tools are free to use wherever you choose, but it’s perhaps most useful on blogs and websites. Anyone can endorse you with a few clicks, and endorsements are always personal.
		</p>
		<ul class="widget-reasons">
			<li><strong class="zrply-green">Valuable tags:</strong> Pick any tags that you feel represent you professionally.</li>
			<li class="identity"><strong class="zrply-green">Your professional identity:</strong> Set up that beautiful public profile.</li>
			<li class="web"><a name="get-widget"></a><strong class="zrply-green">Across the web:</strong> Display your awesomeness on the web and watch those endorsements trickle in.</li>
		</ul>
		<div class="clearfix">
		</div>
		<div class="get-widget-info">
			<h2>Get Your Widget</h2>
			<p>
				<strong>Embedding your widget:</strong> Activate your domain to the right in order to get access to the widget code. Then copy the code and paste it to your website or blog.
				<div class="widget-dev-message wiget-page-sprite">
					<p>
						<strong>Please Note:</strong> These features are still in development
					</p>
				</div>
			</div>
			<div class="get-widget-code br-5">
				<div class="widget-code-signin">
					<a class="butt butt-orange" href="../login?ref=/widget/#get-widget">Login to Zerply to get your code</a>
				</div>
			</div>
			<div class="clearfix">
			</div>
		</div>
		<!--Finish content-->
	</div>
	<div class="cnt-white br-5 wrap-960">
		<a name="get-button"></a>
		<div class="content" id="get-endorseme">
			<div class="endorse-me-preview">
				<?php echo $this->Html->image('steps-how_it_works.jpg'); ?>
			</div>
			<h2>Get Your Button</h2>
			<p>
				<strong>Embedding your button:</strong> Activate your domain below in order to get access to the button code. Then copy the code and paste it to your website or blog.
			</p>
			<div class="get-endoeseme-code br-5">
				<div class="widget-code-signin">
					<a class="butt butt-orange" href="../login?ref=/widget/#get-button">Login to Zerply to get your code</a>
				</div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
<!--Finish bg-->