<div class="retailergroups form">
<?php echo $this->Form->create('Retailergroup');?>
	<fieldset>
		<legend><?php __('Add Retailergroup'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Retailergroups', true), array('action' => 'index'));?></li>
	</ul>
</div>