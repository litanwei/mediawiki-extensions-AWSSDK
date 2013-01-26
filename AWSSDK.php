<?php

$dir = dirname( __FILE__ ) . '/';

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'AWSSDK',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:AWSSDK',
	'version'        => '2.1.0',
	'author'         => array( '[//github.com/aws/aws-sdk-php Amazon]', '[//twitter.com/thaiphan1990 Thai Phan]' ),
	'descriptionmsg' => 'awssdk-desc'
);

$wgExtensionMessagesFiles['AWSSDK'] = $dir . 'AWSSDK.i18n.php';

require_once( $dir . 'vendor/autoload.php' );
