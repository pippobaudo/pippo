<div class="retailers form">
<?php echo $this->Form->create('Retailer');?>
	<fieldset>
		<legend><?php __('Admin Edit Retailer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('owner');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('vat');
		echo $this->Form->input('address');
		echo $this->Form->input('country');
		echo $this->Form->input('region_name');
		echo $this->Form->input('city');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('company_type');
		echo $this->Form->input('registration_date');
		echo $this->Form->input('deals_ok');
		echo $this->Form->input('deals_ko');
		echo $this->Form->input('feedback_ok_counter');
		echo $this->Form->input('image_id');
		echo $this->Form->input('carrier_id');
		echo $this->Form->input('referring_id');
		echo $this->Form->input('Deal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Retailer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Retailer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Carriers', true), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier', true), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referrings', true), array('controller' => 'referrings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referring', true), array('controller' => 'referrings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>