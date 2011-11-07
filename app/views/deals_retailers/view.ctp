<div class="dealsRetailers view">
<h2><?php  __('Deals Retailer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dealsRetailer['DealsRetailer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Deal Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dealsRetailer['DealsRetailer']['deal_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Retailer Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dealsRetailer['DealsRetailer']['retailer_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Retailer Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dealsRetailer['DealsRetailer']['retailer_status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deals Retailer', true), array('action' => 'edit', $dealsRetailer['DealsRetailer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Deals Retailer', true), array('action' => 'delete', $dealsRetailer['DealsRetailer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dealsRetailer['DealsRetailer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Retailers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Retailer', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
