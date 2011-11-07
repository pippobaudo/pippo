<div class="purchasinggaps view">
<h2><?php  __('Purchasinggap');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $purchasinggap['Purchasinggap']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quorum'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($purchasinggap['Quorum']['id'], array('controller' => 'quorums', 'action' => 'view', $purchasinggap['Quorum']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pricerange'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($purchasinggap['Pricerange']['id'], array('controller' => 'priceranges', 'action' => 'view', $purchasinggap['Pricerange']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Revenue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($purchasinggap['Revenue']['id'], array('controller' => 'revenues', 'action' => 'view', $purchasinggap['Revenue']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchasinggap', true), array('action' => 'edit', $purchasinggap['Purchasinggap']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Purchasinggap', true), array('action' => 'delete', $purchasinggap['Purchasinggap']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $purchasinggap['Purchasinggap']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Proposals');?></h3>
	<?php if (!empty($purchasinggap['Proposal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Retailer Id'); ?></th>
		<th><?php __('Deal Id'); ?></th>
		<th><?php __('Purchasinggap Id'); ?></th>
		<th><?php __('Percent'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($purchasinggap['Proposal'] as $proposal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $proposal['id'];?></td>
			<td><?php echo $proposal['retailer_id'];?></td>
			<td><?php echo $proposal['deal_id'];?></td>
			<td><?php echo $proposal['purchasinggap_id'];?></td>
			<td><?php echo $proposal['percent'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'proposals', 'action' => 'view', $proposal['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'proposals', 'action' => 'edit', $proposal['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'proposals', 'action' => 'delete', $proposal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
