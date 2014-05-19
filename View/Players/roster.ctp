<h1 id="titre_roster">Roster</h1>
<?php
	echo $this->Html->image('roster.jpg', array('id' => 'page_img') );
?>
<div id="left_column_roster" class="left_column">
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
</div>
<div id="center_column">
	<div id="roster">
		<div id="tank">
			<?php echo $this->Html->image('tank.png');  ?>
			<ul>
				<?php foreach ($tanks AS $tank) {?>
					<li>
						<ul class="player_info">
							<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/<?php echo $tank['Player']['name'];?>/advanced" 
								class="classe<?php echo $tank['Profession']['id']; ?>" target="blank"><?php echo $tank['Player']['name'];?></a></h2></li>
							<li>Classe : <?php echo $tank['Profession']['name'] ;?></li>
							<li>Spécialité : <?php echo $tank['Speciality']['name'] ;?></li>
							<li>Rang de guilde : <?php echo $tank['Rank']['name'] ;?></li>
						</ul>
					</li>
				<?php } ?>
			</ul>	
		</div>
		<div id="heal">
			<?php echo $this->Html->image('heal.png');  ?>
			<ul>
				<?php foreach ($heals AS $heal) {?>
					<li>
						<ul class="player_info">
							<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/<?php echo $heal['Player']['name'];?>/advanced" 
								class="classe<?php echo $heal['Profession']['id']; ?>" target="blank"><?php echo $heal['Player']['name'];?></a></h2></li>
							<li>Classe : <?php echo $heal['Profession']['name'] ;?></li>
							<li>Spécialité : <?php echo $heal['Speciality']['name'] ;?></li>
							<li>Rang de guilde : <?php echo $heal['Rank']['name'] ;?></li>
						</ul>
					</li>
				<?php } ?>
			</ul>
		</div>
		<div id="dps">
			<?php echo $this->Html->image('dps.png');  ?>
			<ul>
				<?php foreach ($dpss AS $dps) {?>
					<li>
						<ul class="player_info">
							<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/<?php echo $dps['Player']['name'];?>/advanced" 
								class="classe<?php echo $dps['Profession']['id']; ?>" target="blank"><?php echo $dps['Player']['name'];?></a></h2></li>
							<li>Classe : <?php echo $dps['Profession']['name'] ;?></li>
							<li>Spécialité : <?php echo $dps['Speciality']['name'] ;?></li>
							<li>Rang de guilde : <?php echo $dps['Rank']['name'] ;?></li>
						</ul>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>