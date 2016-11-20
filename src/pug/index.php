+homeArticle(link, title, subTitle, ext)
	article
		a(href="/pages/{link}")
		header
			.details
				h2 {title}
				p {subTitle}
		span.bw-wrap
			img.bw(src="http://res.cloudinary.com/oscardc/image/upload/f_auto,q_auto/v1473228387/oscardc.com/img/{$link}/{$link}-bw.jpg", alt="{$title}", width=300, height=300)
		span.clr-wrap
			img.clr(src="http://res.cloudinary.com/oscardc/image/upload/f_auto,q_auto/v1473228387/oscardc.com/img/{$link}/{$link}.jpg", alt="{$title}", width=300, height=300)
	#top
		nav.nav.display-flex
			h1.title(itemprop="name") #{values.header.title}
			+langSelector(lang)
	header#header.fontFamily-antonio
		.phone.position-absolute-center.fontFamily-sourceSans
			time(itemprop="openingHours", datetime="Mo-Su") 24h &#9743;
			span(itemprop="telephone") 607 86 90 46
		.sub.position-absolute-center
			span.big #{values.header.big}
			br
			span.small.fontFamily-sourceSans #{values.header.small}
	#body.fontFamily-sourceSans
		#why.marginVertical-50
			h2.textAlign-center #{values.why.title}.#[span.color-light Taxi]?
			p #{values.why.body[0]} #[br] #{values.why.body[1]} #[br] #{values.why.body[2]}
		#services.marginTop-50
			#services-taxi.third.first
				img(src="/images/service-sotogrande.jpg", width=320, height=190, alt="#{values.profes.alt}")
				h2 #{values.profes.title}
				p #{values.profes.body}
			#services-golf.third
				img(src="/images/service-golf-transfers.jpg", width=320, height=190, alt="#{values.golf.alt}")
				h2 #{values.golf.title}
				p #{values.golf.body}
			#services-chauffeur.third.last
				img(src="/images/service-chauffeur.jpg", width=320, height=190, alt="#{values.chofer.alt}")
				h2 #{values.chofer.title}
				p #{values.chofer.body}


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
