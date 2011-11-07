<div class="dealsRetailers form">
<?php echo $this->Form->create('DealsRetailer');?>
	<fieldset>
		<legend><?php __('Admin Edit Deals Retailer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('deal_id');
		echo $this->Form->input('retailer_id');
		echo $this->Form->input('retailer_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DealsRetailer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DealsRetailer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deals Retailers', true), array('action' => 'index'));?></li>
	</ul>
</div>