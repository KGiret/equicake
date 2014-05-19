<script type="text/javascript">
	$(function(){
		$('#carousel').infiniteCarousel();
	});
</script>
	<h1 id="titre_accueil">Dernières News</h1>
	<div id="carousel">
		<ul>
			<?php foreach ($images AS $image) { ?>
				<li>
					<?php
						echo $this->Html->image('news/t'.$image['Tier']['number'].'/diapo/'.$image['Screenshot']['name'].'.jpg', array('class' => 'diapo_image') );
					?>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div id="left_column_accueil" class="left_column">
	<div id="recrutement">
		<h2>Recrutement</h2>
		<div id="class">
			<ul>
				<?php foreach ($classes AS $classe){ ?>
					<li class="classe<?php echo $classe['Profession']['id']; ?>">
						<?php echo h($classe['Profession']['name']); ?>
					</li>
				<?php } ?>
			</ul>
		</div>
		<div id="spe">
			<ul>
				<?php foreach ($specialities AS $speciality){
					if($speciality['Speciality']['state'] == 0)	{	
						$state = 'no_recrut';
					} else
						$state = 'recrut'; ?>
					<li id="spe<?php echo $speciality['Speciality']['id']; ?>">
						<?php echo $this->Html->image('recrut/'.$speciality['Speciality']['name'].$speciality['Speciality']['id'].'.png', array('class' => $state) );  ?>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<a href="./recrutement" class="recrut_lien" id="recrut_lien1">Voir détails</a>
	<a href="http://equinoxx.forumpro.fr/f3-candidature" id="recrut_lien2" class="recrut_lien" target="blank">Apply</a>	
	<div id="twolastvideo">
		<h2>Dernières vidéos</h2>
		<ul>
			<?php foreach ($videos As $video)
			{
				echo '<iframe width="240" height="160" src="http://www.youtube.com/embed/'.$video['Video']['link'].'?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>';
			}?>
		</ul>
	</div>
	<a href="http://www.youtube.com/channel/UCSJrBDvG3Oksw50WIFUIM4A?feature=watch" id="youtube_link" target="blank"></a>
</div>
<div id="center_column">
	<ul id="news">
		<?php
		foreach ($articles AS $article){?>
			<li>
				<h2><?php echo h($article['Article']['title']);?></h2>
				<p class="date_video">
					<?php echo h($article['Article']['date']).' - ';
					if ($article['Video']['link'] == 'vide') {
						echo 'Bientôt en vidéo';
					} else 
						echo '<a href="http://www.youtube.com/watch?v='.($article['Video']['link']).'" target="blank">Vidéo ici</a>';?></p>
				<div class="contenu">
					<?php echo ($article['Article']['contents']);?>
				</div>
				<?php if ($article['Screenshot']['name'] == 'vide') {
					echo '<p class="screenSoon">Screenshot bientôt !</p>';
				} else{
					echo $this->Html->image('news/t'.$article['Tier']['number'].'/article/'.$article['Screenshot']['name'].'.jpg', array('class' => 'screenshot') );
				}?>
			</li>
		<?php } ?>
	</ul>
</div>

