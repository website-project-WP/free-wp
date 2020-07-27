<?php
#TESTING
$protocols_v = isset($_SERVER["HTTPS"]) ? 'https' : 'http';

$local_vendor = 'assets/vendor/';
$local_custom = 'assets/custom/';
$local_production = 'assets/production/';
$cdn_vendor = $protocols_v.'://cdnjs.cloudflare.com/ajax/libs/'; #cdnjs by Cloudflare (vendor directories)
#host external
$cdn_custom = $protocols_v.'://'.$_SERVER['SERVER_NAME'].'/assets/custom/'; #HTTPS/HTTPS TESTING 
$cdn_exvendor = $protocols_v.'://'.$_SERVER['SERVER_NAME'].'/assets/vendor/'; #HTTPS/HTTPS TESTING
$cdn_production = $protocols_v.'://'.$_SERVER['SERVER_NAME'].'/assets/production/'; #HTTPS/HTTPS TESTING

$version = array(
	'internal' => array(
		'bootstrap' => array(
			'css' => $local_vendor.'bootstrap/css/bootstrap.min.css',
			'js' => $local_vendor.'bootstrap/js/bootstrap.bundle.min.js'
		),
		'fontawesome' => array(
			'css' => $local_vendor.'fontawesome/css/all.min.css',
			'js' => $local_vendor.'fontawesome/js/all.min.js'
		),
		'aos' => array(
			'css' => $local_vendor.'aos/aos.css',
			'js' => $local_vendor.'aos/aos.js'
		),
		'boxicons' => array(
			'css' => $local_vendor.'boxicons/css/boxicons.min.css'
		),
		'icofont' => array(
			'css' => $local_vendor.'icofont/icofont.min.css'
		),
		'isotope-layout' => array(
			'js' => $local_vendor.'isotope-layout/isotope.pkgd.min.js'
		),
		'jquery' => array(
			'js' => $local_vendor.'jquery/jquery.min.js'
		),
		'jquery.easing' => array(
			'js' => $local_vendor.'jquery.easing/jquery.easing.min.js'
		),
		'jquery-sticky' => array(
			'js' => $local_vendor.'jquery-sticky/jquery-sticky.min.js'
		),
		'owl.carousel' => array(
			'css' => $local_vendor.'owl.carousel/assets/owl.carousel.min.css',
			'js' => $local_vendor.'owl.carousel/owl.carousel.min.js'
		),
		'intl-tel-input' => array(
			'css' => $local_vendor.'intl-tel-input/17.0.3/css/intlTelInput.css',
			'js' => $local_vendor.'intl-tel-input/17.0.3/js/intlTelInput.js'
		),
		'php-email-form' => array(
			'js' => $local_vendor.'php-email-form/validate.min.js'
		),
		'venobox' => array(
			'css' => $local_vendor.'venobox/venobox.min.css',
			'js' => $local_vendor.'venobox/venobox.min.js'
		),
		'custom' => array(
			'css' => array(
				'knight' => $local_custom.'css/knight.css',
				'langs' => $local_custom.'css/langs.css',
				'tpl' => $local_custom.'css/tpl.css',
			),
			'js' => array(
				/*'default' => $local_custom.'js/default.js',*/
				'knight' => $local_custom.'js/knight.js'
			)
		),
		'production' => array(
			'css' => array(
				'knight' => $local_production.'css/knight.min.css',
				'langs' => $local_production.'css/langs.min.css',
				'tpl' => $local_production.'css/tpl.min.css'
			),
			'js' => array(
				'knight' => $local_production.'js/knight.min.js'
			)
		)
	),
	'external' => array(
		/*CDNJ*/
		'bootstrap' => array(
			'css' => $cdn_vendor.'twitter-bootstrap/4.5.0/css/bootstrap.min.css',
			'js' => $cdn_vendor.'twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js'
		),
		'fontawesome' => array(
			'css' => $cdn_vendor.'font-awesome/5.13.0/css/all.min.css',
			'js' => $cdn_vendor.'font-awesome/5.13.0/js/all.min.js'
		),
		'jquery' => array(
			'js' => $cdn_vendor.'jquery/3.5.1/jquery.min.js'
		),
		'intl-tel-input' => array(
			'css' => $local_vendor.'intl-tel-input/17.0.3/css/intlTelInput.min.css',
			'js' => $local_vendor.'intl-tel-input/17.0.3/js/intlTelInput.min.js'
		),
		'aos' => array(
			'css' => $cdn_vendor.'aos/2.3.4/aos.css',
			'js' => $cdn_vendor.'aos/2.3.4/aos.js'
		),
		'boxicons' => array(
			'css' => $cdn_exvendor.'boxicons/css/boxicons.min.css'
		),
		'icofont' => array(
			'css' => $cdn_exvendor.'icofont/icofont.min.css'
		),
		
		'isotope-layout' => array(
			'js' => $cdn_exvendor.'isotope-layout/isotope.pkgd.min.js'
		),
		'jquery.easing' => array(
			'js' => $cdn_vendor.'jquery-easing/1.4.1/jquery.easing.min.js'
		),
		'jquery-sticky' => array(
			'js' => $cdn_vendor.'jquery.sticky/1.0.4/jquery.sticky.min.js'
		),
		'owl.carousel' => array(
			'css' => $cdn_vendor.'OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
			'js' => $cdn_vendor.'OwlCarousel2/2.3.4/owl.carousel.min.js'
		),
		'php-email-form' => array(
			'js' => $cdn_exvendor.'php-email-form/validate.js'
		),
		'venobox' => array(
			'css' => $cdn_vendor.'venobox/1.9.0/venobox.min.css',
			'js' => $cdn_vendor.'venobox/1.9.0/venobox.min.js'
		),
		'custom' => array(
			'css' => array(
				'langs' => $cdn_custom.'css/langs.css',
				'default' => $cdn_custom.'css/default.css',
				'knight' => $cdn_custom.'css/knight.css',
				'tpl' => $cdn_custom.'css/tpl.css'
			),
			'js' => array(
				'knight' => $cdn_custom.'js/knight.js'
			)
		),
		'production' => array(
			'css' => array(
				'knight' => $cdn_production.'css/knight.min.css',
				'tpl' => $cdn_production.'css/tpl.min.css'
			),
			'js' => array(
				'knight' => $cdn_production.'js/knight.min.js'
			)
		)
	)
);

$JE_version = json_encode($version);

?>