<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/custom/compress.php'; 
#configuration
include_once 'configuration/sites.php';
include_once 'configuration/social.php';
include_once 'configuration/sponsor.php';
include_once 'configuration/translate.php';
include_once 'configuration/version.php';
include_once 'configuration/seo.php';
include_once 'configuration/private.php';
include_once 'configuration/partner.php';
include_once 'configuration/hosting.php';
include_once 'configuration/credits.php';
include_once 'configuration/marketing.php';
include_once 'configuration/images.php';
include_once 'configuration/business.php';
/*
include_once 'configuration/market.php';
include_once 'configuration/restaurant.php';
*/


#Decode
$sites = json_decode($JE_sites, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$partner = json_decode($JE_partner, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$business = json_decode($JE_business, true);
/*
#Supplémentaire
$markets = json_decode($JE_markets, true);
$restaurant = json_decode($JE_restaurant, true);
*/
#Configuration
$lang_finales = 'languages/'.$translate['manual']['frontend']['french'].'/general.php';
if (file_exists($lang_finales)) {
    include_once 'languages/'.$translate['auto']['files'].'/general.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/partner.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sponsor.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/law.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/email.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/block.php'; 
    include_once 'languages/'.$translate['auto']['files'].'/sitemap.php'; 
} else {
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/general.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/partner.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sponsor.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/law.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/email.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/block.php'; 
    include_once 'languages/'.$translate['manual']['frontend']['french'].'/sitemap.php'; 
}

#Translate
$general = json_decode($JE_translate_general, true);
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);

#Syslink
$protocols = $sites['protocol'];
$Languages_translate = isset($translate['auto']['seo']) ? $translate['manual']['frontend']['french'] : $translate['manual']['frontend']['english'];

#frontend
if(isset($_GET['lang'])){
	if($_GET['lang'] == $Languages_translate){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'law'){
			/**########## LAW DIR ##########**/	
				if(isset($_GET['full'])){
					if($_GET['full'] == 'cgu'){
						$title = $law['cgu']['title'];
						$description = $law['cgu']['description'];
						$keyword = $law['cgu']['keyword'];
						$urls = $law['cgu']['url']['default'];
						$imgs = $law['cgu']['sitemap']['images'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['cgu']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['cgu']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/cgu.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'cgv'){
						$title = $law['cgv']['title'];
						$description = $law['cgv']['description'];
						$keyword = $law['cgv']['keyword'];
						$urls = $law['cgv']['url']['default'];
						$imgs = $law['cgv']['sitemap']['images'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['cgv']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['cgv']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/cgv.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'dmca'){
						$title = $law['dmca']['title'];
						$description = $law['dmca']['description'];
						$keyword = $law['dmca']['keyword'];
						$urls = $law['dmca']['url']['default'];
						$imgs = $law['dmca']['sitemap']['images'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['dmca']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['dmca']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/dmca.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'legal'){
						$title = $law['legal']['title'];
						$description = $law['legal']['description'];
						$keyword = $law['legal']['keyword'];
						$urls = $law['legal']['url']['default'];
						$imgs = $law['legal']['sitemap']['images'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['legal']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['legal']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/legal.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'policy-privacy'){
						$title = $law['policy-privacy']['title'];
						$description = $law['policy-privacy']['description'];
						$keyword = $law['policy-privacy']['keyword'];
						$urls = $law['policy-privacy']['url']['default'];
						$imgs = $law['policy-privacy']['sitemap']['images'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['policy-privacy']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['policy-privacy']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['full'] == 'rgpd'){
						$title = $law['rgpd']['title'];
						$description = $law['rgpd']['description'];
						$keyword = $law['rgpd']['keyword'];
						$urls = $law['rgpd']['url']['default'];
						$imgs = $law['rgpd']['sitemap']['images'];
						define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['rgpd']['url']['fr']);
						define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['rgpd']['url']['en']);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/law/rgpd.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else {
						header('Location: '.$protocols.'://'.$sites['domain']);
						exit();
					}
				} else {
					$title = $law['pages']['title'];
					$description = $law['pages']['description'];
					$keyword = $law['pages']['keyword'];
					$urls = $law['pages']['url']['default'];
					$imgs = $law['pages']['sitemap']['images'];
					define('__WP_FR_URL__', $translate['manual']['frontend']['french'].'/'.$law['pages']['url']['fr']);
					define('__WP_EN_URL__', $translate['manual']['frontend']['english'].'/'.$law['pages']['url']['en']);
					include('themes/'.$sites['template'].'/header.php');
					include_once('themes/'.$sites['template'].'/law/full.php');
					include('themes/'.$sites['template'].'/footer.php');
				}
			} else {
				header('Location: '.$protocols.'://'.$sites['domain']);
				exit();
			}
		} else {
			header('Location: '.$protocols.'://'.$sites['domain']);
			exit();
		}
	} else {
		header('Location: '.$protocols.'://'.$sites['domain']);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$sites['domain']);
	exit();
}

?>