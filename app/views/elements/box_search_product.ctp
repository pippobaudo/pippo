<?php echo $this->Html->script('facebox/facebox'); ?>
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
						maxResults: '5',
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
			console.debug(data);
			$('#target').html('');

			data.items.sort(function(a, b){
				return a.product.inventories[0].price-b.product.inventories[0].price;				
			});
			
	        $.each(data.items, function(i, item){
				var ul = $('<ul/>');
	            if (item.product.images.length > 0){
	                link = item.product.images[0]['link']; // cache value
					var li = $('<li/>');
	                var img = $("<img/>").attr("src", link);
					img.attr({'width':100, 'height': 90});
	            }
				var price = $('<p/>').html(item.product.inventories[0].price).attr('class', 'price_style grid_2');
				var ship = $('<p/>').html(item.product.inventories[0].shipping).attr('class', 'ship_style grid_3');
				<?php if(!empty($user)){ ?>
					var scelta = $('<a/>').html('Questo!').attr({'class':'button', 'href': '<?php echo Router::url("/", true); ?>/users/createdeal/<?php echo $user["User"]["id"]; ?>/'});
				<?php }else{ ?>
					var scelta = $('<a/>').html('Login').attr({'class':'button', 'href': '<?php echo Router::url("/", true); ?>/users/login/'});
				<?php } ?>
				li.append(price).append(ship).append(img).append(scelta);
				ul.append(li);
				$('<div/>').attr({'class':'result_deal_product'}).append(ul).appendTo('#target');
				$.facebox({ div: '#target_container' });
			});
	    }
	});
</script>
<div class="grid_16 box section search_front">
	<div id="target_container" style="display:none;">
		<div id="inner_target_container">
			<div id="header_target_container">
				<div class="grid_3">Prezzo</div>
				<div class="grid_3">Spedizione</div>
				<div class="grid_3">Immagine</div>
				<div class="grid_3">Scelta</div>
			</div>
			<div class="clear"></div>
			<div id="target"></div>
		</div>
	</div>
	<h1>Quale prodotto stai cercando ?</h1>
	<?php echo $this->Form->create('Users', array('action'=>'searchprice')); ?>
	<?php echo $this->Form->input('Search', array('label'=>false, 'placeholder'=>'Scrivi ciò che vorresti comprare ad un prezzo scontato')); ?>
	<?php echo $this->Form->end('Search', array('class'=>'submit_front')); ?>
	<p class="suggestion">Premi invio</p>
	<?php echo $this->Html->image('twitter_dev.png', array('alt' => 'Spiegazione Creazione Deal', 'width' => 700)); ?>
</div>