<?php 
	$chemin = $_SERVER['DOCUMENT_ROOT'].'Equinoxx/app/View/';
	include($chemin.'left_column_media.php'); 
?>
<div id="center_column">
	<h2 id="media_title">Screenshot du Tier <?php echo $screenshots['0']['Tier']['number']; ?></h2>
	<div id="media">
		<?php
			foreach ($screenshots as $screenshot) {
				echo $this->Html->image('news/t'.$screenshot['Tier']['number'].'/media/'.$screenshot['Screenshot']['name'].'.jpg', array('class' => 'media_screen') );
			}	
		?>
	</div>
</div>