<?php echo $this->Html->script('validate')?>
<?php echo $this->Html->script('EMSwitchBox'); ?>
<?php echo $this->Html->css('checkbox'); ?>
<?php echo $this->Html->script('http://j.maxmind.com/app/geoip.js'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#locale').val(navigator.language);
		$('#region').val(geoip_region());
		$('#region_name').val(geoip_region_name());
		$('#country_name').val(geoip_country_name());
		$('#lat').val(geoip_latitude());
		$('#lon').val(geoip_longitude());
		
		$('input[type=checkbox]').EMSwitchBox({onLabel : 'User', offLabel : 'Seller'});
		
		$('.switch').click(function(){
			if($(this).prev('input').attr('checked') != undefined){
				// seller
				$('#i_am_user').fadeOut('fast', function(){
					$('#form_user').fadeOut('fast');
					$('#i_am_seller').fadeIn('slow');
					$('#form_retailer').fadeIn('slow');			
				});
			}else{
				//user
				$('#i_am_seller').fadeOut('fast', function(){
					$('#form_retailer').fadeOut('fast');
					$('#i_am_user').fadeIn('slow');
					$('#form_user').fadeIn('slow');
				});

			}
		})
		
		$('#UserSignupForm').validate();
		$('#RetailerSignupForm').validate();
		
		$('#form_retailer').hide();
		
	});
</script>

<div class="grid_16" id="slogan">
	<h1>Entra nel Social Shopping</h1>
	<h1 class="subtitle">Entra in un gruppo o creane uno tuo. </h1>
</div>
<div class="clear"></div>
<div class="grid_16 box_how_it_works round_border register">
	<?php echo $this->Form->create('User'); ?>
	<div class="grid_7">
		<br/><br/>
		<h1>Sign In</h1>
		<div id="i_am_user" class="grid_7 block">
			<?php echo $this->Html->image('user.jpg', array('alt'=>'i am a user', 'style'=>'float:left;')); ?>
			<h1 class="slogan">I'm a user</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<div id="i_am_seller" class="grid_7 block" style="display:none;">
			<?php echo $this->Html->image('retailer.jpg', array('alt'=>'i am a retailer', 'style'=>'float:left;')); ?>
			<h1 class="slogan">I'm a retailer</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<div class="clear"></div>
		<div class="prefix_3 grid_7">
			<?php echo $this->Form->input('user_type', array('type'=>'checkbox', 'id'=>'user_type', 'label'=>false)); ?>
		</div>
	</div>
	<div id="form_user" class="grid_8">
		<?php echo $this->Form->input('name', array('label'=>false, 'placeholder'=>'Name', 'class'=>'required')); ?>
		<?php echo $this->Form->input('surname', array('label'=>false, 'placeholder'=>'Surname', 'class'=>'required')); ?>
		<?php echo $this->Form->input('born', array('label'=>false, 'placeholder'=>'28 Maggio 1983', 'class'=>'required')); ?>
		<?php echo $this->Form->input('gender', array('label'=>false, 'placeholder'=>'Male', 'class'=>'required')); ?>
		<?php echo $this->Form->input('email', array('label'=>false, 'placeholder'=>'info@groupin.it', 'class'=>'required email')); ?>
		<?php echo $this->Form->input('city', array('label'=>false, 'placeholder'=>'Naples', 'class'=>'required')); ?>
		<?php echo $this->Form->input('password', array('label'=>false, 'placeholder'=>'password', 'class'=>'required')); ?>
		<?php echo $this->Form->input('locale', array('type'=>'hidden', 'id'=>'locale')); ?>
		<?php echo $this->Form->input('region', array('type'=>'hidden', 'id' =>'region')); ?>
		<?php echo $this->Form->input('region_name', array('type'=>'hidden', 'id' =>'region_name')); ?>
		<?php echo $this->Form->input('country', array('type'=>'hidden', 'id'=>'country_name')); ?>
		<?php echo $this->Form->input('lat', array('type'=>'hidden', 'id'=>'lat')); ?>
		<?php echo $this->Form->input('lon', array('type'=>'hidden', 'id'=>'lon')); ?>
		<?php echo $this->Form->end('Sign up'); ?>
	</div>
	
	<div id="form_retailer" class="grid_8">
		<?php echo $this->Form->create('Retailer', array('type'=>'file')); ?>
		<?php echo $this->Form->input('company_name', array('label'=>false, 'placeholder'=>'Company Name', 'class'=>'required')); ?>
		<?php echo $this->Form->input('owner', array('label'=>false, 'placeholder'=>'Owner', 'class'=>'required')); ?>
		<?php echo $this->Form->input('email', array('label'=>false, 'placeholder'=>'email@email.com', 'class'=>'required email')); ?>
		<?php echo $this->Form->input('password', array('label'=>false, 'placeholder'=>'password', 'class'=>'required')); ?>
		<?php echo $this->Form->input('website', array('label'=>false, 'placeholder'=>'website', 'class'=>'required url')); ?>
		<?php echo $this->Form->input('vat', array('label'=>false, 'placeholder'=>'partita iva', 'class'=>'required')); ?>
		<?php echo $this->Form->input('address', array('label'=>false, 'placeholder'=>'Indirizzo', 'class'=>'required')); ?>
		<?php echo $this->Form->input('country', array('label'=>false, 'placeholder'=>'Nazione', 'class'=>'required')); ?>
		<?php echo $this->Form->input('region_name', array('label'=>false,'type'=>'text', 'placeholder'=>'Regione', 'class'=>'required')); ?>
		<?php echo $this->Form->input('city', array('label'=>false,'type'=>'text', 'placeholder' =>'Citta', 'class'=>'required')); ?>
		<?php echo $this->Form->input('zipcode', array('label'=>false,'type'=>'text', 'placeholder' =>'CAP', 'class'=>'required')); ?>
		<?php echo $this->Form->input('phone', array('label'=>false,'type'=>'text', 'placeholder'=>'Telefono', 'class'=>'required')); ?>
		<?php echo $this->Form->input('fax', array('label'=>false,'type'=>'text', 'placeholder'=>'Fax', 'class'=>'required')); ?>
		<?php echo $this->Form->input('company_type', array('label'=>false,'type'=>'text', 'class'=>'required', 'placeholder'=>'Srl')); ?>
		<?php echo $this->Html->image('avatar-sample.png'); ?>
		<?php echo $this->Form->input('image', array('type'=>'file', 'label'=>false, 'class'=>'required')); ?>
		<?php echo $this->Form->input('lat', array('type'=>'hidden', 'id'=>'lat')); ?>
		<?php echo $this->Form->input('lon', array('type'=>'hidden', 'id'=>'lon')); ?>
		<?php echo $this->Form->end('Sign up'); ?>
	</div>
</div>
<div class="clear"></div>