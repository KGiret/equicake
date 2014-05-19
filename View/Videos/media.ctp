<?php 
	$chemin = $_SERVER['DOCUMENT_ROOT'].'Equinoxx/app/View/';
	include($chemin.'left_column_media.php'); 
?>
<div id="center_column">
	<h2 id="media_title">Video du Tier <?php echo $videos['0']['Tier']['number']; ?></h2>
	<div id="media">
		<?php
			foreach ($videos as $video) {
				echo "<iframe class=\"media_video\" width=\"315\" height=\"195\" src=\"http://www.youtube.com/embed/".$video['Video']['link']."\" frameborder=\"0\" allowfullscreen></iframe>";
			}	
		?>
	</div>
</div>