<div class="grid_16" id="slogan">
	<h1>Benvenuto su Groupin!</h1>
	<h1 class="subtitle">Next generation of shopping: Crowdshopping</h1>
</div>
<div class="clear"></div>
<div class="grid_16 box_how_it_works round_border">
	<div id="signup">
	  <h2><strong>Iscriviti!</strong></h2>
	  <h3>Groupin ti permette di esplorare il mondo attorno a te. Resta in contatto con gli amici, ricevi consigli da addetti ai lavori, e sblocca sconti e premi.</h3>
	  <a id="facebookButton" onclick="facebookLogin(); return false;" href="#">Iscriviti con Facebook</a>
	  <h3>Oppure prendi la strada panoramica:<br>
		<?php echo $this->Html->link('Iscriviti per e-mail', array('controller'=>'users', 'action'=>'register')); ?>
	  </h3>
	</div>
</div>