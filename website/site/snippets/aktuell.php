<?php
	$aktuell = $pages-> find('aktuell');
	
	$aktuelltext= kirbytext($aktuell->text());
	if(strlen($aktuelltext)>1){
	?>

		<h3>Nächstes Treffen</h3>
		<div class="event clearfix">
		<?php echo $aktuelltext; ?>
		</div>
	<?php
    }
?>