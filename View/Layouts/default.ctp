<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<!-- <h1 id="home"><?php //echo $this->Html->link('/'); ?></h1> -->
			<a href="/" id="home"></a>
			

			<ul id="top_menu">
			<li id="top1"><a href="http://www.wowprogress.com/guild/eu/archimonde/EquinoXx" target="blank">WoW Progress</a></li>
			<li id="top2"><a href="http://www.worldoflogs.com/guilds/213315/" target="blank">World of log</a></li>	
			<li id="top3"><a href="http://eu.battle.net/wow/fr/guild/archimonde/EquinoXx/" target="blank">Armurerie</a></li>
		</ul>
		
		<ul id="nav">
			<li id="nav1" 
			><a href="Articles">News</a></li>
			<li id="nav2"><a href="http://equinoxx.forumpro.fr/" target="blank">Forum</a></li>
			<li id="nav3" ><a href="roster" >Roster</a></li>
			<li id="nav4" ><a href="media">Médias</a></li>
			<li id="nav5"><a href="http://equinoxx.forumpro.fr/f3-candidature" target="blank">Apply</a></li>
			<li id="nav6" ><a href="archives">Archives</a></li>
		</ul>

		</div>
		<div id="columm">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>Copyright Guilde EquinoXx 2014</p>
			<ul>
				<li><a href="accueil">News</a></li>
				<li><a href="roster" >Roster</a></li>
				<li><a href="media">Média</a></li>
				<li><a href="recrutement">Recrutement</a></li>
				<li><a href="archives">Archives</a></li>
				<li ><a href="mentions">Mentions légales</a></li>	
				<li id="footer_last"><a href="#"><?php echo $this->Html->image('haut.png'); ?></a></li>
			</ul>

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
