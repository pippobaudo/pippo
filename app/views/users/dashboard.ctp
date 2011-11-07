<div class="grid_16 box_user">
	<div class="grid_4 box_user_image">
		<?php echo $this->Html->image('user_image.png', array('alt'=>'Username profile')); ?>
	</div>
	<div class="grid_6 box_user_info">
		<h1><?php echo $user['User']['name']. ' '.$user['User']['surname']; ?></h1>
		<b>-info da facebook-</b>
		<b>-info da twitter-</b>
	</div>
	<div class="grid_5 box_user_other_info">
		<p>email: contact@alexgenovese.it</p>
	</div>
	<div class="clear"></div>
	<div class="grid_16 box_user_commands">
		<div class="grid_4 border">
			<?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'), array('class'=>'button save')); ?>
			<a href="#" class="button delete">Delete</a>
		</div>
		<div class="grid_4">
			<?php echo $this->Html->link('Creazione Deal', array('controller' => 'users', 'action' => 'createdeal'), array('class'=>'button add')); ?>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="grid_16 box_how_it_works round_border">
	<h1 class="info">Deal ai quali partecipi</h1>
	<div class="grid_7">
		<div class="grid_3 box round_border">
			<?php echo $this->Html->image('canon.png', array('alt'=>'Canon')); ?>
		</div>
		<div class="grid_3 box_info">
			<h1>Canon EOS 550D</h1>
			<strong>Watching:</strong><b>34</b>
			<strong>Grouping:</strong><b>30</b>
			<div class="buttons">
				<a href="#" class="button">Share</a>
				<a href="#" class="button">View</a>
			</div>
		</div>
	</div>
	<div class="grid_7">
		<div class="grid_3 box round_border">
			<?php echo $this->Html->image('canon.png', array('alt'=>'Canon')); ?>
		</div>
		<div class="grid_3 box_info">
			<h1>Canon EOS 550D</h1>
			<strong>Watching:</strong><b>34</b>
			<strong>Grouping:</strong><b>30</b>
			<div class="buttons">
				<a href="#" class="button">Share</a>
				<a href="#" class="button">View</a>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="grid_16 box_how_it_works round_border">
	<h1 class="info">Deal che osservi</h1>
	<div class="grid_7">
		<div class="grid_3 box round_border">
			<?php echo $this->Html->image('canon.png', array('alt'=>'Canon')); ?>
		</div>
		<div class="grid_3 box_info">
			<h1>Canon EOS 550D</h1>
			<strong>Watching:</strong><b>34</b>
			<strong>Grouping:</strong><b>30</b>
			<div class="buttons">
				<a href="#" class="button">Share</a>
				<a href="#" class="button">View</a>
				<a href="#" class="button add">Add Item</a>
			</div>
		</div>
	</div>
	<div class="grid_7">
		<div class="grid_3 box round_border">
			<?php echo $this->Html->image('canon.png', array('alt'=>'Canon')); ?>
		</div>
		<div class="grid_3 box_info">
			<h1>Canon EOS 550D</h1>
			<strong>Watching:</strong><b>34</b>
			<strong>Grouping:</strong><b>30</b>
			<div class="buttons">
				<a href="#" class="button">Share</a>
				<a href="#" class="button">View</a>
			</div>
		</div>
	</div>
</div>
