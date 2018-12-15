<?php

$sdk = new \Praxis\I10ManutencaoApiSdk();

$alias = 'xpto';
$login = 'fulano';
$password = '12345';

$page = 1;
$filters = [
	'company.ID' => 1
];

$requestData = new RequestData($page, $filters);
$resource = 'systems';

var_dump(
	$sdk->login($alias, $login, $password)
		->index('systems', $requestData)
		->toPaginatedResponse()
);