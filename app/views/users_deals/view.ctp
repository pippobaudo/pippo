<div class="usersDeals view">
<h2><?php  __('Users Deal');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersDeal['UsersDeal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usersDeal['User']['name'], array('controller' => 'users', 'action' => 'view', $usersDeal['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Deal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usersDeal['Deal']['title'], array('controller' => 'deals', 'action' => 'view', $usersDeal['Deal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersDeal['UsersDeal']['user_status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Deal', true), array('action' => 'edit', $usersDeal['UsersDeal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Users Deal', true), array('action' => 'delete', $usersDeal['UsersDeal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersDeal['UsersDeal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Deals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Deal', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
	</ul>
</div>
