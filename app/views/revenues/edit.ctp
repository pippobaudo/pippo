<div class="revenues form">
<?php echo $this->Form->create('Revenue');?>
	<fieldset>
		<legend><?php __('Edit Revenue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('min');
		echo $this->Form->input('max');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Revenue.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Revenue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Revenues', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>