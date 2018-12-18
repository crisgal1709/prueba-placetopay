<?php 

$ptp = [
	'id' => env('PTP_ID', '6dd490faf9cb87a9862245da41170ff2'),
	'key' => env('PTP_KEY', '024h1IlD'),
	'wdsl' => env('PTP_WSDL', 'https://test.placetopay.com/soap/pse/?wsdl'),
	'endpoint' => env('PTP_ENDPOINT', 'https://test.placetopay.com/soap/pse'),
	'options' => [
		'encoding' => 'UTF-8',
		'cache_wsdl' => WSDL_CACHE_NONE,
		'trace' => 1,
		'stream_context' => stream_context_create([
			'ssl' => [
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			],
			'http' => ['user_agent' => 'PHPSoapClient'],
		])
	]
];

return $ptp;