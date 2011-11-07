<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$.ajax({
		    url: "https://www.googleapis.com/shopping/search/v1/public/products?",
			data: {
			        key: "AIzaSyBqDwgk5rGJcQ1gFY4pgz2whdoxqwm5WFU", 
			        country: "IT", 
			        language: "it", 
			        currency: "EUR",
					q: 'iphone 4S'
			    },
			dateType: 'json',
			success: function(msg){
				console.debug(msg);
			}
		});
		
		$('#UsersSearchpriceForm').submit(function(){
			var link = $(this).attr('action');
			var serial = $(this).serialize();
			
			$.ajax({
				url: link,
				type: 'POST',
				data: serial,
				success: function(msg){
					
				},
				beforeSend: function(){
					
				},
				error: function(){
					
				}
			})
		});
		
	});
</script>
<div class="grid_16" id="slogan">
	<h1>Create Deal</h1>
	<h1 class="subtitle">Crea un gruppo, condividi, compra. </h1>
</div>
<div class="clear"></div>

<div class="grid_16 section">
	<div id="target"></div>
	<h1>Quale prodotto stai cercando ?</h1>
	<?php echo $this->Form->create('Users', array('action'=>'searchprice')); ?>
	<?php echo $this->Form->input('Search', array('label'=>false, 'placeholder'=>'Scrivi ciò che vorresti comprare ad un prezzo scontato')); ?>
	<?php echo $this->Form->end('Search', array('class'=>'submit_front')); ?>
	<p class="suggestion">Premi invio</p>
	<?php echo $this->Html->image('twitter_dev.png', array('alt' => 'Spiegazione Creazione Deal', 'width' => 700)); ?>
</div>