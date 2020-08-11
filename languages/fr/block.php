<?php
# $block['success']['content']['msg']
$block = array(
	'success' => array(
		'title' => 'Succès',
		'description' => 'Désolé votre message n\'a pas été envoyé',
		'keyword' => '',
		'url' => array(
			'default' => 'contact/success',
			'fr' => 'contact/succès',
			'en' => 'contact/success'
		),
		'content' => array(
			'msg' => 'Votre message à été bien envoyé avec success'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/success.jpg'  /*directory images from <exemple.tld>/assets */
		)
	),
	'error' => array(
		'title' => 'Erreur',
		'description' => 'Désolé votre message n\'a pas été envoyé',
		'keyword' => '',
		'url' => array(
			'default' => 'error',
			'fr' => 'erreur',
			'en' => 'error'
		),
		'content' => array(
			'line1' => 'Une erreur est survenue pendant l\'exécution de la requête.',
			'line2' => 'Vous ne pouvez pas visiter cette page car :',
			'line3' => 'bookmark/favori périmé',
			'line4' => 'une adresse erronée',
			'line5' => 'Un moteur de recherche possède un listing périmé pour ce site',
			'line6' => 'vous n\'avez pas accès à cette page',
			'line7' => 'Votre message n\'a pas été correctement envoyé avec succès'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/error.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_block = json_encode($block);

?>