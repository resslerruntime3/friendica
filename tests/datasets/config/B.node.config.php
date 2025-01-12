<?php

return [
	'database' => [
		'hostname' => 'testhost',
		'username' => 'testuser',
		'password' => 'testpw',
		'database' => 'testdb',
		'charset' => 'utf8mb4',
	],
	'config' => [
		'admin_email' => 'admin@test.it',
		'sitename' => 'Friendica Social Network',
		'register_policy' => 2,
		'register_text' => '',
		'test' => [
			'a' => [
				'next' => 'value',
				'bool' => false,
				'innerArray' => [
					'a' => 4.55,
					'b' => false,
					'string2' => 'false',
				],
			],
			'v' => true,
			'v3' => 1,
			'v4' => 5.6443,
		],
	],
	'system' => [
		'default_timezone' => 'UTC',
		'language' => 'en',
		'theme' => 'frio',
		'int' => 23,
		'float' => 2.5,
		'with special chars' => 'I can\'t follow this "$&§%"$%§$%&\'[),',
	],
];
