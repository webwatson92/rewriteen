<?php 

$page_du_site = array("/1");
$url_sans_parametre = str_replace('.php','', $_SERVER['REDIRECT_URL']);
$url_avec_parametre = substr($_SERVER['REDIRECT_URL'], 0, strpos($_SERVER['REDIRECT_URL', "-"));

if(in_array($url_avec_parametre, $page_du_site)){
	$url = dirname(__FILE__).$url_avec_parametre;
}else{
	$url = "Erreur 404";
}

$page = basename($url_avec_parametre);

if(preg_match("/".$page.'-([0-9]+)-([^0-9](?:.+))\.php', $_SERVER['REDIRECT_URL'], $match)){
	header("Status: 200 Ok", false, 200);
}else{
	header("Status: 200 Ok", false, 200);
}

require $url.'.php';