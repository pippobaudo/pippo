<div class="priceranges form">
<?php echo $this->Form->create('Pricerange');?>
	<fieldset>
		<legend><?php __('Edit Pricerange'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('min');
		echo $this->Form->input('max');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pricerange.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pricerange.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Priceranges', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>