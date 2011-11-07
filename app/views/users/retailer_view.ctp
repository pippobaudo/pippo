<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Surname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['surname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Age'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['age']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Locale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['locale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usergroup'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Usergroup']['name'], array('controller' => 'usergroups', 'action' => 'view', $user['Usergroup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usergroups', true), array('controller' => 'usergroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usergroup', true), array('controller' => 'usergroups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Deals');?></h3>
	<?php if (!empty($user['Deal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Subtitle'); ?></th>
		<th><?php __('Start Price'); ?></th>
		<th><?php __('End Price'); ?></th>
		<th><?php __('Start Discount'); ?></th>
		<th><?php __('End Discount'); ?></th>
		<th><?php __('Start Datetime'); ?></th>
		<th><?php __('End Datetime'); ?></th>
		<th><?php __('Users Count'); ?></th>
		<th><?php __('Retailers Count'); ?></th>
		<th><?php __('Deal Status'); ?></th>
		<th><?php __('Users Observer Count'); ?></th>
		<th><?php __('Image Id'); ?></th>
		<th><?php __('Subcategory Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Retailer Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Deal'] as $deal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $deal['id'];?></td>
			<td><?php echo $deal['title'];?></td>
			<td><?php echo $deal['subtitle'];?></td>
			<td><?php echo $deal['start_price'];?></td>
			<td><?php echo $deal['end_price'];?></td>
			<td><?php echo $deal['start_discount'];?></td>
			<td><?php echo $deal['end_discount'];?></td>
			<td><?php echo $deal['start_datetime'];?></td>
			<td><?php echo $deal['end_datetime'];?></td>
			<td><?php echo $deal['users_count'];?></td>
			<td><?php echo $deal['retailers_count'];?></td>
			<td><?php echo $deal['deal_status'];?></td>
			<td><?php echo $deal['users_observer_count'];?></td>
			<td><?php echo $deal['image_id'];?></td>
			<td><?php echo $deal['subcategory_id'];?></td>
			<td><?php echo $deal['user_id'];?></td>
			<td><?php echo $deal['retailer_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'deals', 'action' => 'view', $deal['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'deals', 'action' => 'edit', $deal['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'deals', 'action' => 'delete', $deal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $deal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Feedbacks');?></h3>
	<?php if (!empty($user['Feedback'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Deal Id'); ?></th>
		<th><?php __('Retailer Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Feedback Text'); ?></th>
		<th><?php __('Feedback Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Feedback'] as $feedback):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $feedback['id'];?></td>
			<td><?php echo $feedback['deal_id'];?></td>
			<td><?php echo $feedback['retailer_id'];?></td>
			<td><?php echo $feedback['user_id'];?></td>
			<td><?php echo $feedback['feedback_text'];?></td>
			<td><?php echo $feedback['feedback_value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'feedbacks', 'action' => 'view', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'feedbacks', 'action' => 'edit', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'feedbacks', 'action' => 'delete', $feedback['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
