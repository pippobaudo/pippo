<div class="purchasinggaps form">
<?php echo $this->Form->create('Purchasinggap');?>
	<fieldset>
		<legend><?php __('Admin Add Purchasinggap'); ?></legend>
	<?php
		echo $this->Form->input('quorum_id');
		echo $this->Form->input('pricerange_id');
		echo $this->Form->input('revenue_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Quorums', true), array('controller' => 'quorums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quorum', true), array('controller' => 'quorums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priceranges', true), array('controller' => 'priceranges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pricerange', true), array('controller' => 'priceranges', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revenues', true), array('controller' => 'revenues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revenue', true), array('controller' => 'revenues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>