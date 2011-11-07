<?php echo $this->Html->script('facebox/facebox'); ?>
<?php echo $this->Html->css('createdeal_table'); ?>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('#UsersSearchpriceForm').submit(function(){
			var query = $('#UsersSearch').val();
			$.ajax({
			    url: "https://www.googleapis.com/shopping/search/v1/public/products?",
				data: {
				        key: "AIzaSyBqDwgk5rGJcQ1gFY4pgz2whdoxqwm5WFU", 
				        country: "IT", 
				        language: "it", 
				        currency: "EUR",
						maxResults: '4',
						rankBy: 'relevancy',
						q: query
				    },
				crossDomain: true,
				dataType: 'jsonp',
				success: function(msg){
					analizza(msg);
				}
			});
			return false;
		});
		function analizza(data) {
			$('#target').html('');
			console.debug(data);
	        $.each(data.items, function(i, item){
				var ul = $('<ul/>');
	            if (item.product.images.length > 0){
	                link = item.product.images[0]['link']; // cache value
					var li = $('<li/>');
	                var img = $("<img/>").attr("src", link);
					img.attr({'width':100, 'height': 90});
	                var a = $("<a/>").attr({href: link, title: "nome del prodotto"}).append(img);
	            }
				var price = $('<p/>').html(item.product.inventories[0].price).attr('class', 'price_style');
				var ship = $('<p/>').html(item.product.inventories[0].shipping).attr('class', 'ship_style');
				li.append(price).append(ship).append(a);
				ul.append(li);
				$('<div/>').attr({'class':'result_deal_product'}).append(ul).appendTo('#target');
				$.facebox({ div: '#target' });
				
			});
	    }
	});
</script>
<div class="grid_16" id="slogan">
	<h1>Create Deal</h1>
	<h1 class="subtitle">Crea un gruppo, condividi, compra. </h1>
</div>
<div class="clear"></div>

<div class="grid_16 section">
	<div id="target" style="display:none;"></div>
	<h1>Quale prodotto stai cercando ?</h1>
	<?php echo $this->Form->create('Users', array('action'=>'searchprice')); ?>
	<?php echo $this->Form->input('Search', array('label'=>false, 'placeholder'=>'Scrivi ciò che vorresti comprare ad un prezzo scontato')); ?>
	<?php echo $this->Form->end('Search', array('class'=>'submit_front')); ?>
	<p class="suggestion">Premi invio</p>
	<?php echo $this->Html->image('twitter_dev.png', array('alt' => 'Spiegazione Creazione Deal', 'width' => 700)); ?>
</div>