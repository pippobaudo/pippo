<div class="retailergroups view">
<h2><?php  __('Retailergroup');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailergroup['Retailergroup']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailergroup['Retailergroup']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retailergroup', true), array('action' => 'edit', $retailergroup['Retailergroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Retailergroup', true), array('action' => 'delete', $retailergroup['Retailergroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $retailergroup['Retailergroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailergroups', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailergroup', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
