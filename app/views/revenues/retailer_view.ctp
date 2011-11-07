<div class="revenues view">
<h2><?php  __('Revenue');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $revenue['Revenue']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Min'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $revenue['Revenue']['min']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Max'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $revenue['Revenue']['max']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $revenue['Revenue']['value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Revenue', true), array('action' => 'edit', $revenue['Revenue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Revenue', true), array('action' => 'delete', $revenue['Revenue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $revenue['Revenue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Revenues', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revenue', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Purchasinggaps');?></h3>
	<?php if (!empty($revenue['Purchasinggap'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Quorum Id'); ?></th>
		<th><?php __('Pricerange Id'); ?></th>
		<th><?php __('Revenue Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($revenue['Purchasinggap'] as $purchasinggap):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $purchasinggap['id'];?></td>
			<td><?php echo $purchasinggap['quorum_id'];?></td>
			<td><?php echo $purchasinggap['pricerange_id'];?></td>
			<td><?php echo $purchasinggap['revenue_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'purchasinggaps', 'action' => 'view', $purchasinggap['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'purchasinggaps', 'action' => 'edit', $purchasinggap['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'purchasinggaps', 'action' => 'delete', $purchasinggap['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $purchasinggap['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
