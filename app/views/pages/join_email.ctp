<div class="grid_16" id="slogan">
	<h1>Entra nel Social Shopping</h1>
	<h1 class="subtitle">Entra in un gruppo o creane uno tuo. </h1>
</div>
<div class="clear"></div>
<div class="grid_16 section">
	<br/><br/>
	<h1>Sign up</h1>
	<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Form->input('name'); ?>
	<?php echo $this->Form->input('surname'); ?>
	<?php echo $this->Form->input('age'); ?>
	<?php echo $this->Form->input('gender'); ?>
	<?php echo $this->Form->input('email'); ?>
	<?php echo $this->Form->input('city'); ?>
	<?php echo $this->Form->input('password'); ?>
	<?php echo $this->Form->end('Sign in'); ?>

	<img src="img/sign.png" alt="sign up" />
	<div class="grid_16">
		<div id="i_am_user" class="grid_7 block">
			<?php echo $this->Html->image('user.jpg', array('alt'=>'i am a user', 'style'=>'float:left;')); ?>
			<h1 class="slogan">I'm a user</h1>
			<input type="checkbox" name="user" value="" >
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

		</div>
		<div id="i_am_retailer" class="grid_7 block">
			<?php echo $this->Html->image('retailer.jpg', array('alt'=>'i am a retailer', 'style'=>'float:left;')); ?>
			<h1 class="slogan">I'm a retailer</h1>
			<input type="checkbox" name="retailer" value="" >
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<p><input type="submit" value="Continue"></p>
	</div>
</div>
<div class="clear"></div>