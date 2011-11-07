<div class="proposals view">
<h2><?php  __('Proposal');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Retailer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($proposal['Retailer']['id'], array('controller' => 'retailers', 'action' => 'view', $proposal['Retailer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Deal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($proposal['Deal']['title'], array('controller' => 'deals', 'action' => 'view', $proposal['Deal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Purchasinggap'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($proposal['Purchasinggap']['id'], array('controller' => 'purchasinggaps', 'action' => 'view', $proposal['Purchasinggap']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Percent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['percent']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proposal', true), array('action' => 'edit', $proposal['Proposal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Proposal', true), array('action' => 'delete', $proposal['Proposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['Proposal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>
