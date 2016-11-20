<?php
/* genera Html para cada article (foto y titulo de proyecto) */
function article($link, $title, $subt, $ext){
return <<<HTML
	<article><a href="/pages/{$link}">
	<header><div class="details">	<h2>{$title}</h2><p>{$subt}</p></div></header>
	<span class="bw-wrap"><img src="http://res.cloudinary.com/oscardc/image/upload/f_auto,q_auto/v1473228387/oscardc.com/img/{$link}/{$link}-bw.jpg" class="bw" alt="{$title}" width=300 height=300></span>
	<span class="clr-wrap"><img src="http://res.cloudinary.com/oscardc/image/upload/f_auto,q_auto/v1473228387/oscardc.com/img/{$link}/{$link}.jpg" class="clr" alt="{$title}" width=300 height=300></span>
	</a></article>
HTML;
}
$currentPage = 'index';
include 'header.php';
?>
<section id="portfolio">
	<h2 id="portfolio-title">Proyectos</h2>
	<div>
		<?php
		echo (article('geoparsing','Geoparsing','Desarrollo Java','jpg'));
		echo (article('biwair','Biwair','Juego','jpg'));
		echo (article('dungeon-realms','Dungeon Realms','Juego','jpg'));
		echo (article('chromatic-td','Chromatic TD','Juego','png'));
		echo (article('mancala','Mancala','Juego','jpg'));
		echo (article('sinistra-defense','Sinistra Defense','Juego HTML5','png'));
		echo (article('tierra-media','Tierra Media','Mod para NWN','jpg'));
		echo (article('bitmaiden','Bit Maiden','Web / Wordpress','jpg'));
		echo (article('hecho-al-punto','Hecho al Punto','Web','png'));
		echo (article('estanco','Estanco de Llagostera','Web','jpg'));
		echo (article('taxi-san-roque','Taxi San Roque','Web','png'));
		echo (article('roxbury','Roxbury: The Club','Web','jpg'));
		?>
	</div>
</section>
<?php include 'footer.php'; ?>
