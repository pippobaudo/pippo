<div>
    <h1 class="header_logo">
		<?php echo $this->Html->link('Groupin', array('controller'=>'pages', 'action'=>'index')); ?>
	</h1>
    <ul id="nav">
		<?php if($this->params['controller'] == 'pages' && $this->params['action'] == 'index'){ ?>
      		<li class="selected"><?php echo $this->Html->link('Home', array('controller'=>'pages', 'action'=>'index')); ?></li>
		<?php }else{ ?>
      		<li><?php echo $this->Html->link('Home', array('controller'=>'pages', 'action'=>'index')); ?></li>
		<?php } ?>
		
		<?php if($this->params['action'] == 'blog'){ ?>
      		<li class="selected"><?php echo $this->Html->link('Blog', array('controller'=>'pages', 'action'=>'blog')); ?></li>
		<?php }else{ ?>
		      <li><?php echo $this->Html->link('Blog', array('controller'=>'pages', 'action'=>'blog')); ?></li>
		<?php } ?>
		
		<?php if($this->params['action'] == 'how_it_works'){ ?>
      		 <li class="selected"><?php echo $this->Html->link('How it works', array('controller'=>'pages', 'action'=>'how_it_works')); ?></li>
		<?php }else{ ?>
      		<li><?php echo $this->Html->link('How it works', array('controller'=>'pages', 'action'=>'how_it_works')); ?></li>
		<?php } ?>
		
		<?php if($this->params['controller'] == 'deals' && $this->params['action'] == 'index'){ ?>
      		<li class="selected"><?php echo $this->Html->link('Browse Deals', array('controller'=>'deals', 'action'=>'index')); ?></li>
		<?php }else{ ?>
      		<li><?php echo $this->Html->link('Browse Deals', array('controller'=>'deals', 'action'=>'index')); ?></li>
		<?php } ?>		
    </ul>
    <form action="#" id="nav_search_form">
      <p><input type="text" placeholder="Search deals" class="search placeholder" id="nav_search_q"></p>
      <input type="submit">
    </form>
    <ul id="alt-nav">
        <li>
			<?php 
			if ( !$isLogged ) {
				echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); 
			} 
			?>
        </li>
        <li>
        	<?php 
        	if ( !$isLogged ) {
        		echo $this->Html->link('Join in', array('controller'=>'users', 'action'=>'signup'), array('id'=>'join-groupin')); 
        	} else { 
        		echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'), array('id'=>'join-groupin'));
        		} 
        	?>
			
		</li>
    </ul>
</div>