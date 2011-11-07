<div class="discounts form">
<?php echo $this->Form->create('Discount');?>
	<fieldset>
		<legend><?php __('Admin Add Discount'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Discounts', true), array('action' => 'index'));?></li>
	</ul>
</div>