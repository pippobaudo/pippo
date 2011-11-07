<div class="grid_16" id="slogan">
	<h1>Login</h1>
	<h1 class="subtitle">Entra nella community di acquisti di gruppo.</h1>
</div>
<div class="clear"></div>
<div class="grid_16 box_how_it_works round_border">
	<div class="grid_16">
		<div class="grid_11 left_col">
			<?php echo $this->Session->flash('auth'); ?>
			<?php  echo $this->Session->flash();  ?>
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('email', array('label'=>false, 'placeholder'=>'Email', 'class'=>'newFormStyle big_input')); ?>
			<?php echo $this->Form->input('password', array('label'=>false, 'placeholder'=>'Password', 'class'=>'newFormStyle big_input')); ?>
			<?php echo $this->Form->end(__('Login', true)) ;?>
		</div>
		<div class="clear"></div>
		<div class="prefix_3 grid_8 line_info">Se non hai ancora un account, cosa aspetti ? <?php echo $this->Html->link('Iscriviti', array('controller'=>'pages', 'action'=>'join'), array('class'=>'button')); ?></div>
	</div>
</div>