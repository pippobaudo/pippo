<div class="carriers form">
<?php echo $this->Form->create('Carrier');?>
	<fieldset>
		<legend><?php __('Edit Carrier'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Carrier.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Carrier.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carriers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
	</ul>
</div>