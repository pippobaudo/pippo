<div class="discounts form">
<?php echo $this->Form->create('Discount');?>
	<fieldset>
		<legend><?php __('Edit Discount'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('quorum_min');
		echo $this->Form->input('quorum_max');
		echo $this->Form->input('revenue');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Discount.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Discount.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Discounts', true), array('action' => 'index'));?></li>
	</ul>
</div>