<div class="carriers form">
<?php echo $this->Form->create('Carrier');?>
	<fieldset>
		<legend><?php __('Add Carrier'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Carriers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
	</ul>
</div>