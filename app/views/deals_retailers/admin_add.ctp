<div class="dealsRetailers form">
<?php echo $this->Form->create('DealsRetailer');?>
	<fieldset>
		<legend><?php __('Admin Add Deals Retailer'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Deals Retailers', true), array('action' => 'index'));?></li>
	</ul>
</div>