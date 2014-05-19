<div id="left_column_media" class="left_column">
	<div id="screenshot">
		<h2>Screenshots</h2>
		<ul>
			<?php foreach ($tiers AS $tier) { ?>
				<li id="tier<?php echo $tier['Tier']['id'] ;?>">
					<a href="<?php echo _racine_.'screenshots/?idtier='.$tier['Tier']['id']?>"><?php echo $tier['Tier']['name']?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div id="video">
		<h2>Vidéos</h2>
		<ul>
			<?php foreach ($tiers AS $tier) { ?>
				<li id="tier<?php echo $tier['Tier']['id'] ;?>">
					<a href="<?php echo _racine_.'videos/?idtier='.$tier['Tier']['id']?>"><?php echo $tier['Tier']['name']?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>