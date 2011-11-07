<div class="grid_16" id="slogan">
	<h1>Crea il tuo Deal. Ora, lo puoi fare.</h1>
	<h1 class="subtitle">Next generation of shopping: Crowdshopping</h1>
</div>
<div class="clear"></div>
<div class="grid_16 section">
	<h1 class="slogan">A new extraordinary way to buy online with crowdshopping</h1>
	<img src="img/section-home.jpg" alt="section home" width="940">
	<hr/>
	<div class="prefix_6 grid_4">
		<button class="orange button"><a rel="facebox" href="#user">I'm a buyer</a></button>
		<button class="celeste button"><a rel="facebox" href="#retailer">I'm a retailer</a></button>
	</div>
</div>
<div class="clear"></div>
<div class="grid_16">
	<div style="display:none;" id="user" class="grid_7 box_info_user">
		<img style="float:left;" src="img/user.jpg" alt="i am a user" />
		<h1 class="slogan">I'm a user</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		<div class="grid_6 box_sign_in">
			<p>
				<?php echo $this->Html->image('twitter-sign-in.png', array('alt'=>'Sign in with your Twitter account'))?> or <?php echo $this->Html->image('facebook-sign-in.png', array('alt'=>'Sign in with your Facebook account'))?>
			</p>
		</div>
		<a href="#" class="close"><img src="js/mylibs/facebox/closelabel.png" title="close" class="close_image" /></a>
	</div>
	<div style="display:none;" id="retailer" class="grid_7 box_info_user">
		<img style="float:left;" src="img/retailer.jpg" alt="i am a retailer" />
		<h1 class="slogan">I'm a retailer</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		<div class="grid_6 box_sign_in">				
			<p><img src="img/twitter-sign-in.png" alt="Sign in with your twitter account" /> or <img src="img/facebook-sign-in.png" alt="Sign in with you Facebook account" /></p>
		</div>
		<a href="#" class="close"><img src="js/mylibs/facebox/closelabel.png" title="close" class="close_image" /></a>
	</div>
</div>
<div class="clear"></div>
<div class="grid_16 section search_front">
	<h1>Quale prodotto stai cercando ?</h1>
	<?php echo $this->Form->create('Pages'); ?>
	<?php echo $this->Form->input('Search', array('label'=>false, 'placeholder'=>'Scrivi ciò che vorresti comprare ad un prezzo scontato')); ?>
	<?php echo $this->Form->end('Search', array('class'=>'submit_front')); ?>
	<p class="suggestion">Premi invio</p>
</div>
<div class="clear"></div>
<div class="grid_16 section friends">
	<?php echo $this->Html->image('friends_front.jpg', array('alt'=>'Friends list')); ?>
</div>
