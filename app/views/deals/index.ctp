<?php if(empty($this->params['pass'][0])){ ?>
<div class="grid_16" id="slogan">
	<h1>Browse</h1>
	<h1 class="subtitle">Crea un gruppo, condividi, compra. </h1>
</div>
<div class="clear"></div>
<div class="grid_16 box_filter">
	<form action="search-deals_submit" method="get" accept-charset="utf-8">
		<input type="text" name="search" value="" id="search" placeholder="Cerca il tuo deal" />
	</form>
</div>
<div class="clear"></div>
<div class="grid_16 section">
	<?php foreach($deals as $deal): ?>
	<div class="grid_5 box">
		<div class="deal_image">
			<?php  
			echo $this->Html->link(
					$this->Html->image($deal['Image']['thumb_path'], array('alt'=> $deal['Deal']['title'], 'border' => '0')),
					array('controller'=>'deals', 'action'=>'index', $deal['Deal']['id'], str_replace(" ", "-", $deal['Deal']['title'].'-'.$deal['Deal']['subtitle'])),
					array('escape' => false)
				);
			?>
		</div>
		<div class="grid_5 info">
			<div class="grid_3">
				<h2><?php echo $deal['Deal']['title']; ?></h3>
					<br/>
				<h3>16GB BIANCO</h3>
			</div>
			<div class="grid_1 price">
				<strong>&euro;</strong><?php echo $deal['Deal']['end_price']; ?>
			</div>
			<div class="clear"></div>
			<div class="grid_5 progress_bar_box">
				<div class="progress-bar green"></div>
				<strong>-3</strong>
			</div>
			<div class="clear"></div>
			<div class="grid_2 avatar">
					<?php  // $deal['Image']['thumb_path']
					echo $this->Html->link(
							$this->Html->image('avatar.png', array('alt'=> $deal['Deal']['title'], 'border' => '0', 'width'=> 30)),
							array('controller'=>'users', 'action'=>'view', $deal['User']['id']),
							array('escape' => false)
						);
					?>
					<p class="nickname">Nickname</p>
			</div>
			<div class="grid_2 left">
				<p>15 days left</p>
			</div>
		</div>
	</div>
	<div class="grid_5 box">
		<div class="deal_image">
			<?php  
			echo $this->Html->link(
					$this->Html->image($deal['Image']['thumb_path'], array('alt'=> $deal['Deal']['title'], 'border' => '0')),
					array('controller'=>'deals', 'action'=>'index', $deal['Deal']['id'], str_replace(" ", "-", $deal['Deal']['title'].'-'.$deal['Deal']['subtitle'])),
					array('escape' => false)
				);
			?>
		</div>
		<div class="grid_5 info">
			<div class="grid_3">
				<h2><?php echo $deal['Deal']['title']; ?></h3>
					<br/>
				<h3>16GB BIANCO</h3>
			</div>
			<div class="grid_1 price">
				<strong>&euro;</strong><?php echo $deal['Deal']['end_price']; ?>
			</div>
			<div class="clear"></div>
			<div class="grid_5 progress_bar_box">
				<div class="progress-bar green"></div>
				<strong>-3</strong>
			</div>
			<div class="clear"></div>
			<div class="grid_2 avatar">
					<?php  // $deal['Image']['thumb_path']
					echo $this->Html->link(
							$this->Html->image('avatar.png', array('alt'=> $deal['Deal']['title'], 'border' => '0', 'width'=> 30)),
							array('controller'=>'users', 'action'=>'view', $deal['User']['id']),
							array('escape' => false)
						);
					?>
					<p class="nickname">Nickname</p>
			</div>
			<div class="grid_2 left">
				<p>15 days left</p>
			</div>
		</div>
	</div>
	<div class="grid_5 box">
		<div class="deal_image">
			<?php  
			echo $this->Html->link(
					$this->Html->image($deal['Image']['thumb_path'], array('alt'=> $deal['Deal']['title'], 'border' => '0')),
					array('controller'=>'deals', 'action'=>'index', $deal['Deal']['id'], str_replace(" ", "-", $deal['Deal']['title'].'-'.$deal['Deal']['subtitle'])),
					array('escape' => false)
				);
			?>
		</div>
		<div class="grid_5 info">
			<div class="grid_3">
				<h2><?php echo $deal['Deal']['title']; ?></h3>
					<br/>
				<h3>16GB BIANCO</h3>
			</div>
			<div class="grid_1 price">
				<strong>&euro;</strong><?php echo $deal['Deal']['end_price']; ?>
			</div>
			<div class="clear"></div>
			<div class="grid_5 progress_bar_box">
				<div class="progress-bar green"></div>
				<strong>-3</strong>
			</div>
			<div class="clear"></div>
			<div class="grid_2 avatar">
					<?php  // $deal['Image']['thumb_path']
					echo $this->Html->link(
							$this->Html->image('avatar.png', array('alt'=> $deal['Deal']['title'], 'border' => '0', 'width'=> 30)),
							array('controller'=>'users', 'action'=>'view', $deal['User']['id']),
							array('escape' => false)
						);
					?>
					<p class="nickname">Nickname</p>
			</div>
			<div class="grid_2 left">
				<p>15 days left</p>
			</div>
		</div>
	</div>
	<div class="grid_5 box">
		<div class="deal_image">
			<?php  
			echo $this->Html->link(
					$this->Html->image($deal['Image']['thumb_path'], array('alt'=> $deal['Deal']['title'], 'border' => '0')),
					array('controller'=>'deals', 'action'=>'index', $deal['Deal']['id'], str_replace(" ", "-", $deal['Deal']['title'].'-'.$deal['Deal']['subtitle'])),
					array('escape' => false)
				);
			?>
		</div>
		<div class="grid_5 info">
			<div class="grid_3">
				<h2><?php echo $deal['Deal']['title']; ?></h3>
					<br/>
				<h3>16GB BIANCO</h3>
			</div>
			<div class="grid_1 price">
				<strong>&euro;</strong><?php echo $deal['Deal']['end_price']; ?>
			</div>
			<div class="clear"></div>
			<div class="grid_5 progress_bar_box">
				<div class="progress-bar green"></div>
				<strong>-3</strong>
			</div>
			<div class="clear"></div>
			<div class="grid_2 avatar">
					<?php  // $deal['Image']['thumb_path']
					echo $this->Html->link(
							$this->Html->image('avatar.png', array('alt'=> $deal['Deal']['title'], 'border' => '0', 'width'=> 30)),
							array('controller'=>'users', 'action'=>'view', $deal['User']['id']),
							array('escape' => false)
						);
					?>
					<p class="nickname">Nickname</p>
			</div>
			<div class="grid_2 left">
				<p>15 days left</p>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<div class="clear"></div>
<?php }else{ ?>
<div class="grid_16 section space_top">
	<div class="grid_16 header_top_deal">
		<div class="grid_8">
			<h1><?php echo $dc['Deal']['title']; ?> <?php echo $dc['Deal']['subtitle']; ?></h1>
		</div>
		<div class="grid_7 time_deal">
			<strong>REMAINS</strong>
			<p class="time start">Start: <?php echo strftime("%a %d %b %Y", strtotime($dc['Deal']['start_datetime'])); ?></p>
			<p class="time end">End: <?php echo strftime("%a %d %b %Y", strtotime($dc['Deal']['end_datetime'])); ?></p>
		</div>
	</div>
	<div class="clear"></div>
	<div class="grid_16">
		<div class="grid_4 price_deal">
			<div class="grid_4 starting_price">
				<p>starting price</p>
				<div class="old_price"><div class="exchange">&euro;</div><em>699</em><strong>.00</strong></div>
			</div>
			<div class="clear"></div>
			<div class="grid_4 discount_section">
				<div class="grid_2">-<?php echo $dc['Deal']['start_discount']; ?>%<p>price discount</p></div>
				<div class="grid_2">-100 &euro;<p>money discount</p></div>
			</div>
			<div class="clear"></div>
			<div class="grid_4 price_now">
				<h1>NOW YOU COULD HAVE IT AT</h1>
				<div class="price"><?php //echo $dc['Deal']['start_price']; ?><div class="exchange">&euro;</div>399<strong>.00</strong></div>
				<div id="people"> 1 < <?php echo $this->Html->image('icons/people_16.png', array('alt'=>'people join into this deal')); ?> < <?php echo $dc['Deal']['users_count']; ?></div>
			</div>
			<div class="clear"></div>
			<div class="grid_4 join_in_deal">
				<div class="button-wrapper">
					<a href="#" class="button light">Join In</a>
				</div>
			</div>
		</div>
		<div class="grid_11">
			<div class="grid_8">
				<h1 class="title_deal"><?php echo $dc['Deal']['title']; ?></h1>
				<h2 class="subtitle_deal"><?php echo $dc['Deal']['subtitle']; ?></h2>
			</div>
			<div class="grid_2">
				<p class="observer">Observers - <?php echo $dc['Deal']['users_observer_count']; ?></p>
				<p class="retailers_count">Retailer - <?php echo $dc['Deal']['retailers_count']; ?></p>
			</div>
		</div>
		<div class="clear"></div>
		<div class="grid_11 image">
			<div class="prefix_9 grid_3 free_shipping"><?php echo $this->Html->image('free-shipping.png'); ?></div>
			<?php //echo $this->Html->image($dc['Image']['original_path'], array('alt'=>$dc['Deal']['title'])); ?>
			<?php echo $this->Html->image('iphone_4.png', array('alt'=>$dc['Deal']['title'])); ?>
			<div class="status <?php echo $dc['Deal']['deal_status']; ?>"><?php echo $dc['Deal']['deal_status']; ?></div>
		</div>
		<div class="clear"></div>
		<div class="grid_16">
			<div class="grid_4 next_step">
				<h1>NEXT</h1>
				<div class="grid_3 price"><?php //echo $dc['Deal']['start_price']; ?><div class="exchange">&euro;</div>310<strong>.00</strong></div>
				<div class="clear"></div>
				<div id="people"> 10 < <?php echo $this->Html->image('icons/people_16.png', array('alt'=>'people join into this deal')); ?> < <?php echo $dc['Deal']['users_count']; ?></div>
			</div>
			<div class="grid_11 progress_deal">
				<a href="#" class="button save">info</a>
				<div class="progress-bar green"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="grid_16 share_container">
			<div class="grid_16 more_people">
				<b>You could buy less then this price too!</b>
				<?php echo $this->Html->image('icons/more_people.png', array('alt'=>'people join into this deal')); ?> <?php echo $this->Html->link('Invite a friend', array('controller'=>'', 'action'=>''), array('class'=>'button')); ?> or <a href="#" class="invite_your_friends">invite your friends</a>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<hr/>
	<div class="grid_16 best_retailer">
		<p>Retailer con offerta migliore</p>
	</div>
	<div class="clear"></div>
	<div class="grid_16 retailer_winner">
		<div class="grid_2">
			<?php echo $this->Html->image('canon.png', array('alt'=>$dc['Retailer']['company_name']), array('class'=>'border_image')); ?>
		</div>
		<div class="grid_6 info">
			<h2><?php echo $dc['Retailer']['company_name']; ?></h2>
			<p><?php echo $dc['Retailer']['city']; ?>, <?php echo $dc['Retailer']['country']; ?></p>
		</div>
		<div class="grid_6 options">
			<?php echo $this->Html->link('website', array(), array('class'=>'button')); ?>
			<?php echo $this->Html->link('profilo', array(), array('class'=>'button')); ?>
			<?php echo $this->Html->link('mappa', array(), array('class'=>'button')); ?>
			<?php echo $this->Html->link('mail', array(), array('class'=>'button')); ?>
		</div>
	</div>
</div>
<div class="grid_16 section round_border">
	<div class="image_retailer">
		<h1>Altri Commercianti</h1>
		<div class="grid_3">
			<?php echo $this->Html->image('canon.png', array('alt'=>$dc['Retailer']['company_name']), array('class'=>'border_image')); ?>
		</div>
		<div class="grid_3">
			<?php echo $this->Html->image('canon.png', array('alt'=>$dc['Retailer']['company_name']), array('class'=>'border_image')); ?>
		</div>
		<div class="grid_3">
			<?php echo $this->Html->image('canon.png', array('alt'=>$dc['Retailer']['company_name']), array('class'=>'border_image')); ?>
		</div>
		<div class="grid_3">
			<?php echo $this->Html->image('canon.png', array('alt'=>$dc['Retailer']['company_name']), array('class'=>'border_image')); ?>
		</div>
		<div class="grid_3">
			<?php echo $this->Html->image('canon.png', array('alt'=>$dc['Retailer']['company_name']), array('class'=>'border_image')); ?>
		</div>
	</div>
</div>

<div class="grid_16 section round_border">
	<div class="grid_8">
		<h1>Conosci un commerciante che potrebbe soddisfare le richieste di questo post ?</h1>
	</div>
	<div class="grid_7 retailer_invite">
		<?php echo $this->Form->create('Users', array('action'=>'retailer_invite')); ?>
		<?php echo $this->Form->input('Email', array('type'=>'text', 'label'=>false ,'placeholder'=>'Email Commerciante')); ?>
		<?php echo $this->Form->end(__('Invitalo', true), array('class'=>'small')); ?>
	</div>
</div>

<?php } ?>