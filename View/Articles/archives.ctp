<h1 id="titre_archives">Archives</h1>
<?php
	echo $this->Html->image('archives.jpg', array('id' => 'page_img') );
?>
<div id="left_column_archives" class="left_column">
	<div id="tiers">
		<h2>Tiers</h2>
		<ul>
			<?php foreach ($tiers AS $tier) { ?>
				<li id="tier<?php echo $tier['Tier']['id'] ;?>">
					<a href="<?php echo _racine_.'archives/?idtier='.$tier['Tier']['id']?>"><?php echo $tier['Tier']['name']?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>	
<div id="center_column">
	<ul id="old_news">
		<?php
		foreach ($articles AS $article){?>
			<li>
				<h2><?php echo h($article['Article']['title']);?></h2>
				<p class="date_video">
					<?php echo h($article['Article']['date']).' - ';
					if ($article['Video']['link'] == 'vide') {
						echo 'Pas de vidéo';
					} else 
						echo '<a href="http://www.youtube.com/watch?v='.($article['Video']['link']).'" target="blank">Vidéo ici</a>';?></p>
				<div class="contenu">
					<?php echo ($article['Article']['contents']);?>
				</div>
				<?php if ($article['Screenshot']['name'] == 'vide') {
					echo '<p class="screenSoon">Pas de screenshot !</p>';
				} else{
					echo $this->Html->image('news/t'.$article['Tier']['number'].'/article/'.$article['Screenshot']['name'].'.jpg', array('class' => 'screenshot') );
				}?>
			</li>
		<?php } ?>
	</ul>
</div>	