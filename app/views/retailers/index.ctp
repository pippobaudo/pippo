<div id="main" role="main">
		<div class="grid_16 box_retailer">
			<div class="grid_4">
				<img src="img/logo_retailer.png" alt="User image" />
			</div>
			<div class="grid_4 box_user_info">
				<h1>Retailer</h1><br/>
				<b>Via della repubblica, n 5</b><br/>
				<b>Padova, Italia</b><br/>
				<b>www.eprice.it</b><br/>
				<br/>
				<a href="#" class="button map">Map</a>
			</div>
			<div id="box_referring" class="grid_7">
				<img src="img/avatar.png" alt="User image" />
				<h1>Responsabile</h1><br/>
				<strong>Alberto Sinfrei</strong><br/>
				<br/>
				<a href="#" class="button mail">Contact</a>
				<a href="#" class="button add">Feedback</a>
			</div>
			<div class="clear"></div>
			<div id="feedback_box" class="grid_16">
				<div id="feedback" class="grid_2">
					<a href="#" class="button add">35</a>
					<a href="#" class="button delete">10</a>
				</div>
				<div class="grid_6">
					<textarea placeholder="Lascia qui un tuo commento" name="feedback_text" rows="4" cols="40"></textarea>
				</div>
				<div id="object_buyed" class="grid_7">
					<?php echo $this->Html->image('present.png'); ?>
					<div id="info_object">
						<b>Scatola da regalo</b><br/><br/>
						<p>Comprato il 23 Agosto 2011 <br/> Ricevuto il 1 Settembre 2011</p>
					</div>
				</div>
			<!--
				<div id="last_comments" class="grid_7">
					<img src="img/small-avatar.png" alt=""><b>Ciccio says: </b><p>"You can create and personalize your own eBay Store with a unique web address."</p>
				</div>
			-->
			</div>
		</div>
		<div class="clear"></div>
		<div id="observer_retailer_deal" class="grid_16 box_how_it_works round_border">
			<h1 class="info">Deal ai attualmente sta partecipando</h1>
			<div class="grid_16">
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
				<?php endforeach; ?>
			</div>
		</div>
		<div class="clear"></div>