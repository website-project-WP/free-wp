<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/custom/compress.php'; 

#configuration
foreach (glob('configuration/*.php') as $GlobConfig) { include_once $GlobConfig; }

#Decode
$sites = json_decode($JE_sites, true);
$sponsor_config = json_decode($JE_sponsor_config, true);
$partner_config = json_decode($JE_partner_config, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$videos = json_decode($JE_videos, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$business = json_decode($JE_business, true);


#Syslink
$protocols = $sites['protocol'];
$CDNdomainTLD = (!empty($sites['sub-domain']) ? $sites['sub-domain'] : $sites['domain']);
$domainTLD = (!empty($sites['domain']) ? $sites['domain'] : $sites['auto']['domain']);

#auto translate
$browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : $translate['meta']['lang']['FR'];
$Languages_translate = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($browser_lang, 0,2) : $translate['manual']['frontend']['french'];
$phone_langs = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($browser_lang, 3,4) : $translate['manual']['backend']['french'];
$meta_langs = $browser_lang;



#Configuration
$lang_finales = 'languages/'.$Languages_translate.'/general.php';
if (file_exists($lang_finales)) {
	foreach (glob('languages/'.$Languages_translate.'/*.php') as $GlobLangAuto) { include_once $GlobLangAuto; }
	$DefineMajLang = strtoupper($Languages_translate);
	$DefineTranslateLang = $Languages_translate;
} else {
	foreach (glob('languages/'.$translate['manual']['frontend']['french'].'/*.php') as $GlobLangManual) { include_once $GlobLangManual; }
	$DefineMajLang = strtoupper($translate['manual']['frontend']['french']);
	$DefineTranslateLang = $translate['manual']['frontend']['french'];
}

#Translate
$general = json_decode($JE_translate_general, true);
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);
$about = json_decode($JE_translate_about, true);
$pool = json_decode($JE_translate_pool, true);
$pricing = json_decode($JE_translate_pricing, true);
$faqs = json_decode($JE_translate_faqs, true);
$others = json_decode($JE_translate_others, true);
$debug = json_decode($JE_translate_debug, true);

#frontend

//header('Content-type: application/xml; charset=utf-8');

if(isset($_GET['index'])){
	if($_GET['index'] == 'badge'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/badge.php');		
	} else if($_GET['index'] == 'rss'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/rss.php');
	} else if($_GET['index'] == 'BingSiteAuth'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/BingSiteAuth.php');
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		//exit();
		//echo '';
	}
} else if(isset($_GET['sitemap'])){
	if($_GET['sitemap'] == 'default'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/translate/default.php');	
	} else if($_GET['sitemap'] == 'index'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/sitemap.php');	
	} else if($_GET['sitemap'] == 'fr'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/translate/fr.php');	
	} else if($_GET['sitemap'] == 'en'){
		header('Content-type: application/xml; charset=utf-8');
		include_once('themes/seo/xml/translate/en.php');	
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		//exit();
		//echo '';
	}
} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		//exit();
		//echo '';
	
}
?>