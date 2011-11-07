<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
		<legend><?php __('Admin Add Image'); ?></legend>
	<?php
		echo $this->Form->input('original_path');
		echo $this->Form->input('thumb_path');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referrings', true), array('controller' => 'referrings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referring', true), array('controller' => 'referrings', 'action' => 'add')); ?> </li>
	</ul>
</div>