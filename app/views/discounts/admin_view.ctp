<div class="discounts view">
<h2><?php  __('Discount');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quorum Min'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['quorum_min']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quorum Max'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['quorum_max']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Revenue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['revenue']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discount', true), array('action' => 'edit', $discount['Discount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Discount', true), array('action' => 'delete', $discount['Discount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discount['Discount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discounts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discount', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
